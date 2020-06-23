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
     * @throws \Throwable
     */
    public function addProduct(Request $request)
    {
        $productId = (int)$request->input('productId');
        $quantity = (int)$request->input('quantity');
        $cart = app('Cart');
        $cart->addProduct($productId, $quantity);
        $cartContent = $cart->content;
        $response = [
            'count' => $cart->countTotalQuantity(),
        ];
        if ($request->input('fromPage') === 'cart') {
            $productIds = array_keys($cartContent);
            $products = Product::find($productIds);
            $response['html'] = view('pages.cart', ['products' => $products, 'quantity' => $cartContent])->render();
        }
        return response()->json($response);
    }

    /**
     * Вывод корзины товаров
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function show(Request $request)
    {
        $cart = app('Cart');
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
     * @throws \Throwable
     */
    public function removeProduct(Request $request)
    {
        $productId = (int)$request->input('productId');
        $cart = app('Cart');
        $cart->removeProduct($productId);
        $cartContent = $cart->content;
        $response = [
            'count' => $cart->countTotalQuantity(),
        ];
        if ($request->input('fromPage') === 'cart') {
            $productIds = array_keys($cartContent);
            $products = Product::find($productIds);
            $response['html'] = view('components.cart', ['products' => $products, 'quantity' => $cartContent])->render();
        }
        return response()->json($response);
    }

    /**
     * Изменение количество товара в корзине
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Throwable
     */
    public function updateProductQuantity(Request $request)
    {
        $productId = (int)$request->input('productId');
        $quantity = (int)$request->input('quantity');
        $cart = app('Cart');
        $cart->updateProductQuantity($productId, $quantity);
        $cartContent = $cart->content;
        $response = [
            'count' => $cart->countTotalQuantity(),
        ];
        if ($request->input('fromPage') === 'cart') {
            $productIds = array_keys($cartContent);
            $products = Product::find($productIds);
            $response['html'] = view('components.cart', ['products' => $products, 'quantity' => $cartContent])->render();
        }
        return response()->json($response);

    }

    /**
     * Обработка апи-запросов к корзине
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     * @throws \Throwable
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
