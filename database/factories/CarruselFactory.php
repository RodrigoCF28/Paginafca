<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carrusel>
 */
class CarruselFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
    return [
        'imagen' => 'images/fondo1.png', 
        'titulo' => $this->faker->sentence(3),
        'descripcion' => $this->faker->paragraph(1),
    ];
}
}