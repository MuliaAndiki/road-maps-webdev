<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Foto;
use Illuminate\Support\Facades\Storage;

class FotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fotos = [
            ["foto" => 'asset/1.jpg'],
            ["foto" => 'asset/2.jpg'],
            ["foto" => 'asset/3.jpg'],
            ["foto" => 'asset/4.jpg'],
        ];

        foreach ($fotos as $fotoData) {
            Foto::create($fotoData);
        }
    }
}