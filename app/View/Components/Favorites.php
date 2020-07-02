<?php

namespace App\View\Components;

use Illuminate\View\Component;

class favorites extends Component
{
    /**
     * Array of products.
     *
     * @var array
     */
    public $products;

    /**
     * Create a new component instance.
     *
     * @param $products
     */
    public function __construct($products)
    {
        $this->products = $products;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.favorites');
    }
}
