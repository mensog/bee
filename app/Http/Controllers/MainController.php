<?php

namespace App\Http\Controllers;

use App\Models\Product;

class MainController extends Controller
{
    /**
     * Вывод главной страницы
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bannerProducts = Product::inRandomOrder()->limit(2)->get();
        $recentProducts = Product::orderBy('created_at','desc')->limit(18)->get();
        $cart = app('Cart');
        $cartContent = $cart->content;
        $favoritesList = app('FavoriteList');
        $favoritesListContent = $favoritesList->content;
        $view = view('pages.main', [
            'bannerProducts' => $bannerProducts,
            'recentProducts' => $recentProducts,
            'cartContent' => $cartContent,
            'favoritesListContent' => $favoritesListContent
        ]);
    
        return response($view);

    }
}
