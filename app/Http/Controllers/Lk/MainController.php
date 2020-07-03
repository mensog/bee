<?php

namespace App\Http\Controllers\Lk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index(Request $request)
    {
        return view('lk.dashboard');
    }

    public function orders(Request $request)
    {
        $orders = Auth::user()->orders()->with('items', 'items.product')->orderBy('created_at', 'desc')->paginate(10);
        if ($request->session()->has('createdOrderId')) {
            $createdOrderId = session('createdOrderId');
        } else {
            $createdOrderId = false;
        }
        return view('lk.orders', ['orders' => $orders, 'createdOrderId' => $createdOrderId]);
    }
}
