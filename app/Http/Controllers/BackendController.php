<?php

namespace App\Http\Controllers;

use App\Models\BackendButton;
use App\Models\BackendContent;
use App\Models\HrefBackend;
use App\Models\JudulBackend;
use App\Models\ShareBackend;
use App\Models\TipsNoteBackend;
use App\Models\TipsPraktisBackend;
use Illuminate\Http\Request;
use App\Models\KeteranganBackend;

class BackendController extends Controller
{
    public function index()
    {
        $judul = JudulBackend::first();
        $href = HrefBackend::first();
        $share = ShareBackend::first();
        $keterangan = KeteranganBackend::select('keterangan')->get();


        $kiriItems = TipsNoteBackend::pluck('item')->toArray();
        $kiriItemsFormatted = [
            'title' => 'Tips & Notes',
            'items' => $kiriItems,
        ];

        $kananItems = TipsPraktisBackend::pluck('item')->toArray();
        $kananItemsFormatted = [
            'title' => 'Tips Praktis',
            'items' => $kananItems,
        ];

        $tengahContent = BackendContent::with('buttons')->first();

        return view("backend", compact('judul', 'href', 'share', 'kiriItemsFormatted', 'tengahContent', 'kananItemsFormatted', 'keterangan'));
    }
}