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
      "title" => "Tips & Notes",
      "items" => [
        "Pelajari dulu konsep dasar seperti server, database, dan HTTP.",
        "Fokus pada satu bahasa backend dulu, misalnya PHP, Node.js, atau Python.",
        "Pahami cara kerja REST API karena itu inti komunikasi frontend-backend.",
        "Belajar SQL untuk operasi database dasar seperti SELECT dan JOIN.",
        "Gunakan Postman untuk testing endpoint secara efisien.",
        "Pahami struktur folder yang rapi agar project mudah dikembangkan.",
        "Gunakan version control (Git) bahkan di proyek backend kecil.",
        "Belajar autentikasi dasar (login, token, session).",
        "Latihan CRUD (Create, Read, Update, Delete) secara rutin.",
        "Backend harus aman—pelajari juga validasi dan proteksi data."
      ]
    ];

    $tengah = [
      "title" => "Backend",
      "items" => [
        "Backend development berfokus pada logika server, komunikasi data, dan pengelolaan database.",
        "Penguasaan tools seperti Postman, API, serta sistem database relasional dan non-relasional sangat penting."
      ],
      "cta" => [
        "label" => "Pelajari Backend Sekarang",
        "link" => "https://www.freecodecamp.org/learn/back-end/"
      ],
      "buttons" => [
        [
          "label" => "Node.js / PHP / Python",
          "link" => "https://nodejs.org/ | https://www.php.net/ | https://www.python.org/"
        ],
        [
          "label" => "Express / Laravel / Flask",
          "link" => "https://expressjs.com/ | https://laravel.com/ | https://flask.palletsprojects.com/"
        ],
        [
          "label" => "REST API",
          "link" => "https://restfulapi.net/"
        ],
        [
          "label" => "MySQL / PostgreSQL",
          "link" => "https://www.mysql.com/ | https://www.postgresql.org/"
        ],
        [
          "label" => "MongoDB",
          "link" => "https://www.mongodb.com/"
        ],
        [
          "label" => "Postman",
          "link" => "https://www.postman.com/"
        ],
        [
          "label" => "JSON",
          "link" => "https://www.json.org/"
        ],
        [
          "label" => "Authentication (JWT / Session)",
          "link" => "https://jwt.io/"
        ]
      ]
    ];

    $kanan = [
      "title" => "Tips Praktis",
      "items" => [
        "Pahami perbedaan request GET, POST, PUT, DELETE.",
        "Gunakan middleware untuk validasi dan keamanan.",
        "Selalu sanitasi input user untuk mencegah SQL Injection.",
        "Gunakan environment file untuk simpan credential API/db.",
        "Modularisasi kode agar mudah di-maintain.",
        "Belajar cara deploy backend ke layanan hosting atau cloud.",
        "Gunakan tool logging untuk pantau error aplikasi.",
        "Pahami async programming terutama saat akses database.",
        "Biasakan testing endpoint sebelum digunakan frontend.",
        "Bangun API dokumentasi sendiri untuk kolaborasi yang jelas."
      ]
    ];



    return view("backend", compact('judul', 'href', 'share', 'tengah', 'kiri', 'kanan'));
  }
}
