<?php

namespace Database\Seeders;

use App\Models\Pais;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Pais::create([
            'nombre' => 'Venezuela',
        ]);

        Pais::create([
            'nombre' => 'Colombia',
        ]);
    }
}
