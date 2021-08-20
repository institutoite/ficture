<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Equipoequipo;
class EquipoequipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Equipoequipo::create([
            'equipo_id'=>1,
            'equipo2_id'=>2,
            'arbitro_id'=>1,
            'campeonato_id'=>1,
            'cancha_id'=>1,
            'fecha'=>'2021-08-20',
            'hora'=>'15:00',
        ]);
        Equipoequipo::create([
            'equipo_id' => 1,
            'equipo2_id' => 3,
            'arbitro_id' => 2,
            'campeonato_id' => 1,
            'cancha_id' => 1,
            'fecha' => '2021-08-20',
            'hora' => '15:00',
        ]);
    }
}
