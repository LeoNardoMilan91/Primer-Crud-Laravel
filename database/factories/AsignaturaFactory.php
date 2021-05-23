<?php

namespace Database\Factories;

use App\Models\asignatura;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Profesor;

class AsignaturaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = asignatura::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
            $profesor=Profesor::all('id');//Traemos los profesores
        return [
            'nombre'=>$this->faker->word(),
            'descripcion'=>$this->faker->realText(200),
            'creditos'=>$this->faker->randomDigitNot(0),
            'profesor_id'=>$profesor->get(rand(0,count($profesor)-1))
        ];
    }
}
