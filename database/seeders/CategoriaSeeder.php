<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'categoria'=>'SUB-15',
            'descripcion'=>'campeonato para menores de 15 años', 
        ]);
        Categoria::create([
            'categoria'=>'SUB-20',
            'descripcion'=>'campeonato para menores de 20 años', 
        ]);
        Categoria::create([
            'categoria'=>'SUB-25',
            'descripcion'=>'campeonato para menores de 25 años', 
        ]);
        Categoria::create([
            'categoria'=>'SUB-30',
            'descripcion'=>'campeonato para menores de 30 años', 
        ]);
        Categoria::create([
            'categoria'=>'SUB-40',
            'descripcion'=>'campeonato para menores de 40 años', 
        ]);
    }
}
