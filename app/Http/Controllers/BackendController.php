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
        ["downloads" => "https://cs.gmu.edu/~tlatoza/teaching/swe432f16/Lecture%2013%20-%20Backend%20Development.pdf"],
    ];

    $share = [
      ["share" => "#"]
    ];

    $kiri = [
        "text" => "Tips & Notes",
        "text1" => "Pelajari dulu konsep dasar seperti server, database, dan HTTP.",
        "text2" => "Fokus pada satu bahasa backend dulu, misalnya PHP, Node.js, atau Python.",
        "text3" => "Pahami cara kerja REST API karena itu inti komunikasi frontend-backend.",
        "text4" => "Belajar SQL untuk operasi database dasar seperti SELECT dan JOIN.",
        "text5" => "Gunakan Postman untuk testing endpoint secara efisien.",
        "text6" => "Pahami struktur folder yang rapi agar project mudah dikembangkan.",
        "text7" => "Gunakan version control (Git) bahkan di proyek backend kecil.",
        "text8" => "Belajar autentikasi dasar (login, token, session).",
        "text9" => "Latihan CRUD (Create, Read, Update, Delete) secara rutin.",
        "text10" => "Backend harus aman—pelajari juga validasi dan proteksi data.",

    ];


    $tengah = [
        "titleK" => "Backend",
        "button" => "Server Tools",
        "button1" => "Node.js / PHP / Python",
        "button2" => "Express / Laravel / Flask",
        "button3" => "REST API",
        "button4" => "MySQL / PostgreSQL",
        "button5" => "MongoDB",
        "button6" => "Postman",
        "button7" => "JSON",
        "button8" => "Authentication (JWT / Session)",
        "texttengah" => "Backend development berfokus pada logika server, komunikasi data, dan pengelolaan database.",
        "texttengah1" => "Penguasaan tools seperti Postman, API, serta sistem database relasional dan non-relasional sangat penting.",
        "button9" => "Pelajari Backend Sekarang"
    ];

    $kanan = [
        "textkanan" => "Tips Praktis",
        "textkanan1" => "Pahami perbedaan request GET, POST, PUT, DELETE.",
        "textkanan2" => "Gunakan middleware untuk validasi dan keamanan.",
        "textkanan3" => "Selalu sanitasi input user untuk mencegah SQL Injection.",
        "textkanan4" => "Gunakan environment file untuk simpan credential API/db.",
        "textkanan5" => "Modularisasi kode agar mudah di-maintain.",
        "textkanan6" => "Belajar cara deploy backend ke layanan hosting atau cloud.",
        "textkanan7" => "Gunakan tool logging untuk pantau error aplikasi.",
        "textkanan8" => "Pahami async programming terutama saat akses database.",
        "textkanan9" => "Biasakan testing endpoint sebelum digunakan frontend.",
        "textkanan10" => "Bangun API dokumentasi sendiri untuk kolaborasi yang jelas.",

    ];


    return view("backend", compact('judul', 'href', 'share', 'tengah', 'kiri', 'kanan'));
  }
}
