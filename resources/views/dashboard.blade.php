<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Customer Dashboard | Triple's E</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600;700;800&family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined&display=swap" rel="stylesheet">
<script>tailwind.config={theme:{extend:{colors:{cream:"#FFF8EA",vanilla:"#FFFDF6",peach:"#FFD9C7",coral:"#FF7F73",coralDark:"#E95F57",mint:"#BFEEDC",mintDark:"#67BFA1",butter:"#FFE8A3",cocoa:"#563F35",softText:"#7A6258",blush:"#FFF0F2"},fontFamily:{headline:["Baloo 2","cursive"],body:["Nunito","sans-serif"]},boxShadow:{card:"0 18px 45px rgba(233,95,87,.12)",soft:"0 24px 70px rgba(120,72,48,.14)"}}}}</script>
<style>body{font-family:Nunito,sans-serif;background:radial-gradient(circle at top left,rgba(255,217,199,.72),transparent 34rem),radial-gradient(circle at bottom right,rgba(191,238,220,.82),transparent 38rem),#FFF8EA}.material-symbols-outlined{font-variation-settings:'FILL' 0,'wght' 600,'opsz' 24}</style>
</head>
<body class="min-h-screen bg-cream text-cocoa">
<nav class="px-5 py-4 md:px-10"><div class="mx-auto flex max-w-7xl items-center justify-between rounded-full border border-white/80 bg-vanilla/85 px-5 py-3 shadow-card"><a class="flex items-center gap-3" href="{{ route('home') }}"><span class="grid size-11 place-items-center rounded-full bg-coral text-white"><span class="material-symbols-outlined">checkroom</span></span><span><span class="block font-headline text-2xl font-extrabold">Triple's E</span><span class="block text-[11px] font-extrabold uppercase tracking-[.22em] text-coralDark">Daily Wear</span></span></a><div class="flex items-center gap-3"><a href="{{ route('shop') }}" class="hidden rounded-full bg-peach px-5 py-3 font-extrabold text-cocoa sm:block">Shop</a><a href="{{ route('cart') }}" class="grid size-11 place-items-center rounded-full bg-mint/70"><span class="material-symbols-outlined">shopping_bag</span></a><form method="POST" action="{{ route('logout') }}">@csrf<button class="rounded-full bg-blush px-4 py-3 text-sm font-extrabold text-coralDark" type="submit">Log out</button></form></div></div></nav>
<main class="mx-auto max-w-7xl px-5 pb-16 pt-8 lg:px-8">
<div class="mb-8 rounded-[2.75rem] bg-white/75 p-8 shadow-soft sm:p-12"><p class="inline-flex rounded-full bg-peach px-4 py-2 text-xs font-black uppercase tracking-[.18em] text-coralDark">Customer dashboard</p><h1 class="mt-5 font-headline text-6xl font-extrabold leading-none">Welcome, {{ $customer->name }}!</h1><p class="mt-4 max-w-2xl text-lg leading-8 text-softText">Your dashboard shows your real orders and account activity.</p><p class="mt-2 text-sm font-bold text-softText">{{ $customer->email }}</p></div>
<div class="grid grid-cols-1 gap-6 md:grid-cols-3">
<div class="rounded-[2rem] bg-white p-6 shadow-card"><span class="grid size-14 place-items-center rounded-full bg-mint text-mintDark"><span class="material-symbols-outlined text-3xl">local_shipping</span></span><p class="mt-5 text-sm font-black uppercase tracking-[.16em] text-softText">Active Orders</p><p class="mt-1 font-headline text-4xl font-extrabold">{{ $activeOrdersCount }}</p><p class="mt-2 font-bold text-softText">From your orders</p></div>
<div class="rounded-[2rem] bg-white p-6 shadow-card"><span class="grid size-14 place-items-center rounded-full bg-butter text-cocoa"><span class="material-symbols-outlined text-3xl">payments</span></span><p class="mt-5 text-sm font-black uppercase tracking-[.16em] text-softText">Total Spent</p><p class="mt-1 font-headline text-4xl font-extrabold">₱{{ number_format($totalSpent, 2) }}</p><p class="mt-2 font-bold text-softText">Completed and active orders</p></div>
<div class="rounded-[2rem] bg-white p-6 shadow-card"><span class="grid size-14 place-items-center rounded-full bg-peach text-coralDark"><span class="material-symbols-outlined text-3xl">receipt_long</span></span><p class="mt-5 text-sm font-black uppercase tracking-[.16em] text-softText">Total Orders</p><p class="mt-1 font-headline text-4xl font-extrabold">{{ $orders->count() }}</p><p class="mt-2 font-bold text-softText">Orders on your account</p></div>
</div>
<section class="mt-8 rounded-[2.5rem] bg-white/85 p-6 shadow-card sm:p-8"><div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between"><div><p class="font-headline text-xl font-extrabold text-coralDark">Account details</p><h2 class="font-headline text-4xl font-extrabold">Your personal information</h2></div><span class="text-sm font-bold text-softText">Update your details anytime.</span></div>
@if (session('account_success'))<div class="mt-5 rounded-2xl bg-mint px-5 py-4 font-extrabold text-cocoa" role="status">{{ session('account_success') }}</div>@endif
@if ($errors->any())<div class="mt-5 rounded-2xl bg-blush px-5 py-4 font-extrabold text-coralDark" role="alert">Please check the highlighted account details.</div>@endif
<form class="mt-7 grid grid-cols-1 gap-5 md:grid-cols-2" method="POST" action="{{ route('account.update') }}">
@csrf @method('PATCH')
<label class="block text-sm font-extrabold text-softText">Full name<input class="mt-2 w-full rounded-2xl border-2 border-peach/70 bg-cream px-4 py-3 font-bold text-cocoa outline-none focus:border-coral" name="name" value="{{ old('name', $customer->name) }}" required></label>
<label class="block text-sm font-extrabold text-softText">Email address<input class="mt-2 w-full rounded-2xl border-2 border-peach/70 bg-cream px-4 py-3 font-bold text-cocoa outline-none focus:border-coral" type="email" name="email" value="{{ old('email', $customer->email) }}" required></label>
<label class="block text-sm font-extrabold text-softText">Phone number<input class="mt-2 w-full rounded-2xl border-2 border-peach/70 bg-cream px-4 py-3 font-bold text-cocoa outline-none focus:border-coral" name="phone" value="{{ old('phone', $customer->phone) }}" placeholder="09xxxxxxxxx"></label>
<label class="block text-sm font-extrabold text-softText">Address<input class="mt-2 w-full rounded-2xl border-2 border-peach/70 bg-cream px-4 py-3 font-bold text-cocoa outline-none focus:border-coral" name="address" value="{{ old('address', $customer->address) }}" placeholder="House no., street, barangay"></label>
<label class="block text-sm font-extrabold text-softText">City<input class="mt-2 w-full rounded-2xl border-2 border-peach/70 bg-cream px-4 py-3 font-bold text-cocoa outline-none focus:border-coral" name="city" value="{{ old('city', $customer->city) }}"></label>
<label class="block text-sm font-extrabold text-softText">ZIP code<input class="mt-2 w-full rounded-2xl border-2 border-peach/70 bg-cream px-4 py-3 font-bold text-cocoa outline-none focus:border-coral" name="zip_code" value="{{ old('zip_code', $customer->zip_code) }}"></label>
<label class="block text-sm font-extrabold text-softText">Set login password <span class="font-normal">(optional)</span><input class="mt-2 w-full rounded-2xl border-2 border-peach/70 bg-cream px-4 py-3 font-bold text-cocoa outline-none focus:border-coral" type="password" name="new_password" minlength="8" placeholder="At least 8 characters"></label>
<label class="block text-sm font-extrabold text-softText">Confirm login password<input class="mt-2 w-full rounded-2xl border-2 border-peach/70 bg-cream px-4 py-3 font-bold text-cocoa outline-none focus:border-coral" type="password" name="new_password_confirmation" minlength="8" placeholder="Repeat password"></label>
<div class="md:col-span-2"><button class="rounded-full bg-coral px-7 py-4 font-headline font-extrabold uppercase tracking-[.12em] text-white shadow-card hover:bg-coralDark" type="submit">Save account details</button></div>
</form></section>
<div class="mt-8 grid grid-cols-1 gap-6 lg:grid-cols-[1fr_380px]">
<section class="rounded-[2.5rem] bg-white/85 p-6 shadow-card sm:p-8"><div class="flex items-center justify-between gap-4"><div><p class="font-headline text-xl font-extrabold text-coralDark">Recent activity</p><h2 class="font-headline text-4xl font-extrabold">Your latest order</h2></div>@if($latestOrder)<span class="rounded-full bg-mint px-4 py-2 text-xs font-black uppercase tracking-[.14em] text-cocoa">{{ str_replace('_', ' ', $latestOrder->status) }}</span>@endif</div>
@if($latestOrder)
<div class="mt-7 rounded-[2rem] bg-cream p-6"><div class="flex flex-col gap-5 sm:flex-row sm:items-center sm:justify-between"><div><p class="text-xs font-black uppercase tracking-[.16em] text-softText">Order #{{ $latestOrder->reference }}</p><h3 class="mt-2 font-headline text-3xl font-extrabold">{{ $latestItems->pluck('product_name')->join(', ') }}</h3><p class="mt-2 font-bold text-softText">Placed {{ date('M d, Y', strtotime($latestOrder->created_at)) }}</p></div><span class="font-headline text-3xl font-extrabold text-coralDark">₱{{ number_format($latestOrder->total, 2) }}</span></div><div class="mt-7 grid grid-cols-3 gap-2 text-center text-xs font-extrabold text-softText"><div><span class="mx-auto grid size-8 place-items-center rounded-full bg-coral text-white">✓</span><p class="mt-2">Placed</p></div><div><span class="mx-auto grid size-8 place-items-center rounded-full {{ in_array($latestOrder->status, ['packed', 'shipped', 'delivered']) ? 'bg-coral text-white' : 'bg-slate-200 text-slate-500' }}">{{ in_array($latestOrder->status, ['packed', 'shipped', 'delivered']) ? '✓' : '•' }}</span><p class="mt-2">Packed</p></div><div><span class="mx-auto grid size-8 place-items-center rounded-full {{ $latestOrder->status === 'delivered' ? 'bg-coral text-white' : 'bg-mint text-cocoa' }}">{{ $latestOrder->status === 'delivered' ? '✓' : '•' }}</span><p class="mt-2">Delivery</p></div></div></div>
@else
<div class="mt-7 rounded-[2rem] bg-cream p-8 text-center"><span class="material-symbols-outlined text-6xl text-coral">receipt_long</span><h3 class="mt-3 font-headline text-3xl font-extrabold">No orders yet</h3><p class="mt-2 font-bold text-softText">Your real order activity will appear here after your first purchase.</p><a href="{{ route('shop') }}" class="mt-6 inline-flex rounded-full bg-coral px-6 py-4 font-headline font-extrabold uppercase tracking-[.12em] text-white">Shop Collection</a></div>
@endif
</section><aside class="rounded-[2.5rem] bg-coral p-7 text-white shadow-soft"><span class="material-symbols-outlined text-5xl">shopping_bag</span><h2 class="mt-5 font-headline text-4xl font-extrabold leading-none">Ready for more comfort?</h2><p class="mt-4 text-lg leading-7 text-white/90">Explore fresh picks for kids and adults.</p><a href="{{ route('shop') }}" class="mt-7 inline-flex rounded-full bg-white px-6 py-4 font-headline font-extrabold uppercase tracking-[.12em] text-coralDark">Shop Collection</a></aside></div>
<section class="mt-8 rounded-[2.5rem] bg-white/85 p-6 shadow-card sm:p-8">
<div class="mb-6"><p class="font-headline text-xl font-extrabold text-coralDark">Order history</p><h2 class="font-headline text-4xl font-extrabold">All your transactions</h2></div>
<div class="space-y-4">
@forelse($orders as $customerOrder)
<div class="rounded-[1.75rem] bg-cream p-5">
<div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
<div><p class="text-xs font-black uppercase tracking-[.16em] text-softText">Order #{{ $customerOrder->reference }}</p><p class="mt-1 font-bold text-cocoa">{{ date('M d, Y', strtotime($customerOrder->created_at)) }}</p></div>
<div class="flex items-center gap-3"><span class="rounded-full bg-mint px-4 py-2 text-xs font-black uppercase tracking-[.12em] text-cocoa">{{ str_replace('_', ' ', $customerOrder->status) }}</span><span class="font-headline text-2xl font-extrabold text-coralDark">₱{{ number_format($customerOrder->total, 2) }}</span></div>
</div>
<p class="mt-4 text-sm font-bold text-softText">Delivery: {{ ucfirst(str_replace('_', ' ', $customerOrder->shipping_method)) }} · Payment: {{ ucfirst(str_replace('_', ' ', $customerOrder->payment_method)) }}</p>
</div>
@empty
<p class="rounded-2xl bg-cream p-6 text-center font-bold text-softText">No transactions yet.</p>
@endforelse
</div>
</section>
</main>
<footer class="px-5 pb-10 text-center text-xs font-extrabold uppercase tracking-[.18em] text-softText">© 2026 Triple's E Daily Wear</footer>
</body>
</html>
