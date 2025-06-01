<?php

namespace Database\Seeders;

use App\Models\TipsPraktisBackend;
use Illuminate\Database\Seeder;

class TipsPraktisBackendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
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
        ];

        foreach ($items as $item) {
            TipsPraktisBackend::create(['item' => $item]);
        }
    }
}