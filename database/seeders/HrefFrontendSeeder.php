<?php

namespace Database\Seeders;

use App\Models\HrefFrontend;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HrefFrontendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HrefFrontend::create([
            'downloads' => 'https://www.simplestepscode.com/pdf/simple_steps_roadmap.pdf'
        ]);
    }
}
