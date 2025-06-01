<?php

namespace Database\Seeders;

use App\Models\KeteranganBackend;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KeteranganBackendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KeteranganBackend::create([
            'keterangan' => 'Pengembang backend mengelola komponen sisi server, API, basis data, dan integrasi layanan eksternal untuk memastikan performa dan keamanan, mendukung frontend dalam memberikan pengalaman pengguna yang mulus.',
        ]);
    }
}
