<?php

namespace Database\Seeders;

use App\Models\TipsPraktisFullstack;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipsPraktisFullstackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
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
        ];

        foreach ($items as $item) {
            TipsPraktisFullstack::create(['item' => $item]);
        }
    }
}
