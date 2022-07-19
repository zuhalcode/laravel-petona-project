<?php

namespace App\View\Components\Products;

use Illuminate\View\Component;

class ListProduct extends Component
{
    public $listProducts;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $products)
    {
        $this->listProducts = $products;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.products.list-product');
    }
}
