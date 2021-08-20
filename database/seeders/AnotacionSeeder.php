<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Anotacion;


class AnotacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Anotacion::create([
            'descripcion' => "una descripcion",
            'jugador_id'  => 1,
            'partido_id'  => 1,
            'tipo_id'     => 1
        ]);
        Anotacion::create([
            'descripcion' => "una descripcion",
            'jugador_id'  => 1,
            'partido_id'  => 1,
            'tipo_id'     => 3
        ]);
        
    }
}
