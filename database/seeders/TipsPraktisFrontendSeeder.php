<?php

namespace Database\Seeders;

use App\Models\TipsPraktisFrontend;
use Illuminate\Database\Seeder;

class TipsPraktisFrontendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipsPraktis = [
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
        ];

        foreach ($tipsPraktis as $item) {
            TipsPraktisFrontend::create(['item' => $item]);
        }
    }
}