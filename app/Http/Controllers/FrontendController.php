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
    "text" => "Tips & Notes",
    "text1" => "Fokus dulu kuasai HTML dan CSS sebelum masuk ke JavaScript.",
    "text2" => "Gunakan browser DevTools untuk latihan analisa struktur halaman.",
    "text3" => "Biasakan versi kontrol sejak awal dengan Git & GitHub.",
    "text4" => "Install ekstensi bermanfaat di VS Code seperti Live Server dan Prettier.",
    "text5" => "Baca dokumentasi resmi, jangan hanya mengandalkan video tutorial.",
    "text6" => "Jangan buru-buru ke framework jika belum kuat dasar JS.",
    "text7" => "Latihan kecil tiap hari lebih baik daripada belajar banyak tapi jarang.",
    "text8" => "Perhatikan struktur dan penamaan file agar mudah dikelola.",
    "text9" => "Gunakan NPM hanya saat memang butuh package, jangan asal install.",
    "text10" => "Frontend itu terus berkembang—selalu update skill secara berkala.",

    ];

    $tengah = [
        "titleK" => "Frontend",
        "button" => "Device",
        "button1" => "HTML",
        "button2" => "CSS",
        "button3" => "JavaScript",
        "button4" => "Git & GitHub",
        "button5" => "NPM (Node Package Manager)",
        "button6" => "VS Code (Code Editor)",
        "button7" => "Browser DevTools",
        "button8" => "Live Server / Preview Tool",
        "texttengah" => "Teknologi frontend dasar meliputi HTML, CSS, dan JavaScript sebagai fondasi utama membangun tampilan web.",
        "texttengah1" => "Selain itu, penggunaan alat bantu seperti Git untuk versi kontrol, NPM untuk manajemen paket, serta editor seperti VS Code sangat penting dalam pengembangan frontend modern.",
        "button9" => "Pelajari Frontend Lebih Dalam"
    ];


    $kanan = [
        "textkanan" => "Tips Praktis",
        "textkanan1" => "Pelajari semantic HTML agar struktur kode rapi dan SEO-friendly.",
        "textkanan2" => "Gunakan Flexbox & Grid untuk layout yang responsif.",
        "textkanan3" => "Pahami DOM karena hampir semua interaksi di JS bekerja dengannya.",
        "textkanan4" => "Gunakan console.log untuk debugging JavaScript secara efisien.",
        "textkanan5" => "Simpan project latihan di GitHub untuk portofolio.",
        "textkanan6" => "Buat proyek mini seperti to-do list atau galeri gambar.",
        "textkanan7" => "Pelajari dasar HTTP, request, dan response.",
        "textkanan8" => "Gunakan media query untuk membuat tampilan mobile-friendly.",
        "textkanan9" => "Jangan takut salah—frontend banyak belajar dari coba-coba.",
        "textkanan10" => "Ikuti komunitas atau forum agar tetap termotivasi dan update.",

    ];


    return view("frontend", compact('judul', 'href', 'share','tengah', 'kiri', 'kanan' ));
  }
}
