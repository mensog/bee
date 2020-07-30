<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $products = Product::all();
        return view('pages.admin.main', ['products' => $products]);

    }
}
