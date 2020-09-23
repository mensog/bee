<?php

namespace App;

use App\Notifications\OrderCanceledNotification;
use App\Notifications\OrderCompletedNotification;
use App\Notifications\OrderGivenToCourierNotification;
use App\Notifications\OrderPaidNotification;
use App\Notifications\OrderPendingNotification;
use App\Notifications\OrderReDeliveryNotification;
use App\Notifications\OrderRefundedNotification;
use App\Notifications\ResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'email', 'password', 'role', 'full_name', 'phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sendPasswordResetNotification($token)
    {
        // Добавляем свой класс.
        $this->notify(new ResetPassword($token));
    }

    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    public function privateAccount()
    {
        return $this->hasOne('App\PrivateAccount');
    }

    public function hasRole($role)
    {
        $role = (array) $role;
        return in_array($this->role, $role);
    }

    public function products()
    {
        return $this->hasMany('App\Product', 'store_id', 'partner_id');
    }

    public function lastOrder()
    {
        return $this->orders()->orderBy('id', 'desc')->first();
    }

    public function getAddress()
    {
        $lastOrder = $this->lastOrder();
        if ($lastOrder) {
            return $lastOrder->address;
        }
        return '';
    }

    public function getPhone()
    {
        $lastOrder = $this->lastOrder();
        if ($lastOrder) {
            return $lastOrder->phone;
        }
        return '';
    }

    public function sendStatusNotification(Order $order)
    {
        if ($order->status == OrderStatus::PAID) {
            $this->notify(new OrderPaidNotification($order));
        }
        if ($order->status == OrderStatus::CANCELED) {
            $this->notify(new OrderCanceledNotification($order));
        }
        if ($order->status == OrderStatus::COMPLETED) {
            $productsReturn = [];
            foreach ($order->items as $item) {
                if ($order->status == OrderStatus::REFUNDED) {
                    array_push($productsReturn, $item);
                }
            }
            if ($productsReturn != []) {
                $this->notify(new OrderRefundedNotification($order, $productsReturn));
            }
            $this->notify(new OrderCompletedNotification($order));
        }
        if ($order->status == OrderStatus::PENDING) {
            $this->notify(new OrderPendingNotification($order));
        }
        if ($order->status == OrderStatus::GIVEN_TO_COURIER) {
            $this->notify(new OrderGivenToCourierNotification($order));
        }
        if ($order->status == OrderStatus::RE_DELIVERY) {
            $this->notify(new OrderReDeliveryNotification($order));
        }
    }
}
