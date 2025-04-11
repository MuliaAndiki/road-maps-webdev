<?php

namespace App\View\Components;

use Illuminate\View\Component;

class VideoHomeCard extends Component
{
    public $title;
    public $link;
    public $description;

    public function __construct($link, $title, $description)
    {
        $this->link = $link;
        $this->title = $title;
        $this->description = $description;
    }

    public function render()
    {
        return view('components.video-card');
    }
}
