<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Equipo;

class EquipoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Equipo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->randomElement(['ORITENTE', 'BOLIVAR', 'THE STRONGEST', 'AURORA', 'SAN JOSE']),
            'direccion'=>$this->faker->address(),
            'escudo'=>$this->faker->url(), 
            'colores'=>$this->faker->randomElement(['azul-verde', 'rojo-lila', 'verde-blanco']),
            'fundacion'=>$this->faker->dateTimeBetween(),
        ];
    }
}
