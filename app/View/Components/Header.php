<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    public string $backgroundImage;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $images = [
            'fondo.png',
            'fondo1.png',
            'fondo2.png',
            'fondo3.png',
            'imagen.png',
        ];

        $this->backgroundImage = asset('img/' . $images[array_rand($images)]);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header');
    }
}
