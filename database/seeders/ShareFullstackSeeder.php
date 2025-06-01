<?php

namespace Database\Seeders;

use App\Models\ShareFullstack;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShareFullstackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ShareFullstack::create([
            'share' => '#',
        ]);
    }
}
