<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tipo;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipo::create(['descripcion'=>"Tarjeta Roja"]);
        Tipo::create(['descripcion'=>"Tarjeta Amarilla"]);
        Tipo::create(['descripcion'=>"Tarjeta GOL"]);
    }
}
