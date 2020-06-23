<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

    /**
     * @return Cart
     */
    public static function current()
    {
        $request = app('request');
        $cartId = $request->cookie('cartId');
        $cart = static::where('id', $cartId)->firstOr(function () {
            $cart = new Cart();
            $cart->content = [];
            $cart->save();
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
}
