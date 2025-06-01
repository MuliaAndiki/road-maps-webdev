<?php

namespace Database\Seeders;

use App\Models\KeteranganFullstack;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KeteranganFullstackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KeteranganFullstack::create([
            'keterangan' => "Menjadi full stack developer berarti mahir front-end dan back-end, mengelola server, database, dan API, serta menguasai Git dan RESTful API untuk membangun aplikasi web lengkap."
        ]);
    }
}
