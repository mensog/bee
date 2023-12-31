<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    /**
     * Вывод списка категорий, разделенный на страницы
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::withCount('products')->get(); // Ограничение для демонстрации и пока нет разделения на категории и подкатегории
        $productsPaginator = Product::paginate(10);
        $cart = app('Cart');
        $cartContent = $cart->content;
        $favoritesList = app('FavoriteList');
        $favoritesListContent = $favoritesList->content;
        $view = view('pages.catalog', [
            'categories' => $categories,
            'products' => $productsPaginator,
            'cartContent' => $cartContent,
            'favoritesListContent' => $favoritesListContent
        ]);

        return response($view);
    }

    public function show($name)
    {
        $categories = Category::withCount('products')->get(); // Ограничение для демонстрации и пока нет разделения на категории и подкатегории
        $productsPaginator = Category::where('friendly_url_name', $name)->firstOrFail()->products()->paginate(50);
        $cart = app('Cart');
        $cartContent = $cart->content;
        $favoritesList = app('FavoriteList');
        $favoritesListContent = $favoritesList->content;
        return view('pages.category', ['categories' => $categories, 'products' => $productsPaginator, 'cartContent' => $cartContent, 'favoritesListContent' => $favoritesListContent]);
    }
}
