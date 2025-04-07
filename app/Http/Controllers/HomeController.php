<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $videos = [
            ["title" => "Video 1", "description" => "Deskripsi video 1", "link" => "#"],
            ["title" => "Video 2", "description" => "Deskripsi video 2", "link" => "#"],
        ];

        $guides = [
            ["title" => "Guide 1", "description" => "Deskripsi guide 1", "link" => "#"],
            ["title" => "Guide 2", "description" => "Deskripsi guide 2", "link" => "#"],
        ];

        $foto = [
            ["foto" => asset('asset/2.jpg')],

        ];

        return view('home', compact('videos', 'guides', 'foto'));
    }
}
