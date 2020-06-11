<?php

namespace App\Http\Controllers;

use App\Product;

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
        return view('pages.main', ['bannerProducts' => $bannerProducts, 'recentProducts' => $recentProducts]);
    }
}
