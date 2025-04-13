<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
  public function index()
  {
    $judul = [
      "judul" => "BackEnd",
      "deskripsi" => "Step by step guide to becoming a modern backend developer in 2025",
      "paragraf" => "BackEnd"
    ];

    $href = [
      ["downloads" => "#", "share" => "#"],
    ];

    $share = [
      ["share" => "#"]
    ];
    return view("backend", compact('judul', 'href', 'share'));
  }
}