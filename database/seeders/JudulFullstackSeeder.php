<?php

namespace Database\Seeders;

use App\Models\JudulFullstack;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JudulFullstackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JudulFullstack::create([
            'judul' => 'FullStack',
            'deskripsi' => 'Step by step guide to becoming a modern fullstack developer in 2025',
            'paragraf' => 'fullstack',
        ]);
    }
}
