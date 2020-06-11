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

    /**
     * Контроллер вывода товаров в админке
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = Product::paginate(20);
        return view('pages.admin.products', ['products' => $products]);
    }
}
