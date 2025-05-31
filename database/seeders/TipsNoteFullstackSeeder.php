<?php

namespace Database\Seeders;

use App\Models\TipsNoteFullstack;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipsNoteFullstackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
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
        ];

        foreach ($items as $item) {
            TipsNoteFullstack::create(['item' => $item]);
        }
    }
}
