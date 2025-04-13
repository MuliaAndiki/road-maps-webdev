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
      ["downloads" => "https://www.simplestepscode.com/pdf/simple_steps_roadmap.pdf"],
    ];


    $share = [
      ["share" => "/login"]
    ];

    $kiri = [
      "title" => "Tips & Notes",
      "items" => [
        "Fokus dulu kuasai HTML dan CSS sebelum masuk ke JavaScript.",
        "Gunakan browser DevTools untuk latihan analisa struktur halaman.",
        "Biasakan versi kontrol sejak awal dengan Git & GitHub.",
        "Install ekstensi bermanfaat di VS Code seperti Live Server dan Prettier.",
        "Baca dokumentasi resmi, jangan hanya mengandalkan video tutorial.",
        "Jangan buru-buru ke framework jika belum kuat dasar JS.",
        "Latihan kecil tiap hari lebih baik daripada belajar banyak tapi jarang.",
        "Perhatikan struktur dan penamaan file agar mudah dikelola.",
        "Gunakan NPM hanya saat memang butuh package, jangan asal install.",
        "Frontend itu terus berkembang—selalu update skill secara berkala."
      ],
      "button_pembelajaran" => [
        "label" => "Pelajari Tips & Notes Lebih Lanjut",
        "link" => "https://www.example.com/tips-notes"
      ]
    ];

    $tengah = [
      "title" => "Frontend",
      "items" => [
        "Frontend mencakup HTML, CSS, dan JavaScript yang menjadi fondasi utama dalam membangun tampilan web.",
        "Selain itu, penggunaan alat bantu seperti Git untuk versi kontrol, NPM untuk manajemen paket, serta editor seperti VS Code sangat penting dalam pengembangan frontend modern."
      ],
      "cta" => [
        "label" => "Pelajari Frontend Lebih Dalam",
        "link" => "https://www.freecodecamp.org/learn"
      ],
      "buttons" => [
        [
          "label" => "HTML",
          "link" => "https://developer.mozilla.org/en-US/docs/Web/HTML"
        ],
        [
          "label" => "CSS",
          "link" => "https://developer.mozilla.org/en-US/docs/Web/CSS"
        ],
        [
          "label" => "JavaScript",
          "link" => "https://developer.mozilla.org/en-US/docs/Web/JavaScript"
        ],
        [
          "label" => "Git & GitHub",
          "link" => "https://learngitbranching.js.org/"
        ],
        [
          "label" => "NPM (Node Package Manager)",
          "link" => "https://docs.npmjs.com/"
        ],
        [
          "label" => "VS Code (Code Editor)",
          "link" => "https://code.visualstudio.com/"
        ],
        [
          "label" => "Browser DevTools",
          "link" => "https://developer.chrome.com/docs/devtools/"
        ],
        [
          "label" => "Live Server / Preview Tool",
          "link" => "https://marketplace.visualstudio.com/items?itemName=ritwickdey.LiveServer"
        ]
      ]
    ];

    $kanan = [
      "title" => "Tips Praktis",
      "items" => [
        "Pelajari semantic HTML agar struktur kode rapi dan SEO-friendly.",
        "Gunakan Flexbox & Grid untuk layout yang responsif.",
        "Pahami DOM karena hampir semua interaksi di JS bekerja dengannya.",
        "Gunakan console.log untuk debugging JavaScript secara efisien.",
        "Simpan project latihan di GitHub untuk portofolio.",
        "Buat proyek mini seperti to-do list atau galeri gambar.",
        "Pelajari dasar HTTP, request, dan response.",
        "Gunakan media query untuk membuat tampilan mobile-friendly.",
        "Jangan takut salah—frontend banyak belajar dari coba-coba.",
        "Ikuti komunitas atau forum agar tetap termotivasi dan update."
      ]
    ];



    return view("frontend", compact('judul', 'href', 'share', 'tengah', 'kiri', 'kanan'));
  }
}
