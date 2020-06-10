<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Добавление товара в корзину
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function addProduct(Request $request)
    {
        $productId = (int)$request->input('product-id');
        $quantity = (int)$request->input('product-id');
        $cart = new Cart($request->session());
        if ($cart->addProduct($productId, $quantity)) {
            return redirect()->route('product', $cart->redirectTo);
        }
        return redirect()->route('/');
    }
}
