<?php

namespace Database\Seeders;

use App\Models\BackendButton;
use App\Models\BackendContent;
use Illuminate\Database\Seeder;

class BackendButtonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil record backend content yang pertama (asumsi hanya ada satu)
        $backendContent = BackendContent::first();

        if ($backendContent) {
            $buttonsData = [
                ['label' => 'Node.js / PHP / Python', 'link' => 'https://nodejs.org/ | https://www.php.net/ | https://www.python.org/'],
                ['label' => 'Express / Laravel / Flask', 'link' => 'https://expressjs.com/ | https://laravel.com/ | https://flask.palletsprojects.com/'],
                ['label' => 'REST API', 'link' => 'https://restfulapi.net/'],
                ['label' => 'MySQL / PostgreSQL', 'link' => 'https://www.mysql.com/ | https://www.postgresql.org/'],
                ['label' => 'MongoDB', 'link' => 'https://www.mongodb.com/'],
                ['label' => 'Postman', 'link' => 'https://www.postman.com/'],
                ['label' => 'JSON', 'link' => 'https://www.json.org/'],
                ['label' => 'Authentication (JWT / Session)', 'link' => 'https://jwt.io/'],
            ];

            foreach ($buttonsData as $button) {
                BackendButton::create([
                    'backend_content_id' => $backendContent->id,
                    'label' => $button['label'],
                    'link' => $button['link'],
                ]);
            }
        }
    }
}