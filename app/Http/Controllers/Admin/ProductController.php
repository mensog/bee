<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::limit(5000)->get(); // TODO ЛИМИТ ВРЕМЕННО, ПОКА НЕ СДЕЛАЕМ AJAX
        return view('pages.admin.products', ['products' => $products]);
    }


    /**
     * Handle the incoming request.
     *
     * @param $name
     * @return Application|Factory|View
     */
    public function show($name)
    {
        $product = Product::with('category')->with('productAttributeValues')->with('productAttributeValues.productAttribute')->where('friendly_url_name', $name)->firstOrFail();
        $attributes = [];
        foreach ($product->productAttributeValues as $attributeValue) {
            $attributes[] = [
                'name' => $attributeValue->productAttribute->name,
                'value' => $attributeValue->value,
            ];
        }
        $storeName = $product->getStoreName();
        $storeLink = $product->getStoreProductLink();

        return view('pages.admin.product', ['product' => $product, 'attributes' => $attributes, 'storeName' => $storeName, 'storeLink' => $storeLink]);
    }

    /**
     * Change product data
     *
     * @param Request $request
     * @param $name
     * @return RedirectResponse
     */
    public function changeProduct(Request $request, $name)
    {
        $product = Product::with('category')->with('productAttributeValues')->with('productAttributeValues.productAttribute')->where('friendly_url_name', $name)->firstOrFail();
        $attributes = [];

        $product->name = (string)($request)->input('name');
        $product->description = (string)($request)->input('description');
        $product->price = (float)($request)->input('price') * 100;
        $product->save();

        return redirect()->route('admin_product', $name);
    }
}
