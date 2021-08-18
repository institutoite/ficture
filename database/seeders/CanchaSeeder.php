<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cancha;

class CanchaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cancha::create([
            'nombre'=>'Hernando Siles',
            'direccion'=>'Calle Abuna esquina Tapanache Barrio Chinquinmirinchinquiri',
            'capacidad'=>25000,
        ]);
        Cancha::create([
            'nombre'=>'Tauhichi Aguilera',
            'direccion'=>'Av. general Campero',
            'capacidad'=>12000,
        ]);
        Cancha::create([
            'nombre'=>'Villa 1 de Mayo',
            'direccion'=>'Calle 13 este #14',
            'capacidad'=>25000,
        ]);
        Cancha::create([
            'nombre'=>'Plan 4000',
            'direccion'=>'una direccion media rara',
            'capacidad'=>25,
        ]);
    }
}
