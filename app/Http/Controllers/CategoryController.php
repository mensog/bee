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
     * Вывод товаров из категории, или общий список товаров если категория не выбрана
     *
     * @return \Illuminate\Http\Response
     */
    public function index($storeSlug, $name = '')
    {
        $store = Partner::where('slug', $storeSlug)->firstOrFail();
        $categories = Category::getCatalog($store->id);
        if ($name === '') {
            $productsPaginator = Product::where('store_id', $store->id)->paginate(50);
            $breadcrumbs = [];
            $category = null;
            $activeCategorySlugs = [];
        } else {
            $category = Category::where('friendly_url_name', $name)->firstOrFail();
            $productsQuery = $category->productsWithChildQuery($store->id);
            $productsPaginator = $productsQuery->where('store_id', $store->id)->paginate(50);
            $breadcrumbs = $category->getBreadcrumbs();
            $activeCategorySlugs = array_keys($breadcrumbs);
        }
        $cart = app('Cart');
        $cartContent = $cart->content;
        $favoritesList = app('FavoriteList');
        $favoritesListContent = $favoritesList->content;
        return view('pages.catalog', [
            'breadcrumbs' => $breadcrumbs,
            'products' => $productsPaginator,
            'cartContent' => $cartContent,
            'favoritesListContent' => $favoritesListContent,
            'store' => $store,
            'currentCategory' => $category,
            'activeCategorySlugs' => $activeCategorySlugs,
        ]);
    }
}
