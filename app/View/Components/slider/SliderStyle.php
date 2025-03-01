<?php

namespace App\View\Components\slider;

use Closure;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SliderStyle extends Component
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
        return view('components.slider.slider-style');
    }
}
