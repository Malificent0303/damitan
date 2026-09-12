<?php

use App\Http\Controllers\HomeController;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

$products = Schema::hasTable('products')
    ? Product::query()->get()->keyBy('slug')->map(fn (Product $product) => $product->toArray())->all()
    : [];

Route::get('/', [HomeController::class, 'index'])->name('home');
$renderShop = function (Request $request, ?string $category = null) {
    $query = Product::query();
    $search = trim((string) $request->query('q', ''));
    $sort = (string) $request->query('sort', 'newest');

    if ($category) {
        $query->where('category', $category);
    }
    if ($search !== '') {
        $query->where(function ($productQuery) use ($search) {
            $productQuery->where('name', 'like', "%{$search}%")
                ->orWhere('category', 'like', "%{$search}%")
                ->orWhere('description', 'like', "%{$search}%");
        });
    }

    match ($sort) {
        'price_asc' => $query->orderBy('price'),
        'price_desc' => $query->orderByDesc('price'),
        'name' => $query->orderBy('name'),
        default => $query->latest(),
    };

    return view('shop', ['products' => $query->get(), 'search' => $search, 'sort' => $sort]);
};
Route::get('/shop', $renderShop)->name('shop');
Route::get('/shop/kids', fn (Request $request) => $renderShop($request, 'Kids Wear'))->name('shop.kids');
Route::get('/shop/adults', fn (Request $request) => $renderShop($request, 'Adult Wear'))->name('shop.adults');
Route::get('/shop/family-set', fn (Request $request) => $renderShop($request, 'Family Set'))->name('shop.family');
Route::get('/shop/new-arrivals', fn (Request $request) => $renderShop($request))->name('shop.new');
Route::view('/contact', 'contact')->name('contact');
Route::get('/products/{slug}', function (string $slug) use ($products) {
    abort_unless(isset($products[$slug]), 404);
    return view('product', ['product' => $products[$slug], 'slug' => $slug]);
})->name('product.show');
Route::get('/cart', function (Request $request) {
    $cart = $request->session()->get('cart', []);
    $subtotal = collect($cart)->sum(fn ($item) => $item['price'] * $item['quantity']);
    return view('cart', ['cart' => $cart, 'subtotal' => $subtotal, 'shipping' => $cart ? 120 : 0, 'discount' => $cart ? 50 : 0]);
})->name('cart');
Route::get('/checkout', function (Request $request) {
    if (empty($request->session()->get('cart', []))) {
        return redirect()->route('cart')->with('error', 'Your cart is empty. Please add a product before checkout.');
    }

    return view('checkout');
})->name('checkout');
Route::post('/checkout', function (Request $request) use ($products) {
    $cart = $request->session()->get('cart', []);
    if (empty($cart)) {
        return redirect()->route('cart')->with('error', 'Your cart is empty. Please add a product before checkout.');
    }

    $validated = $request->validate([
        'first_name' => ['required', 'string', 'max:100'],
        'last_name' => ['required', 'string', 'max:100'],
        'street_address' => ['required', 'string', 'max:255'],
        'city' => ['required', 'string', 'max:100'],
        'zip_code' => ['required', 'string', 'max:20'],
        'phone' => ['required', 'string', 'max:40'],
        'email' => ['nullable', 'email:rfc,dns', 'max:255'],
        'shipping' => ['required', 'in:jnt,lalamove,lbc,other'],
        'payment' => ['required', 'in:card,cod,gcash,bank,maya,maribank,gotyme'],
        'card_number' => ['nullable', 'required_if:payment,card', 'string', 'max:30'],
        'expiry_date' => ['nullable', 'required_if:payment,card', 'string', 'max:10'],
        'cvv' => ['nullable', 'required_if:payment,card', 'string', 'max:4'],
    ]);

    $shippingFees = ['jnt' => 100, 'lalamove' => 300, 'lbc' => 150, 'other' => 200];
    $subtotal = collect($cart)->sum(fn ($item) => $item['price'] * $item['quantity']);
    $shippingFee = $shippingFees[$validated['shipping']];
    $discount = 50;

    foreach ($cart as $item) {
        $product = Product::where('slug', $item['slug'])->first();
        if (! $product || $product->stock < $item['quantity']) {
            return redirect()->route('cart')->with('error', "{$item['name']} does not have enough stock for this quantity.");
        }
    }

    $order = DB::transaction(function () use ($validated, $cart, $subtotal, $shippingFee, $discount, $request) {
        // Orders still belong to a user row, but customers do not need an account.
        $user = $request->user();
        if (! $user) {
            $email = $validated['email'] ?: 'guest-' . Str::uuid() . '@guest.local';
            $user = User::firstOrCreate(
                ['email' => $email],
                ['name' => $validated['first_name'] . ' ' . $validated['last_name'], 'password' => Str::random(40)]
            );
        }
        $user->update([
            'name' => $validated['first_name'] . ' ' . $validated['last_name'],
            // Keep the authenticated account email to prevent duplicate-user conflicts.
            'email' => $user->email,
            'phone' => $validated['phone'],
            'address' => $validated['street_address'],
            'city' => $validated['city'],
            'zip_code' => $validated['zip_code'],
        ]);
        $userId = $user->id;
        $reference = 'TE-' . now()->format('ymdHis') . random_int(10, 99);
        $orderId = DB::table('orders')->insertGetId([
            'user_id' => $userId,
            'reference' => $reference,
            'street_address' => $validated['street_address'],
            'city' => $validated['city'],
            'zip_code' => $validated['zip_code'],
            'phone' => $validated['phone'],
            'shipping_method' => $validated['shipping'],
            'payment_method' => $validated['payment'],
            'subtotal' => $subtotal,
            'shipping_fee' => $shippingFee,
            'discount' => $discount,
            'total' => $subtotal + $shippingFee - $discount,
            'status' => 'pending',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        foreach ($cart as $item) {
            DB::table('order_items')->insert([
                'order_id' => $orderId,
                'product_slug' => $item['slug'],
                'product_name' => $item['name'],
                'quantity' => $item['quantity'],
                'unit_price' => $item['price'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            Product::where('slug', $item['slug'])->decrement('stock', $item['quantity']);
        }
        return ['reference' => $reference, 'user_id' => $userId];
    });

    $request->session()->forget('cart');
    if (! Auth::check()) {
        Auth::loginUsingId($order['user_id']);
        $request->session()->regenerate();
    }
    $request->session()->put('last_order_reference', $order['reference']);
    return redirect()->route('thank-you');
})->name('checkout.submit');
Route::get('/payment-qr/{method}', function (string $method) {
    abort_unless(in_array($method, ['gcash', 'bank', 'maya', 'maribank', 'gotyme'], true), 404);
    $directory = public_path('uploads/payment-qr');
    foreach (['png', 'jpg', 'jpeg', 'webp'] as $extension) {
        $file = $directory . DIRECTORY_SEPARATOR . $method . '.' . $extension;
        if (File::exists($file)) {
            return response()->file($file);
        }
    }
    abort(404);
})->name('payment-qr');
Route::get('/thank-you', function (Request $request) {
    $request->session()->forget('cart');
    $reference = $request->session()->get('last_order_reference');
    $order = $reference
        ? DB::table('orders')->where('reference', $reference)->first()
        : null;

    return view('thank-you', ['order' => $order]);
})->name('thank-you');
Route::get('/dashboard', function (Request $request) {
    $customer = $request->user();
    $orders = DB::table('orders')
        ->where('user_id', $customer->id)
        ->latest('created_at')
        ->get();
    $latestOrder = $orders->first();
    $latestItems = $latestOrder
        ? DB::table('order_items')->where('order_id', $latestOrder->id)->get()
        : collect();

    return view('dashboard', [
        'customer' => $customer,
        'orders' => $orders,
        'latestOrder' => $latestOrder,
        'latestItems' => $latestItems,
        'activeOrdersCount' => $orders->whereNotIn('status', ['delivered', 'cancelled'])->count(),
        'totalSpent' => $orders->whereNotIn('status', ['cancelled'])->sum('total'),
    ]);
})->middleware('auth')->name('dashboard');
Route::patch('/account', function (Request $request) {
    $customer = $request->user();
    $validated = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')->ignore($customer->id)],
        'phone' => ['nullable', 'string', 'max:40'],
        'address' => ['nullable', 'string', 'max:255'],
        'city' => ['nullable', 'string', 'max:100'],
        'zip_code' => ['nullable', 'string', 'max:20'],
        'new_password' => ['nullable', 'string', 'min:8', 'same:new_password_confirmation'],
    ]);

    $newPassword = $validated['new_password'] ?? null;
    unset($validated['new_password']);
    $customer->update($validated);
    if ($newPassword) {
        $customer->password = $newPassword;
        $customer->save();
    }

    return back()->with('account_success', 'Your account details have been updated.');
})->middleware('auth')->name('account.update');
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('login');
})->middleware('auth')->name('logout');
Route::post('/staff/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('staff.login');
})->name('staff.logout');
Route::view('/login', 'login')->name('login');
Route::view('/register', 'register')->name('register');
Route::post('/register', function (Request $request) {
    $validated = $request->validate([
        'fullname' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email', 'max:255'],
        'password' => ['required', 'string', 'min:8'],
        'confirmPassword' => ['required', 'same:password'],
        'terms' => ['accepted'],
    ]);

    // A customer may have placed a guest order using this email already.
    // Claim that existing customer record when creating an account.
    $user = User::firstOrNew(['email' => $validated['email']]);
    $user->name = $validated['fullname'];
    $user->password = $validated['password'];
    $user->save();

    Auth::login($user);
    $request->session()->regenerate();

    return redirect()->route('home')->with('success', 'Account created successfully. Welcome to Triple\'s E!');
})->name('register.submit');
Route::post('/login', function (Request $request) {
    $validated = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required', 'string'],
    ]);

    if (! Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']])) {
        return back()->withErrors(['email' => 'The email or password is incorrect.'])->onlyInput('email');
    }

    $request->session()->regenerate();

    return redirect()->route('dashboard');
})->name('login.submit');
Route::get('/admin/dashboard', function (Request $request) {
    abort_if($request->user() && in_array($request->user()->role, ['staff', 'manager'], true), 403);
    $orders = DB::table('orders')
        ->join('users', 'users.id', '=', 'orders.user_id')
        ->select('orders.*', 'users.name as customer_name')
        ->latest('orders.created_at')
        ->get();
    $statusCounts = DB::table('orders')->select('status', DB::raw('COUNT(*) as total'))->groupBy('status')->pluck('total', 'status');
    $revenue = $orders->where('status', '!=', 'cancelled')->sum('total');
    $products = Product::orderBy('stock')->get();
    $financialEntries = DB::table('financial_transactions')->latest()->get();
    $staffAccounts = User::whereIn('role', ['staff', 'manager'])->orderBy('name')->get();
    $capital = $financialEntries->where('type', 'capital')->sum('amount');
    $expenses = $financialEntries->where('type', 'expense')->sum('amount');
    $withdrawals = $financialEntries->where('type', 'withdrawal')->sum('amount');

    return view('admin-dashboard', [
        'orders' => $orders,
        'statusCounts' => $statusCounts,
        'revenue' => $revenue,
        'products' => $products,
        'lowStockCount' => $products->where('stock', '<=', 10)->count(),
        'lowStockProducts' => $products->where('stock', '<=', 10),
        'highStockProducts' => $products->where('stock', '>=', 100),
        'outOfStockCount' => $products->where('stock', 0)->count(),
        'inventoryValue' => $products->sum(fn ($product) => $product->price * $product->stock),
        'financialEntries' => $financialEntries,
        'capital' => $capital,
        'expenses' => $expenses,
        'withdrawals' => $withdrawals,
        'cashBalance' => $revenue + $capital - $expenses - $withdrawals,
        'staffAccounts' => $staffAccounts,
    ]);
})->name('admin.dashboard');
Route::post('/admin/finance', function (Request $request) {
    abort_if($request->user() && in_array($request->user()->role, ['staff', 'manager'], true), 403);
    $validated = $request->validate([
        'type' => ['required', 'in:capital,expense,withdrawal'],
        'amount' => ['required', 'numeric', 'min:0.01'],
        'description' => ['required', 'string', 'max:255'],
    ]);

    DB::table('financial_transactions')->insert([
        ...$validated,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return back()->with('finance_success', 'Financial record saved successfully.');
})->name('admin.finance.store');
Route::post('/admin/staff', function (Request $request) {
    abort_if($request->user() && in_array($request->user()->role, ['staff', 'manager'], true), 403);
    $validated = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email', 'max:255', 'unique:users,email'],
        'password' => ['required', 'string', 'min:8'],
        'role' => ['required', 'in:staff,manager'],
    ]);

    User::create($validated);

    return back()->with('staff_success', 'Staff account created successfully.');
})->name('admin.staff.store');
Route::get('/staff/login', function () {
    return view('staff-login');
})->name('staff.login');
Route::post('/staff/login', function (Request $request) {
    $validated = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required', 'string'],
    ]);

    if (! Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']])) {
        return back()->withErrors(['email' => 'The staff email or password is incorrect.'])->onlyInput('email');
    }

    if (! in_array(Auth::user()->role, ['staff', 'manager', 'admin'], true)) {
        Auth::logout();
        return back()->withErrors(['email' => 'This account is not a staff or manager account.']);
    }

    $request->session()->regenerate();
    return redirect()->route('staff.dashboard');
})->name('staff.login.submit');
Route::get('/staff/dashboard', function (Request $request) {
    abort_unless($request->user() && in_array($request->user()->role, ['staff', 'manager', 'admin'], true), 403);
    $orders = DB::table('orders')
        ->join('users', 'users.id', '=', 'orders.user_id')
        ->select('orders.*', 'users.name as customer_name')
        ->latest('orders.created_at')
        ->get();
    $products = Product::orderBy('stock')->get();

    return view('staff-dashboard', [
        'staff' => $request->user(),
        'orders' => $orders,
        'products' => $products,
        'lowStockCount' => $products->where('stock', '<=', 10)->count(),
    ]);
})->name('staff.dashboard');
Route::patch('/admin/orders/{order}/status', function (Request $request, int $order) {
    $validated = $request->validate([
        'status' => ['required', 'in:pending,processing,packed,shipped,delivered,cancelled'],
    ]);

    $updated = DB::table('orders')->where('id', $order)->update([
        'status' => $validated['status'],
        'updated_at' => now(),
    ]);

    abort_unless($updated, 404);

    return back()->with('order_success', 'Order status updated successfully.');
})->name('admin.order.status');
Route::view('/admin/login', 'admin-login')->name('admin.login');
Route::post('/admin/login', function (Request $request) {
    $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required', 'string'],
    ]);
    return redirect()->route('admin.dashboard');
})->name('admin.login.submit');
Route::get('/admin/inventory', function () {
    return view('admin-inventory', ['products' => Product::orderBy('name')->get()]);
})->name('admin.inventory');
Route::post('/admin/inventory', function (Request $request) {
    abort_if($request->user() && ! in_array($request->user()->role, ['manager', 'admin'], true), 403);
    $validated = $request->validate([
        'slug' => ['required', 'string', 'max:255', 'alpha_dash', 'unique:products,slug'],
        'name' => ['required', 'string', 'max:255'],
        'badge' => ['nullable', 'string', 'max:100'],
        'category' => ['required', 'string', 'max:100'],
        'icon' => ['required', 'string', 'max:100'],
        'price' => ['required', 'numeric', 'min:0'],
        'original_price' => ['required', 'numeric', 'min:0'],
        'description' => ['required', 'string', 'max:1000'],
        'stock' => ['required', 'integer', 'min:0', 'max:1000000'],
    ]);
    Product::create($validated);

    return back()->with('inventory_success', 'Product added successfully.');
})->name('admin.inventory.store');
Route::patch('/admin/inventory/{product}', function (Request $request, Product $product) {
    $validated = $request->validate([
        'slug' => ['required', 'string', 'max:255', 'alpha_dash', Rule::unique('products', 'slug')->ignore($product->id)],
        'name' => ['required', 'string', 'max:255'],
        'badge' => ['nullable', 'string', 'max:100'],
        'category' => ['required', 'string', 'max:100'],
        'icon' => ['required', 'string', 'max:100'],
        'price' => ['required', 'numeric', 'min:0'],
        'original_price' => ['required', 'numeric', 'min:0'],
        'description' => ['required', 'string', 'max:1000'],
        'stock' => ['required', 'integer', 'min:0', 'max:1000000'],
    ]);
    $product->update($validated);

    return back()->with('inventory_success', "{$product->name} inventory updated.");
})->name('admin.inventory.update');
Route::post('/cart/add/{slug}', function (Request $request, string $slug) use ($products) {
    abort_unless(isset($products[$slug]), 404);
    $cart = $request->session()->get('cart', []);
    $cart[$slug] = [
        ...$products[$slug],
        'slug' => $slug,
        'quantity' => ($cart[$slug]['quantity'] ?? 0) + 1,
    ];
    $request->session()->put('cart', $cart);
    return redirect()->route('cart');
})->name('cart.add');
Route::post('/cart/remove/{slug}', function (Request $request, string $slug) {
    $cart = $request->session()->get('cart', []);
    unset($cart[$slug]);
    $request->session()->put('cart', $cart);
    return redirect()->route('cart');
})->name('cart.remove');
Route::post('/cart/update/{slug}', function (Request $request, string $slug) {
    $cart = $request->session()->get('cart', []);
    if (isset($cart[$slug])) {
        $cart[$slug]['quantity'] = max(1, $cart[$slug]['quantity'] + (int) $request->input('delta', 0));
        $request->session()->put('cart', $cart);
    }
    return redirect()->route('cart');
})->name('cart.update');
Route::post('/generate', [HomeController::class, 'generate'])->name('generate');
