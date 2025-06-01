<?php

namespace Database\Seeders;

use App\Models\HrefBackend;
use Illuminate\Database\Seeder;

class HrefBackendSeeder extends Seeder
{
    public function run(): void
    {
        HrefBackend::create([
            'downloads' => 'https://cs.gmu.edu/~tlatoza/teaching/swe432f16/Lecture%2013%20-%20Backend%20Development.pdf',
        ]);
    }
}