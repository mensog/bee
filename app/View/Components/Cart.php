<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Cart extends Component
{
    /**
     * Array of products.
     *
     * @var array
     */
    public $products;
    /**
     * Array of quantity.
     *
     * @var array
     */
    public $quantity;
    /**
     * Array of subtotals.
     *
     * @var array
     */
    public $itemsSubTotal;

    /**
     * Array of subtotals.
     *
     * @var int
     */
    public $cartTotal;

    /**
     * Create a new cart component instance.
     *
     * @param $products
     * @param $quantity
     * @param $itemsSubTotal
     * @param $cartTotal
     */
    public function __construct($products, $quantity, $itemsSubTotal, $cartTotal)
    {
        $this->products = $products;
        $this->quantity = $quantity;
        $this->itemsSubTotal = $itemsSubTotal;
        $this->cartTotal = $cartTotal;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.cart');
    }
}
