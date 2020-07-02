<?php

namespace App\Http\Controllers\Lk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.lk.index');
    }

    public function orders(Request $request)
    {
        return view('pages.lk.orders');
    }
}
