<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
  public function index()
  {
    $judul = [
      "judul" => "FrontEnd",
      "deskripsi" => "Step by step guide to becoming a modern frontend developer in 2025",
      "paragraf" => "FrontEnd"
    ];

    $href = [
      ["downloads" => "#"],

    ];
    return view("frontend", compact('judul', 'href'));
  }
}