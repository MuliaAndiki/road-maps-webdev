<?php

namespace Database\Seeders;

use App\Models\FrontendContent;
use Illuminate\Database\Seeder;

class FrontendContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FrontendContent::create([
            'title' => 'Frontend',
            'item_1' => 'Frontend mencakup HTML, CSS, dan JavaScript yang menjadi fondasi utama dalam membangun tampilan web.',
            'item_2' => 'Selain itu, penggunaan alat bantu seperti Git untuk versi kontrol, NPM untuk manajemen paket, serta editor seperti VS Code sangat penting dalam pengembangan frontend modern.',
            'cta_label' => 'Pelajari Frontend Lebih Dalam',
            'cta_link' => 'https://www.freecodecamp.org/learn',
        ]);
    }
}