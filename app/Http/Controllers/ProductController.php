<?php

namespace App\Http\Controllers;

use App\Product;

class ProductController extends Controller
{
    public function show($name)
    {
        $product = Product::with('category')->where('friendly_url_name', $name)->firstOrFail();
        return view('pages.product', ['product' => $product]);
    }
}
