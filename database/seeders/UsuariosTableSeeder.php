<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $admin = User::create([
            'name' => 'Victor Alvarez',
            'email' => 'alvarez3197@gmail.com',
            'password' => bcrypt('leedskreyy'), // Puedes cambiar esto según tus necesidades
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $admin->assignRole('Admin');

        $client = User::create([
            'name' => 'Samantha Verde',
            'email' => 'samantha@gmail.com',
            'password' => bcrypt('123456'), // Puedes cambiar esto según tus necesidades
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $client->assignRole('Client');


        // Crear 10 usuarios ficticios
        for ($i = 0; $i < 30; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
