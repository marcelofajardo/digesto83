<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Titulo' => $this->faker->text(25),
            'Descripcion' =>$this->faker->text(100),
            'year' =>$this->faker->numberBetween(2010 , 2022),
            'Numero' =>$this->faker->numberBetween(1,150),
            'url' => $this->faker->numberBetween(1,11) . '.pdf',
            'user_id' => $this->faker->numberBetween(1,12),
            'categoria_id' => $this->faker->numberBetween(1,4),
            'tipo_id' => $this->faker->numberBetween(1,3),
        ];
    }
}
