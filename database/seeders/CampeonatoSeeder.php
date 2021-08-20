<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Campeonato;

class CampeonatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Campeonato::create([
            'campeonato'=>'Campeonato A',
            'fechainicio'=>'2021-08-30',
            'fechafin'=> '2021-08-30',
            'categoria_id'=>'1',
        ]);
        Campeonato::create([
            'campeonato'=>'Campeonato B',
            'fechainicio'=>'2021-08-30',
            'fechafin'=> '2021-08-30',
            'categoria_id'=>'2',
        ]);
        Campeonato::create([
            'campeonato'=>'Campeonato C',
            'fechainicio'=>'2021-08-30',
            'fechafin'=> '2021-08-30',
            'categoria_id'=>'3',
        ]);
        Campeonato::create([
            'campeonato'=>'Campeonato D',
            'fechainicio'=>'2021-08-30',
            'fechafin'=> '2021-08-30',
            'categoria_id'=>'4',
        ]);
        Campeonato::create([
            'campeonato'=>'Campeonato E',
            'fechainicio'=>'2021-08-30',
            'fechafin'=> '2021-08-30',
            'categoria_id'=>'5',
        ]);
        Campeonato::create([
            'campeonato'=>'Campeonato F',
            'fechainicio'=>'2021-08-30',
            'fechafin'=> '2021-08-30',
            'categoria_id'=>'1',
        ]);
    }
}
