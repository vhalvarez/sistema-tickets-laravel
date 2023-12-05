<?php

namespace Database\Seeders;

use App\Models\Estado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Estados de Venezuela
        Estado::create([
            'id' => 1,
            'nombre' => 'Distrito Capital',
            'pais_id' => 1, // ID de Venezuela
        ]);

        // Estados de Colombia
        Estado::create([
            'id' => 2,
            'nombre' => 'Cundinamarca',
            'pais_id' => 2, // ID de Colombia
        ]);
    }
}
