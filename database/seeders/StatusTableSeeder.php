<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::create([
            'nombre' => 'Abierto',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Status::create([
            'nombre' => 'En Espera',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Status::create([
            'nombre' => 'Cerrado',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
