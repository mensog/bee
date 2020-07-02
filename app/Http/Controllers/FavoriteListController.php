<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteListController extends Controller
{
    /**
     * Обработка апи-запросов к избранному
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     * @throws \Throwable
     */
    public function api(Request $request)
    {
        $possibleActions = ['add', 'remove'];
        $action = $request->input('action');
        $response = response()->json([], 404);
        if (in_array($action, $possibleActions)) {
            $productId = (int)$request->input('productId');
            $favoriteList = app('FavoriteList');

            if ($action === 'add') {
                $favoriteList->addProduct($productId);
            } else if ($action === 'remove') {
                $favoriteList->removeProduct($productId);
            }

            $response = [
                'count' => $favoriteList->countTotalQuantity(),
            ];
            if ($request->input('fromPage') === 'favorites') {
                $products = $favoriteList->getProducts();
                $cart = app('Cart');
                $inCartProductIds = $cart->getProductIds();
                $response['html'] = view('components.favorites', ['products' => $products, 'inCartProductIds' => $inCartProductIds])->render();
            }
            return response()->json($response);
        }
        return $response;
    }

    public function show(Request $request)
    {
        $favoritesList = app('FavoriteList');
        $products = $favoritesList->getProducts();
        $cart = app('Cart');
        $inCartProductIds = $cart->getProductIds();
        return view('pages.favorites', ['products' => $products, 'inCartProductIds' => $inCartProductIds]);
    }
}
