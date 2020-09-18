<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Delivery;
use App\Order;
use App\OrderStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    protected function orderCreateValidator(array $data)
    {
        $messages = [
            'required' => 'Поле :attribute обязательно для заполнения.',
            'phone.min' => 'Телефон должен состоять из 11 символов (7 XXX XXX XX XX)',
            'phone.max' => 'Телефон должен состоять из 11 символов (7 XXX XXX XX XX)',
            'max' => 'Поле :attribute должно содержать не более :max символов',
        ];

        $names = [
            'fullName' => 'имя и фамилия',
            'email' => 'e-mail',
            'phone' => 'телефон',
            'address' => 'адрес',
        ];

        return Validator::make($data, [
            'fullName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'min:11', 'max:11'],
            'address' => ['required', 'string', 'max:255'],
        ], $messages, $names);
    }

    /**
     * Контроллер создания заказа
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Request $request)
    {
        $cart = Cart::current();
        if (count($cart->content) == 0) {
            return redirect()->route('cart');
        }
        $this->orderCreateValidator($request->all())->validate();
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->full_name = $request->input('fullName');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->address = $request->input('address');
        $order->status = OrderStatus::PAID;
        $order->delivery_id = $request->input('delivery');
        $order->delivery_amount = Delivery::find($request->input('delivery'))->price;
        $order->amount_paid = $order->getSum();
        $order->save();
        $order->fillFromCart($cart);
        $order = Order::where('id', $order->id)->with('items')->first();
        $order->fillOrderStores();
        $request->session()->flash('createdOrderId', $order->id);
        $cart->clear();
        return redirect()->route('lk_orders');
    }
}
