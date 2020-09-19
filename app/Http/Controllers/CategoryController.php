<?php

namespace App\Http\Controllers;

use App\Category;
use App\Partner;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public const PRODUCTS_PER_PAGE = 50;

    /**
     * Вывод товаров из категории, или общий список товаров если категория не выбрана
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $name = '')
    {
        $store = null;
        if($request->has('storeId')) {
            $store = Partner::find($request->storeId);
        }
        if ($name === '') {
            if ($store) {
                $productsPaginator = Product::where('store_id', $store->id)->paginate(self::PRODUCTS_PER_PAGE);
            } else {
                $productsPaginator = Product::paginate(self::PRODUCTS_PER_PAGE);
            }
            $breadcrumbs = [];
            $category = null;
            $activeCategorySlugs = [];
        } else {
            $category = Category::where('friendly_url_name', $name)->firstOrFail();
            $productsQuery = $category->productsWithChildQuery();
            if ($store) {
                $productsPaginator = $productsQuery->where('store_id', $store->id)->paginate(self::PRODUCTS_PER_PAGE);
            } else {
                $productsPaginator = $productsQuery->paginate(self::PRODUCTS_PER_PAGE);
            }
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
