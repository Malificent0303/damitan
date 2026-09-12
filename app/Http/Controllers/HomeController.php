<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the application home page.
     */
    public function index()
    {
        return view('home', ['products' => Product::orderBy('created_at')->get()]);
    }

    /**
     * Handle the future AI generation form.
     */
    public function generate(Request $request)
    {
        $request->validate([
            'business_type' => ['required', 'string', 'max:255'],
        ]);

        return 'Generated successfully';
    }
}
