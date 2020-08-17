<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CategorySidebar extends Component
{
    protected $categories;
    protected $store;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($categories, $store)
    {
        $this->categories = $categories;
        $this->store = $this->store;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.category-sidebar', ['categories' => $this->categories, 'store' => $this->store]);
    }
}
