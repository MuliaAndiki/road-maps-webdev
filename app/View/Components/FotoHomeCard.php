<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FotoHomeCard extends Component
{
    public $foto;
    public function __construct($foto)
    {
        $this->foto = $foto;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.foto-card');
    }
}
