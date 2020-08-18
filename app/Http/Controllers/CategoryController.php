<?php

namespace App\Http\Controllers;

use App\Category;
use App\Partner;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Вывод списка категорий, разделенный на страницы
     *
     * @return \Illuminate\Http\Response
     */
    public function index($storeSlug)
    {
        $store = Partner::where('slug', $storeSlug)->firstOrFail();
        $categories = Category::getCatalog($store->id);
        $productsPaginator = Product::paginate(50);
        $cart = app('Cart');
        $cartContent = $cart->content;
        $favoritesList = app('FavoriteList');
        $favoritesListContent = $favoritesList->content;
        return view('pages.catalog', [
            'products' => $productsPaginator,
            'cartContent' => $cartContent,
            'favoritesListContent' => $favoritesListContent,
            'store' => $store,
        ]);
    }

    public function show($storeSlug, $name)
    {
        $store = Partner::where('slug', $storeSlug)->firstOrFail();
        $categories = Category::getCatalog($store->id);
        $category = Category::where('friendly_url_name', $name)->firstOrFail();
        $productsQuery = $category->productsWithChildQuery($store->id);
        $productsPaginator = $productsQuery->where('store_id', $store->id)->paginate(50);
        $cart = app('Cart');
        $cartContent = $cart->content;
        $favoritesList = app('FavoriteList');
        $favoritesListContent = $favoritesList->content;
        return view('pages.category', [
            'products' => $productsPaginator,
            'cartContent' => $cartContent,
            'favoritesListContent' => $favoritesListContent,
            'store' => $store,
            ]);
    }
}
