<?php

namespace Database\Seeders;

use App\Models\BackendContent;
use Illuminate\Database\Seeder;

class BackendContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BackendContent::create([
            'title' => 'Backend',
            'item_1' => 'Backend development berfokus pada logika server, komunikasi data, dan pengelolaan database.',
            'item_2' => 'Penguasaan tools seperti Postman, API, serta sistem database relasional dan non-relasional sangat penting.',
            'cta_label' => 'Pelajari Backend Sekarang',
            'cta_link' => 'https://www.freecodecamp.org/learn/back-end/',
        ]);
    }
}