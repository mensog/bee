<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Вывод главной страницы
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = app('Cart');
        $cartContent = $cart->content;
        $favoritesList = app('FavoriteList');
        $favoritesListContent = $favoritesList->content;
        return view('pages.main', ['cartContent' => $cartContent, 'favoritesListContent' => $favoritesListContent]);
    }
    public function showStore(Request $request, $storeSlug)
    {
        $cart = app('Cart');
        $cartContent = $cart->content;
        $favoritesList = app('FavoriteList');
        $favoritesListContent = $favoritesList->content;
        return view('pages.main', ['cartContent' => $cartContent, 'favoritesListContent' => $favoritesListContent]);
    }
}
