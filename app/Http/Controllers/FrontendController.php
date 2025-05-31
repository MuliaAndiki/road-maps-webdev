<?php

namespace App\Http\Controllers;

use App\Models\FrontendContent;
use Illuminate\Http\Request;
use App\Models\HrefFrontend;
use App\Models\JudulFrontend;
use App\Models\ShareFrontend;
use App\Models\TipsNoteFrontend;
use App\Models\TipsPraktisFrontend;

class FrontendController extends Controller
{
   public function index()
    {
        $judul = JudulFrontend::first();
        $href = HrefFrontend::first();
        $share = ShareFrontend::first();

        
        $kiriNotes = TipsNoteFrontend::pluck('item')->toArray();
        $kiriItemsFormatted = [
            'title' => 'Tips & Notes', 
            'items' => $kiriNotes,
        ];

        
        $kananPraktis = TipsPraktisFrontend::pluck('item')->toArray();
        $kananItemsFormatted = [
            'title' => 'Tips Praktis', 
            'items' => $kananPraktis,
        ];

        $tengahContent = FrontendContent::with('buttons')->first();

       return view("frontend", compact('judul', 'href', 'share', 'kiriItemsFormatted', 'tengahContent', 'kananItemsFormatted'));
    }
}
