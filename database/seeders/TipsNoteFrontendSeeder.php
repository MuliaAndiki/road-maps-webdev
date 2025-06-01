<?php

namespace Database\Seeders;

use App\Models\TipsNoteFrontend;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipsNoteFrontendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
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
        ];

        foreach ($items as $item) {
            TipsNoteFrontend::create(['item' => $item]);
        }
    }
}
