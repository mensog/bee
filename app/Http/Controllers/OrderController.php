<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Контроллер создания заказа
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Request $request)
    {
        $cart = new Cart($request->session());
        $order = new Order();
        $order->email = $request->input('email');
        $order->save();
        $order->fillFromCart($cart);
        $cart->clear();
        return redirect()->route('home');
    }

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
}
