<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
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



        $guides = [
            ["title" => "Pelajari cara mendepoy aplikasi ke platform seperti Heroku, Vercel, atau Render.", "description" => "Guide 1", "link" => "https://www.heroku.com/"],
            ["title" => "Panduan menggunakan Git dan GitHub untuk kontrol versi di proyek fullstack.", "description" => "Guide 2", "link" => "https://guides.github.com/introduction/git-handbook/"],
            ["title" => "Pelajari dasar-dasar MongoDB sebagai database NoSQL untuk aplikasi fullstack.", "description" => "Guide 3", "link" => "https://www.mongodb.com/basics"],
            ["title" => "Pahami konsep REST API dan cara menghubungkannya dengan aplikasi frontend.", "description" => "Guide 4", "link" => "https://restfulapi.net/"],
            ["title" => "Panduan untuk memulai backend dengan Node.js dan framework Express.js.", "description" => "Guide 5", "link" => "https://expressjs.com/en/starter/installing.html"],
            ["title" => "Panduan untuk memahami dasar-dasar JavaScript, bahasa pemrograman utama untuk interaktivitas web.", "description" => "Guide 6", "link" => "https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Introduction"],
            ["title" => "Pelajari dasar-dasar HTML dan CSS untuk membuat struktur dan desain halaman web.", "description" => "Guide 7", "link" => "https://developer.mozilla.org/en-US/docs/Web/HTML"]
        ];


        $foto = [
            ["foto" => asset('asset/1.jpg')],
            ["foto" => asset('asset/2.jpg')],
            ["foto" => asset('asset/3.jpg')],
            ["foto" => asset('asset/4.jpg')],
        ];

        return view('home', compact('videos', 'guides', 'foto'));
    }
}
