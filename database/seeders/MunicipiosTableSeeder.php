<?php

namespace Database\Seeders;

use App\Models\Municipio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MunicipiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Municipios de Distrito Capital, Venezuela
        Municipio::create([
            'id' => 1,
            'nombre' => 'Caracas',
            'estado_id' => 1, // ID de Distrito Capital
            'pais_id' => 1,   // ID de Venezuela
        ]);

        // Municipios de Cundinamarca, Colombia
        Municipio::create([
            'id' => 2,
            'nombre' => 'Bogotá',
            'estado_id' => 2, // ID de Cundinamarca
            'pais_id' => 2,   // ID de Colombia
        ]);
    }
}
