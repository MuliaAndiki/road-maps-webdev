<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Guide;

class GuidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $guides = [
            ["title" => "Pelajari cara mendepoy aplikasi ke platform seperti Heroku, Vercel, atau Render.", "description" => "Guide 1", "link" => "https://www.heroku.com/"],
            ["title" => "Panduan menggunakan Git dan GitHub untuk kontrol versi di proyek fullstack.", "description" => "Guide 2", "link" => "https://guides.github.com/introduction/git-handbook/"],
            ["title" => "Pelajari dasar-dasar MongoDB sebagai database NoSQL untuk aplikasi fullstack.", "description" => "Guide 3", "link" => "https://www.mongodb.com/basics"],
            ["title" => "Pahami konsep REST API dan cara menghubungkannya dengan aplikasi frontend.", "description" => "Guide 4", "link" => "https://restfulapi.net/"],
            ["title" => "Panduan untuk memulai backend dengan Node.js dan framework Express.js.", "description" => "Guide 5", "link" => "https://expressjs.com/en/starter/installing.html"],
            ["title" => "Panduan untuk memahami dasar-dasar JavaScript, bahasa pemrograman utama untuk interaktivitas web.", "description" => "Guide 6", "link" => "https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Introduction"],
            ["title" => "Pelajari dasar-dasar HTML dan CSS untuk membuat struktur dan desain halaman web.", "description" => "Guide 7", "link" => "https://developer.mozilla.org/en-US/docs/Web/HTML"]
        ];

        foreach ($guides as $guideData) {
            Guide::create($guideData);
        }
    }
}