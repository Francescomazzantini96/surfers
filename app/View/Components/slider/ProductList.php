<?php

namespace App\View\Components\slider;

use Closure;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductList extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $products = Product::paginate(30);
        return view('components.slider.product-list',compact('products'));
    }
}
