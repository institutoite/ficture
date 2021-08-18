<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Persona::factory(10)->create();
        $this->call([
            PersonaSeeder::class,
            EquipoSeeder::class,
            CanchaSeeder::class,
            CategoriaSeeder::class,
        ]);
    }
}
