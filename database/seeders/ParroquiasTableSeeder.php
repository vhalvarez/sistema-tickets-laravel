<?php

namespace Database\Seeders;

use App\Models\Parroquia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParroquiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Parroquias de Caracas, Distrito Capital, Venezuela
        Parroquia::create([
            'id' => 1,
            'nombre' => 'Altagracia',
            'municipio_id' => 1, // ID de Caracas
            'estado_id' => 1,    // ID de Distrito Capital
            'pais_id' => 1,      // ID de Venezuela
        ]);

        // Parroquias de Bogotá, Cundinamarca, Colombia
        Parroquia::create([
            'id' => 2,
            'nombre' => 'La Candelaria',
            'municipio_id' => 2, // ID de Bogotá
            'estado_id' => 2,    // ID de Cundinamarca
            'pais_id' => 2,      // ID de Colombia
        ]);
    }
}
