<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Konten extends Component
{
    public $kiri;
    public $tengah;
    public $kanan;

    public function __construct($kiri, $tengah, $kanan)
    {
        $this->kiri = $kiri;
        $this->tengah = $tengah;
        $this->kanan = $kanan;
    }

    public function render(): View|Closure|string
    {
        return view('components.konten');
    }
}
