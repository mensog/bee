<?php

namespace App\Http\Controllers\Admin;

use App\Courier;
use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Контроллер вывода заказов в админке
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $orders = Order::with('items', 'items.product')->paginate(50);
        return view('pages.admin.orders', ['orders' => $orders]);
    }

    public function show($id)
    {
        $couriers = Courier::all();
        $order = Order::with('items', 'items.product')->where('id', $id)->firstOrFail();
        return view('pages.admin.order', ['order' => $order, 'couriers' => $couriers]);
    }
}
