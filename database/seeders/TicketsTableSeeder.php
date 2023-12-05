<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

            $faker = Faker::create();

            // Crear 50 tickets ficticios
            for ($i = 0; $i < 50; $i++) {
                Ticket::create([
                    'asunto' => $faker->sentence,
                    'descripcion' => $faker->paragraph,
                    'user_id' => $faker->biasedNumberBetween($min = 2, $max= 30, $function = 'sqrt'), // Asignar IDs de usuarios existentes
                    'status_id' => $faker->randomElement([1, 2, 3]), // Asignar IDs de status existentes
                    'parroquia_id' => $faker->randomElement([1, 2]), // Asignar IDs de parroquias existentes
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

    }
}
