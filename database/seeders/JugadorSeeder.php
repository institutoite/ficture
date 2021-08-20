<?php

namespace Database\Seeders;

use App\Models\Jugador;
use Illuminate\Database\Seeder;

class JugadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jugador::create(['persona_id'=>50,'fechanacimiento'=>'2000-05-14','equipo_id'=>1]);
        Jugador::create(['persona_id' =>51,'fechanacimiento'=>'2000-05-14','equipo_id'=>2]);
        Jugador::create(['persona_id' =>52,'fechanacimiento'=>'2000-05-14','equipo_id'=>3]);
        Jugador::create(['persona_id' =>53,'fechanacimiento'=>'2000-05-14','equipo_id'=>1]);
        Jugador::create(['persona_id' =>54,'fechanacimiento'=>'2000-05-14','equipo_id'=>2]);
    }
}
