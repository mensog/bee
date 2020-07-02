<?php

namespace App\Http\Controllers\Lk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.lk.index');
    }

    public function orders(Request $request)
    {
        $orders = Auth::user()->orders()->with('items', 'items.product')->paginate(10);
        return view('pages.lk.orders', ['orders' => $orders]);
    }
}
