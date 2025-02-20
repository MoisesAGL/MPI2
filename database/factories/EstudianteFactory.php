<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estudiante>
 */
class EstudianteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->firstName, // Nombre aleatorio
            'apellido' => $this->faker->lastName, // Apellido aleatorio
            'cedula' => $this->faker->unique()->numerify('##########'), // Número único de cédula
            'correo' => $this->faker->unique()->safeEmail, // Correo único
            'usuario' => $this->faker->unique()->userName, // Nombre de usuario único
            'contrasena' => bcrypt('password'), // Contraseña encriptada
            'rol' => $this->faker->randomElement(['estudiante', 'profesor']), // Rol aleatorio
            'fecha' => $this->faker->date(), // Fecha aleatoria
        ];
    }
}
