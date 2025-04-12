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
        "text" => "Tips & Notes",
        "text1" => "Kuasai frontend dan backend secara bertahap, jangan terburu-buru.",
        "text2" => "Pahami alur data dari client ke server dan kembali ke client.",
        "text3" => "Gunakan satu stack dulu seperti MERN, LAMP, atau Laravel + Vue.",
        "text4" => "Latih integrasi API secara manual sebelum pakai tools otomatis.",
        "text5" => "Simpan struktur file yang rapi agar lebih mudah dipelihara.",
        "text6" => "Selalu pisahkan logika frontend dan backend dengan jelas.",
        "text7" => "Gunakan Git untuk manajemen versi di project fullstack.",
        "text8" => "Belajar dasar deployment ke hosting seperti Vercel atau Render.",
        "text9" => "Buat mini project end-to-end agar belajar lebih nyata.",
        "text10" => "Bangun dokumentasi proyek agar mudah dikembangkan lebih lanjut.",

    ];


    $tengah = [
        "titleK" => "Fullstack",
        "button" => "Fullstack Tools",
        "button1" => "HTML, CSS, JavaScript",
        "button2" => "Frontend Framework (React / Vue)",
        "button3" => "Backend Framework (Express / Laravel)",
        "button4" => "Database (MySQL / MongoDB)",
        "button5" => "REST API / JSON",
        "button6" => "Postman / Insomnia",
        "button7" => "Git & GitHub",
        "button8" => "Deployment (Vercel / Render / Railway)",
        "texttengah" => "Fullstack mencakup penguasaan frontend dan backend serta kemampuan menghubungkan keduanya.",
        "texttengah1" => "Pemahaman API, pengelolaan database, hingga deployment adalah kunci dalam pengembangan fullstack modern.",
        "button9" => "Buat Mini Project Sekarang"
    ];

    $kanan = [
        "textkanan" => "Tips Praktis",
        "textkanan1" => "Mulai dari frontend, lalu sambungkan dengan backend.",
        "textkanan2" => "Gunakan JSON untuk komunikasi data antara client dan server.",
        "textkanan3" => "Tes endpoint backend dengan Postman sebelum dihubungkan ke frontend.",
        "textkanan4" => "Simpan kredensial penting di environment file (.env).",
        "textkanan5" => "Pakai versi Git branching (misalnya main, dev, feature).",
        "textkanan6" => "Gunakan CORS middleware jika backend dan frontend terpisah.",
        "textkanan7" => "Buat validasi input baik di frontend maupun backend.",
        "textkanan8" => "Latih deployment ke platform gratis untuk testing (Vercel, Render).",
        "textkanan9" => "Lacak dan tangani error baik di client maupun server.",
        "textkanan10" => "Bangun portofolio proyek fullstack real-world.",

    ];

    return view("fullstack", compact('judul', 'href', 'share', 'tengah', 'kiri', 'kanan'));
  }
}
