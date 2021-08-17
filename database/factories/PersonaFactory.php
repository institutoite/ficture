<?php

namespace Database\Factories;

use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Persona::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->name,
            'apellidop'=>$this->faker->lastName(),
            'apellidom'=> $this->faker->lastName(),
            'ci'=>$this->faker->numberBetween($min = 55555555, $max = 99999999),
            'expedido'=> $this->faker->randomElement(['LP','SC','PND','BEN','TAR','POT','CHU','CBBA','ORU']),
            'telefono'=>$this->faker->randomElement(['78794545', '78791234', '78791235', '78791236', '78791237', '78791238']),
        ];
    }
}
