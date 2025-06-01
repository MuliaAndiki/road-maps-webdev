<?php

namespace Database\Seeders;

use App\Models\ShareFrontend;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShareFrontendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ShareFrontend::create([
            'share' => '#',
        ]);
    }
}
