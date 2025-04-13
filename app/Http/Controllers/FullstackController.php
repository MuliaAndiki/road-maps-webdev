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
      ["downloads" => "https://thepearlie.com/wp-content/uploads/2023/11/The-Full-Stack-Developer.pdf"],
    ];


    $share = [
      ["share" => "#"]
    ];

    $kiri = [
      "title" => "Tips & Notes",
      "items" => [
        "Kuasai frontend dan backend secara bertahap, jangan terburu-buru.",
        "Pahami alur data dari client ke server dan kembali ke client.",
        "Gunakan satu stack dulu seperti MERN, LAMP, atau Laravel + Vue.",
        "Latih integrasi API secara manual sebelum pakai tools otomatis.",
        "Simpan struktur file yang rapi agar lebih mudah dipelihara.",
        "Selalu pisahkan logika frontend dan backend dengan jelas.",
        "Gunakan Git untuk manajemen versi di project fullstack.",
        "Belajar dasar deployment ke hosting seperti Vercel atau Render.",
        "Buat mini project end-to-end agar belajar lebih nyata.",
        "Bangun dokumentasi proyek agar mudah dikembangkan lebih lanjut."
      ]
    ];

    $tengah = [
      "title" => "Fullstack",
      "items" => [
        "Fullstack mencakup penguasaan frontend dan backend serta kemampuan menghubungkan keduanya.",
        "Pemahaman API, pengelolaan database, hingga deployment adalah kunci dalam pengembangan fullstack modern."
      ],
      "cta" => [
        "label" => "Buat Mini Project Sekarang",
        "link" => "https://github.com/search?q=fullstack+mini+project"
      ],
      "buttons" => [
        [
          "label" => "HTML, CSS, JavaScript",
          "link" => "https://www.freecodecamp.org/learn"
        ],
        [
          "label" => "Frontend Framework (React / Vue)",
          "link" => "https://react.dev/learn"
        ],
        [
          "label" => "Backend Framework (Express / Laravel)",
          "link" => "https://laravel.com/docs"
        ],
        [
          "label" => "Database (MySQL / MongoDB)",
          "link" => "https://www.mongodb.com/docs/"
        ],
        [
          "label" => "REST API / JSON",
          "link" => "https://restfulapi.net/"
        ],
        [
          "label" => "Postman / Insomnia",
          "link" => "https://www.postman.com/"
        ],
        [
          "label" => "Git & GitHub",
          "link" => "https://learngitbranching.js.org/"
        ],
        [
          "label" => "Deployment (Vercel / Render / Railway)",
          "link" => "https://vercel.com/docs"
        ],
      ]
    ];

    $kanan = [
      "title" => "Tips Praktis",
      "items" => [
        "Mulai dari frontend, lalu sambungkan dengan backend.",
        "Gunakan JSON untuk komunikasi data antara client dan server.",
        "Tes endpoint backend dengan Postman sebelum dihubungkan ke frontend.",
        "Simpan kredensial penting di environment file (.env).",
        "Pakai versi Git branching (misalnya main, dev, feature).",
        "Gunakan CORS middleware jika backend dan frontend terpisah.",
        "Buat validasi input baik di frontend maupun backend.",
        "Latih deployment ke platform gratis untuk testing (Vercel, Render).",
        "Lacak dan tangani error baik di client maupun server.",
        "Bangun portofolio proyek fullstack real-world."
      ]
    ];



    return view("fullstack", compact('judul', 'href', 'share', 'tengah', 'kiri', 'kanan'));
  }
}
