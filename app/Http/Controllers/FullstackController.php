<?php

namespace App\Http\Controllers;

use App\Models\FullstackContent;
use App\Models\HrefFullstack;
use App\Models\JudulFullstack;
use App\Models\ShareFullstack;
use App\Models\TipsNoteFullstack;
use App\Models\TipsPraktisFullstack;
use Illuminate\Http\Request;

class FullstackController extends Controller
{
    public function index()
    {
        $judul = JudulFullstack::first();
        $href = HrefFullstack::first();
        $share = ShareFullstack::first();

        
        $kiriNotes = TipsNoteFullstack::pluck('item')->toArray();
        $kiriItemsFormatted = [
            'title' => 'Tips & Notes', 
            'items' => $kiriNotes,
        ];

        
        $kananPraktis = TipsPraktisFullstack::pluck('item')->toArray();
        $kananItemsFormatted = [
            'title' => 'Tips Praktis', 
            'items' => $kananPraktis,
        ];

        $tengahContent = FullstackContent::with('buttons')->first();

       return view("fullstack", compact('judul', 'href', 'share', 'kiriItemsFormatted', 'tengahContent', 'kananItemsFormatted'));
    }
}