<?php

namespace Database\Seeders;

use App\Models\TipsNoteBackend;
use Illuminate\Database\Seeder;

class TipsNoteBackendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
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
        ];

        foreach ($items as $item) {
            TipsNoteBackend::create(['item' => $item]);
        }
    }
}