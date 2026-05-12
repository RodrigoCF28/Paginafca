<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NoticiaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence(5),
            'descripcion' => $this->faker->paragraph(2),
  
            'imagen' => 'https://picsum.photos/640/480?random=' . rand(1, 100),
        ];
    }
}