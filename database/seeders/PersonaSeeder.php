<?php

namespace Database\Seeders;

use App\Models\Persona;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Persona::create([
            'nombre' => 'FELIPE',
            'apellidop'=>"MALDONADO",
            'apellidom'=>"ROBLES",
            'ci'=>"4564215",
            'expedido'=>"sc",
            'telefono'=>'74512221'
        ]);
        Persona::create([
            'nombre' => 'DAVID',
            'apellidop' => "FLORES",
            'apellidom' => "ROBLES",
            'ci' => "4564275",
            'expedido' => "BEN",
            'telefono' => '74515555'
        ]);
        Persona::factory()->count(100)->create();
    }
}
