<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Konten extends Component
{
    public $kiriItems;
    public $tengahContent;
    public $kananItems;

    public function __construct($kiriItems, $tengahContent, $kananItems)
    {
        $this->kiriItems  = $kiriItems;
        $this->tengahContent = $tengahContent;
        $this->kananItems = $kananItems;
    }

    public function render(): View|Closure|string
    {
        return view('components.konten');
    }
}
