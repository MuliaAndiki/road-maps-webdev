<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class title extends Component
{

    public $judul;
    public $deskripsi;
    public $paragraf;
    public $href;
    public function __construct($judul, $deskripsi, $paragraf, $href)
    {
        $this->judul = $judul;
        $this->deskripsi = $deskripsi;
        $this->paragraf = $paragraf;
        $this->href = $href;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.title');
    }
}
