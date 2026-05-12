<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Docente>
 */
class DocenteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $grados = ['Mtro.', 'Dr.', 'Ing.', 'Lic.'];

        $genero = fake()->randomElement(['men', 'women']);
        $numero = fake()->numberBetween(1, 99);

        return [
            'nombre' => fake()->name(),
            'correo' => fake()->unique()->safeEmail(),
            'grado_academico' => fake()->randomElement($grados),

            'foto' => "https://randomuser.me/api/portraits/{$genero}/{$numero}.jpg",
        ];
    }
}