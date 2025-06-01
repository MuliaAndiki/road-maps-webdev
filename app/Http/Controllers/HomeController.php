<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto;
use App\Models\Guide;
use App\Models\Video;


class HomeController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        $guides = Guide::all();
        $foto = Foto::all();
        
        return view('home', compact('videos', 'guides', 'foto'));
    }
}
    