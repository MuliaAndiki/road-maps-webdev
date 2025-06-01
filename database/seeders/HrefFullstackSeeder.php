<?php

namespace Database\Seeders;

use App\Models\HrefFullstack;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HrefFullstackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HrefFullstack::create([
            'downloads' => 'https://thepearlie.com/wp-content/uploads/2023/11/The-Full-Stack-Developer.pdf',
        ]);
    }
}
