<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Graduate>
 */
class GraduateFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $imagenes = [

            '1.jpg',
            '2.jpg',
            '3.jpg',
            '4.jpg',
            '5.jpg',
            '6.jpg',
            '7.jpg',
            '8.jpg',
        ];

        return [

            'nombre' => fake()->name(),

            'foto' => $imagenes[array_rand($imagenes)],

            'generacion' => '20' . rand(10, 24),

            'cargo' => fake()->jobTitle(),

            'empresa' => fake()->company(),

            'descripcion' => fake()->paragraph(3),

            'linkedin' => 'https://linkedin.com',

            'destacado' => rand(0,1)
        ];
    }
}