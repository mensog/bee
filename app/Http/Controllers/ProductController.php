<?php

namespace App\Http\Controllers;

use App\Product;

class ProductController extends Controller
{
    public function show($name)
    {
        $product = Product::with('category')->where('friendly_url_name', $name)->firstOrFail();
        $cart = app('Cart');
        $cartContent = $cart->content;
        if (isset($cartContent[$product->id])) {
            $inCartQuantity = $cartContent[$product->id];
        } else {
            $inCartQuantity = 0;
        }
        $favoritesList = app('FavoriteList');
        $favoritesListContent = $favoritesList->content;
        if (in_array($product->id, $favoritesListContent)) {
            $inFavoritesList = true;
        } else {
            $inFavoritesList = false;
        }
        return view('pages.product', ['product' => $product, 'inCartQuantity' => $inCartQuantity, 'inFavoritesList' => $inFavoritesList]);
    }

    /**
     * Контроллер вывода товаров в админке
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = Product::paginate(20);
        $cart = app('Cart');
        $cartContent = $cart->content;
        $favoritesList = app('FavoriteList');
        $favoritesListContent = $favoritesList->content;
        return view('pages.admin.products', ['products' => $products, 'cartContent' => $cartContent, 'favoritesListContent' => $favoritesListContent]);
    }
}
