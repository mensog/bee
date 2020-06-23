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
     * Create a new cart component instance.
     *
     * @param $products
     * @param $quantity
     */
    public function __construct($products, $quantity)
    {
        $this->products = $products;
        $this->quantity = $quantity;
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
