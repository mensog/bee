<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;

class CategoryController extends Controller
{
    /**
     * Вывод списка категорий, разделенный на страницы
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::withCount('products')->limit(20)->get(); // Ограничение для демонстрации и пока нет разделения на категории и подкатегории
        $productsPaginator = Product::paginate(50);
        return view('pages.catalog', ['categories' => $categories, 'products' => $productsPaginator]);
    }

    public function show($name)
    {
        $categories = Category::withCount('products')->limit(20)->get(); // Ограничение для демонстрации и пока нет разделения на категории и подкатегории
        $productsPaginator = Category::where('friendly_url_name', $name)->firstOrFail()->products()->paginate(50);
        return view('pages.category', ['categories' => $categories, 'products' => $productsPaginator]);
    }
}
