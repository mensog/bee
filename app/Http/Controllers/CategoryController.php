<?php

namespace App\Http\Controllers;

use App\Category;

class CategoryController extends Controller
{
    /**
     * Вывод списка категорий, разделенный на страницы
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoriesPaginator = Category::paginate(15);
        return view('pages.catalog', ['categories' => $categoriesPaginator]);
    }

    public function show($name)
    {
        $ProductsPaginator = Category::where('friendly_url_name', $name)->firstOrFail()->products()->paginate(15);
        return view('pages.category', ['products' => $ProductsPaginator]);
    }
}
