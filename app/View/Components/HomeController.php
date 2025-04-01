<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\GuidesController;
use App\Http\Controllers\VideosController;

class HomeController extends Controller
{
    public function index()
    {
        $guides = (new GuidesController)->getData();
        $videos = (new VideosController)->getData();

        return view('home', [
            'guides' => $guides,
            'videos' => $videos
        ]);
    }
}
