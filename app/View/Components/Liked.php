<?php

namespace App\View\Components;

use App\Product;
use Illuminate\View\Component;


class Liked extends Component
{
    public $likedRandomProducts;

    /**
     * Create a new component instance.
     *
     * @param $likedRandomProducts
     */
    public function __construct($likedRandomProducts)
    {
       $this->likedRandomProducts = $likedRandomProducts;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.liked');
    }
}
