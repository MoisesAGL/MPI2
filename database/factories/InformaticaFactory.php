<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Estudiante;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Informatica>
 */
class InformaticaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'estudiante_id' => Estudiante::factory(), // Relación con un estudiante generado
            'nota' => $this->faker->numberBetween(0, 20), // Nota aleatoria entre 0 y 20
            'fecha' => $this->faker->date(), // Fecha aleatoria
        ];
    }
}
