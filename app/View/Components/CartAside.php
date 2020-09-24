<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class CartAside extends Component
{
    /**
     * Cart total value.
     *
     * @var array
     */
    public $cartTotal;

    /**
     * Array of quantity.
     *
     * @var array
     */
    public $quantity;

    /**
     * Delivery id.
     *
     * @var int
     */
    public $delivery;

    public $hasNoOrders;

    /**
     * Create a new component instance.
     *
     * @param $cartTotal
     * @param $quantity
     * @param $deliveryId
     */
    public function __construct($cartTotal, $quantity, $delivery = false, $hasNoOrders = false)
    {
        $this->cartTotal = $cartTotal;
        $this->quantity = $quantity;
        $this->delivery = $delivery;
        $this->hasNoOrders = $hasNoOrders;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.cart-aside');
    }
}
