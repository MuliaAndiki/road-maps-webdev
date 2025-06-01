<?php

namespace Database\Seeders;

use App\Models\KeteranganFrontend;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KeteranganFrontendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KeteranganFrontend::create(attributes: [
            'keterangan' => 'Sebagai frontend developer, Anda bertanggung jawab untuk merancang antarmuka pengguna yang menarik dan mudah digunakan, bekerja sama dengan tim untuk memastikan produk akhir memenuhi kebutuhan klien dan pengalaman pengguna terbaik.'
        ]);
    }
}
