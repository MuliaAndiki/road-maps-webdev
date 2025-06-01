<?php

namespace Database\Seeders;

use App\Models\JudulBackend;
use Illuminate\Database\Seeder;

class JudulBackendSeeder extends Seeder
{
    public function run(): void
    {
        JudulBackend::create([
            'judul' => 'Backend',
            'deskripsi' => 'Step by step guide to becoming a modern backend developer in 2025',
            'paragraf' => 'Backend',
        ]);
    }
}