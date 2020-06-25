<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;

class Cart extends Model
{

    protected $products;

    /**
     * @return Cart
     */
    public static function current()
    {
        try {
            $cartId = Crypt::decrypt(Cookie::get('cartId'), false);
        } catch (\Exception $exception) {
            $cartId = null;
        }
        $cart = static::where('id', $cartId)->firstOr(function () {
            $cart = new Cart();
            $cart->content = [];
            $cart->save();
            Cookie::queue('cartId', $cart->id, 30 * 24 * 3600);
            return $cart;
        });
        return $cart;
    }

    public function getContentAttribute($value)
    {
        return json_decode($value, true);
    }

    public function setContentAttribute($value)
    {
        $this->attributes['content'] = json_encode($value);
    }

    /**
     * Добавляет товар в корзину
     * @param $productId int ID товара
     * @param $quantity int Количество
     * или пытаемся добавить 0 или отрицательное количество товаров
     */
    public function addProduct(int $productId, int $quantity)
    {
        $content = $this->content;
        if (isset($content[$productId])) {
            $this->updateProductQuantity($productId, $quantity);
        } else {
            $content[$productId] = $quantity;
        }
        $this->content = $content;
        $this->save();
        $this->initProducts();
    }

    /**
     * Удаляет товар из корзины
     *
     * @param int $productId ID товара
     */
    public function removeProduct(int $productId)
    {
        $content = $this->content;
        if (isset($content[$productId])) {
            unset($content[$productId]);
        }
        $this->content = $content;
        $this->save();
        $this->initProducts();
    }

    /**
     * Очищает корзину
     */
    public function clear()
    {
        $this->content = [];
        $this->save();
    }

    public function updateProductQuantity(int $productId, int $quantity)
    {
        if (isset($this->content[$productId])) {
            $content = $this->content;
            $content[$productId] = $quantity;
            $this->content = $content;
            $this->save();
            $this->initProducts();
        } else {
            $this->addProduct($productId, $quantity);
        }
    }

    public function countTotalQuantity()
    {
        $count = 0;
        foreach ($this->content as $productId => $quantity) {
            $count += $quantity;
        }
        return $count;
    }

    public function getTotal()
    {
        if (is_null($this->products)) {
            $this->initProducts();
        }
        $total = 0;
        $cartContent = $this->content;
        foreach ($this->products as $product) {
            $total += $cartContent[$product->id] * $product->price;
        }
        return $total;
    }

    protected function initProducts()
    {
        $cartContent = $this->content;
        $productIds = array_keys($cartContent);
        $this->products = Product::find($productIds);
    }

    public function getProducts()
    {
        if (is_null($this->products)) {
            $this->initProducts();
        }
        return $this->products;
    }

    public function getItemsSubTotal()
    {
        if (is_null($this->products)) {
            $this->initProducts();
        }
        $itemsSubTotal = [];
        $cartContent = $this->content;
        foreach ($this->products as $product) {
            $itemsSubTotal[$product->id] = $cartContent[$product->id] * $product->price;
        }
        return $itemsSubTotal;
    }
}
