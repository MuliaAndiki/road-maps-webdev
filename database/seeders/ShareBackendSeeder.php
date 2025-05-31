<?php

namespace Database\Seeders;

use App\Models\ShareBackend;
use Illuminate\Database\Seeder;

class ShareBackendSeeder extends Seeder
{
    public function run(): void
    {
        ShareBackend::create([
            'share' => '#',
        ]);
    }
}