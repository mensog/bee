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
     * @return \Illuminate\Http\JsonResponse
     */
    public function addProduct(Request $request)
    {
        $productId = (int)$request->input('productId');
        $quantity = (int)$request->input('quantity');
        $cart = Cart::current();
        $cart->addProduct($productId, $quantity);
        $response = [
            'count' => count($cart->content),
        ];
        return response()->json($response, 201);
    }

    /**
     * Вывод корзины товаров
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function show(Request $request)
    {
        $cart = Cart::current();
        $cartContent = $cart->content;
        $productIds = array_keys($cartContent);
        $products = Product::find($productIds);
        return view('pages.cart', ['products' => $products, 'quantity' => $cartContent]);
    }

    /**
     * Удаление товара из корзины
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function removeProduct(Request $request)
    {
        $productId = (int)$request->input('productId');
        $cart = Cart::current();
        $cart->removeProduct($productId);
        $response = [
            'count' => count($cart->content),
        ];
        return response()->json($response);
    }

    /**
     * Изменение количество товара в корзине
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateProductQuantity(Request $request)
    {
        $productId = (int)$request->input('productId');
        $quantity = (int)$request->input('quantity');
        $cart = Cart::current();
        $cart->updateProductQuantity($productId, $quantity);
        $response = [
            'count' => count($cart->content),
        ];
        return response()->json($response);

    }

    /**
     * Обработка апи-запросов к корзине
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function api(Request $request)
    {
        $possibleActions = ['add', 'remove', 'updateQuantity'];
        $action = $request->input('action');
        $response = response()->json([], 404);
        if (in_array($action, $possibleActions)) {
            if ($action === 'add') {
                $response = $this->addProduct($request);
            }
            if ($action === 'remove') {
                $response = $this->removeProduct($request);
            }
            if ($action === 'updateQuantity') {
                $response = $this->updateProductQuantity($request);
            }
        }
        return $response;
    }
}
