<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Video;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $videos = [
            ["title" => "HTML & CSS Tutorial", "description" => "Dasar-dasar HTML dan CSS.", "link" => "https://www.youtube.com/watch?v=UB1O30fR-EE"],
            ["title" => "JavaScript Basics", "description" => "Dasar-dasar JavaScript.", "link" => "https://www.youtube.com/watch?v=W6NZfCO5SIk"],
            ["title" => "Node.js & Express.js Tutorial", "description" => "Memulai backend dengan Node.js & Express.", "link" => "https://www.youtube.com/watch?v=L72fhGm1tfE"],
            ["title" => "MongoDB Introduction", "description" => "Dasar-dasar MongoDB.", "link" => "https://www.youtube.com/watch?v=ofme2o29ngw"],
            ["title" => "Understanding REST APIs", "description" => "Pahami konsep REST API.", "link" => "https://www.youtube.com/watch?v=7YcW25PHnAA"],
            ["title" => "Git & GitHub Tutorial", "description" => "Penggunaan Git dan GitHub.", "link" => "https://www.youtube.com/watch?v=SWYqp7iY_Tc"],
            ["title" => "Deploying Fullstack Apps", "description" => "Cara mendepoy aplikasi.", "link" => "https://www.youtube.com/watch?v=71p2M7y1z0o"]
        ];
        
        foreach ($videos as $videoData) {
            Video::create($videoData);
        }
    }
}

