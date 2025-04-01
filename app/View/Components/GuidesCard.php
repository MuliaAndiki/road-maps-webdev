<?php
namespace App\View\Components;

use Illuminate\View\Component;

class GuidesCard extends Component
{
    public $title;
    public $link;
    public $description;

    public function __construct($link ,$title, $description)
    {
        $this->title = $title;
        $this->description = $description;
        $this->link = $link;
    }

    public function render()
    {
        return view('components.guides-card');
    }
}
