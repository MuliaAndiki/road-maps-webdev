<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Konten extends Component
{

    public $titleK;
    public $button;
    public $button1;
    public $button2;
    public $button3;
    public $button4;
    public $button5;
    public $button6;
    public $button7;
    public $button8;
    public $texttengah;
    public $texttengah1;
    public $button9;
    public $text;
    public $text1;
    public $text2;
    public $text3;
    public $text4;
    public $text5;
    public $text6;
    public $text7;
    public $text8;
    public $text9;
    public $text10;

    public $textkanan;
    public $textkanan1;
    public $textkanan2;
    public $textkanan3;
    public $textkanan4;
    public $textkanan5;
    public $textkanan6;
    public $textkanan7;
    public $textkanan8;
    public $textkanan9;
    public $textkanan10;



    public function __construct( $titleK, $button, $button1, $button2, $button3, $button4, $button5, $button6, $button7, $button8, $texttengah, $texttengah1, $button9, $text, $text1, $text2, $text3, $text4, $text5, $text6, $text7, $text8, $text9, $text10, $textkanan, $textkanan1, $textkanan2, $textkanan3, $textkanan4, $textkanan5, $textkanan6, $textkanan7, $textkanan8, $textkanan9, $textkanan10 )
    {
        $this -> titleK = $titleK;
        $this -> button = $button;
        $this -> button1 = $button1;
        $this -> button2 = $button2;
        $this -> button3 = $button3;
        $this -> button4 = $button4;
        $this -> button5 = $button5;
        $this -> button6 = $button6;
        $this -> button7 = $button7;
        $this -> button8 = $button8;
        $this -> texttengah = $texttengah;
        $this -> texttengah1 = $texttengah1;
        $this -> button9 = $button9;
        $this -> text = $text;
        $this -> text1 = $text1;
        $this -> text2 = $text2;
        $this -> text3 = $text3;
        $this -> text4 = $text4;
        $this -> text5 = $text5;
        $this -> text6 = $text6;
        $this -> text7 = $text7;
        $this -> text8 = $text8;
        $this -> text9 = $text9;
        $this -> text10 = $text10;

        $this -> textkanan = $textkanan;
        $this -> textkanan1 = $textkanan1;
        $this -> textkanan2 = $textkanan2;
        $this -> textkanan3 = $textkanan3;
        $this -> textkanan4 = $textkanan4;
        $this -> textkanan5 = $textkanan5;
        $this -> textkanan6 = $textkanan6;
        $this -> textkanan7 = $textkanan7;
        $this -> textkanan8 = $textkanan8;
        $this -> textkanan9 = $textkanan9;
        $this -> textkanan10 = $textkanan10;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.konten');
    }
}
