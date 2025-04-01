<?php

namespace App\View\Components;

use Illuminate\View\Component;

class VideoCard extends Component
{
    public $title;
    public $description;

    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = $description;
    }

    public function render()
    {
        return view('components.video-card');
    }
}
