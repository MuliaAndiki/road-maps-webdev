<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JudulFrontend;

class JudulFrontendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JudulFrontend::create([
            'judul' => 'Frontend',
            "deskripsi" => "Step by step guide to becoming a modern frontend developer in 2025",
            "paragraf" => "FrontEnd"
        ]);
    }
}
