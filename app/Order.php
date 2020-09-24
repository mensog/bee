<?php

namespace App;

use App\Notifications\OrderCanceledNotification;
use App\Notifications\OrderCompletedNotification;
use App\Notifications\OrderGivenToCourierNotification;
use App\Notifications\OrderPaidNotification;
use App\Notifications\OrderPendingNotification;
use App\Notifications\OrderReDeliveryNotification;
use App\Notifications\OrderRefundedNotification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Order extends Model
{
    use Notifiable;
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

    /**
     * Возвращает сумму заказа
     *
     * @return int
     */
    public function getSum()
    {
        $sum = 0;
        $items = $this->items;
        foreach ($items as $item) {
            $sum += $item->getSum();
        }
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
        $deliveryPrice = $this->delivery_amount;
        if($deliveryPrice) {
            $sum += $deliveryPrice;
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

    public function routeNotificationForMail()
    {
        return $this->email;
    }

    public function sendStatusNotification()
    {
        if ($this->status == OrderStatus::PAID) {
            $this->user->notify(new OrderPaidNotification($this));
        }
        if ($this->status == OrderStatus::CANCELED) {
            $this->user->notify(new OrderCanceledNotification($this));
        }
        if ($this->status == OrderStatus::COMPLETED) {
            $productsReturn = [];
            foreach ($this->items as $item) {
                if ($this->status == OrderItemStatus::REFUNDED) {
                    array_push($productsReturn, $item);
                }
            }
            if ($productsReturn != []) {
                $this->user->notify(new OrderRefundedNotification($this, $productsReturn));
            }
            $this->user->notify(new OrderCompletedNotification($this));
        }
        if ($this->status == OrderStatus::READY_FOR_DELIVERY) {
            $this->user->notify(new OrderPendingNotification($this));
        }
        if ($this->status == OrderStatus::GIVEN_TO_COURIER) {
            $this->user->notify(new OrderGivenToCourierNotification($this));
        }
        if ($this->status == OrderStatus::RE_DELIVERY) {
            $this->user->notify(new OrderReDeliveryNotification($this));
        }
    }

    public function takeNumber($number)
    {
        $phone = str_replace(['+', '(', ')', '-', ' '], '', $number);
        return  preg_replace('/^./', 7, $phone);

    }
}
