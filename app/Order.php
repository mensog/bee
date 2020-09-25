<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * Возвращает все товарные позиции из текущего заказа
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function items()
    {
        return $this->hasMany('App\OrderItem');
    }

    /**
     * Создает позиции заказа на основе содержимого переданной корзины
     *
     * @param Cart $cart
     */
    public function fillFromCart(Cart $cart)
    {
        $cartContent = $cart->content;
        $productIds = array_keys($cartContent);
        Product::find($productIds)->pluck('price', 'id')->each(function ($price, $productId) use ($cartContent) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $this->id;
            $orderItem->product_id = $productId;
            $orderItem->price = $price;
            $orderItem->quantity = $cartContent[$productId];
            $orderItem->stock_quantity = $cartContent[$productId];
            $orderItem->save();
        });
    }

    public function getItemsSum()
    {
        $sum = 0;
        $items = $this->items;
        foreach ($items as $item) {
            $sum += $item->getSum();
        }
        return $sum;
    }

    /**
     * Возвращает сумму заказа
     *
     * @return int
     */
    public function getSum()
    {
        $sum = $this->getItemsSum();
        $deliveryPrice = $this->delivery_amount;
        if($deliveryPrice) {
            $sum += $deliveryPrice;
        }
        return $sum;
    }

    public function getFinalSum() {
        $sum = 0;
        $items = $this->items;
        foreach ($items as $item) {
            $sum += $item->getInStockSum();
        }
        if ($this->delivery_amount) {
            $sum += $this->delivery_amount;
        }
        if ($this->promocode_discount) {
            $sum -= $this->promocode_discount;
        }
        if ($this->bonus_discount) {
            $sum -= $this->bonus_discount;
        }
        return $sum;
    }

    public function courier()
    {
        return $this->belongsTo('App\Courier');
    }

    public function orderStores()
    {
        return $this->hasMany('App\OrderStore');
    }

    public function fillOrderStores()
    {
        $stores = [];
        foreach ($this->items as $item) {
            $storeId = $item->product->store_id;
            if (!in_array($storeId, $stores)) {
                $stores[] = $item->product->store_id;
                $orderStore = new OrderStore();
                $orderStore->order_id = $this->id;
                $orderStore->store_id = $storeId;
                $orderStore->status = OrderStoreStatus::PAID;
                $orderStore->save();
            }
        }
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function delivery()
    {
        return $this->belongsTo('App\Delivery');
    }
}
