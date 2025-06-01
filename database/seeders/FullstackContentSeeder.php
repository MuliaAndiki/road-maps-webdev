<?php

namespace Database\Seeders;

use App\Models\FullstackContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FullstackContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fullstackContent = FullstackContent::create([
            'title' => 'Fullstack',
            'item_1' => 'Fullstack mencakup penguasaan frontend dan backend serta kemampuan menghubungkan keduanya.',
            'item_2' => 'Pemahaman API, pengelolaan database, hingga deployment adalah kunci dalam pengembangan fullstack modern.',
            'cta_label' => 'Buat Mini Project Sekarang',
            'cta_link' => 'https://github.com/search?q=fullstack+mini+project',
        ]);

        $buttons = [
            [
                'label' => 'HTML, CSS, JavaScript',
                'link' => 'https://www.freecodecamp.org/learn',
            ],
            [
                'label' => 'Frontend Framework (React / Vue)',
                'link' => 'https://react.dev/learn',
            ],
            [
                'label' => 'Backend Framework (Express / Laravel)',
                'link' => 'https://laravel.com/docs',
            ],
            [
                'label' => 'Database (MySQL / MongoDB)',
                'link' => 'https://www.mongodb.com/docs/',
            ],
            [
                'label' => 'REST API / JSON',
                'link' => 'https://restfulapi.net/',
            ],
            [
                'label' => 'Postman / Insomnia',
                'link' => 'https://www.postman.com/',
            ],
            [
                'label' => 'Git & GitHub',
                'link' => 'https://learngitbranching.js.org/',
            ],
            [
                'label' => 'Deployment (Vercel / Render / Railway)',
                'link' => 'https://vercel.com/docs',
            ],
        ];

        foreach ($buttons as $buttonData){
            $fullstackContent->buttons()->create($buttonData);
        }
    }
}
