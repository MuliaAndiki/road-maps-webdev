<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FullstackController extends Controller
{
  public function index()
  {
    $judul = [
      "judul" => "FullStack",
      "deskripsi" => "Step by step guide to becoming a modern fullstack developer in 2025",
      "paragraf" => "fullstack"

    ];

    $href = [
      ["downloads" => "#"],
    ];

    $share = [
      ["share" => "#"]
    ];
    return view("FullStack", compact('judul', 'href', 'share'));
  }
}