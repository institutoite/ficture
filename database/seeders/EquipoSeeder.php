<?php

namespace Database\Seeders;

use App\Models\Equipo;
use Illuminate\Database\Seeder;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Equipo::factory()->count(50)->create();
        Equipo::Create([
            'nombre' =>"BOLIVAR",
            'direccion' =>'AV LA PAZ',
            'escudo' =>'LINK1',
            'colores' =>'ROJO CELESTE',
            'fundacion' =>'2015-05-20',
        ]);
        Equipo::Create([
            'nombre' =>"ORIENTE PETROLERO",
            'direccion' =>'AV CAÑOTO',
            'escudo' =>'LINK2',
            'colores' =>'VERDE BLANCO',
            'fundacion' =>'2015-06-15',
        ]);
        Equipo::Create([
            'nombre' =>"BLOOMING",
            'direccion' =>'AV TRES PASOS ATRAS',
            'escudo' =>'LINK3',
            'colores' =>'CELESTE',
            'fundacion' =>'2000-08-08',
        ]);
        Equipo::Create([
            'nombre' =>"GUABIRA",
            'direccion' =>'CALLE GUABIRA',
            'escudo' =>'LINK GUABIRA',
            'colores' =>'ROJO GUABIRA',
            'fundacion' =>'2000-05-17',
        ]);
        Equipo::Create([
            'nombre' =>"REAL POTOSI",
            'direccion' =>'CALLE REAL POTOSI',
            'escudo' =>'LINK REAL POTOSI',
            'colores' =>'ROJO REAL POTOSI',
            'fundacion' =>'2000-05-17',
        ]);
        Equipo::Create([
            'nombre' =>"REAL SANTA CRUZ",
            'direccion' =>'CALLE REAL SANTA CRUZ',
            'escudo' =>'LINK REAL SANTA CRUZ',
            'colores' =>'ROJO REAL SANTA CRUZ',
            'fundacion' =>'2000-05-17',
        ]);
        Equipo::Create([
            'nombre' =>"REAL MAMORE",
            'direccion' =>'CALLE REAL MAMORE',
            'escudo' =>'LINK REAL MAMORE',
            'colores' =>'ROJO REAL MAMORE',
            'fundacion' =>'2000-05-17',
        ]);
        
    }
}
