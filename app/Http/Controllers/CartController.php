<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
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
        $quantity = (int)$request->input('quantity');
        $cart = new Cart($request->session());
        if ($cart->addProduct($productId, $quantity)) {
            return redirect()->route('product', $cart->redirectTo);
        }
        return redirect()->route('/');
    }

    /**
     * Вывод корзины товаров
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function show(Request $request)
    {
        $cart = new Cart($request->session());
        $cartContent = $cart->getContent();
        $productIds = array_keys($cartContent);
        $products = Product::find($productIds);
        return view('pages.cart', ['products' => $products, 'quantity' => $cartContent]);
    }

    /**
     * Удаление товара из корзины
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function removeProduct(Request $request)
    {
        $productId = (int)$request->input('product-id');
        $cart = new Cart($request->session());
        $cart->removeProduct($productId);
        return redirect()->route('cart');
    }
}
