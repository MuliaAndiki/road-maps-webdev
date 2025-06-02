<?php

namespace Database\Seeders;

use App\Models\KeteranganFrontend;
use App\Models\TipsPraktisFrontend;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call([
        // hOME
        VideosTableSeeder::class,
        GuidesTableSeeder::class,
        FotosTableSeeder::class,
        
        // FullStack
        JudulFullstackSeeder::class,
        HrefFullstackSeeder::class,
        ShareFullstackSeeder::class,
        TipsNoteFullstackSeeder::class,
        FullstackContentSeeder::class,
        TipsPraktisFullstackSeeder::class,

        // Frontend
        JudulFrontendSeeder::class,
        HrefFrontendSeeder::class,
        ShareFrontendSeeder::class,
        TipsNoteFrontendSeeder::class,
        TipsPraktisFrontendSeeder::class,
        FrontendContentSeeder::class,
        FrontendButtonSeeder::class,

        // Backend
        JudulBackendSeeder::class,
        HrefBackendSeeder::class,
        ShareBackendSeeder::class,
        TipsNoteBackendSeeder::class,
        BackendContentSeeder::class,
        BackendButtonSeeder::class,
        TipsPraktisBackendSeeder::class,

        // Keterangan
        KeteranganBackendSeeder::class,
        KeteranganFrontendSeeder::class,
        KeteranganFullstackSeeder::class
       ]);
    }
}
