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
    $imagenes = ['1.jpg','2.jpg','3.jpg','4.jpg','5.jpg','6.jpg','7.jpg','8.jpg'];

    return [
        'nombre'      => fake('es_MX')->name(),
        'foto'        => $imagenes[array_rand($imagenes)],
        'generacion'  => '20' . rand(10, 24),
        'cargo'       => fake('es_MX')->jobTitle(),
        'empresa'     => fake('es_MX')->company(),
        'area'        => fake()->randomElement(['Contaduría', 'Administración', 'Finanzas']),
        'descripcion' => fake('es_MX')->paragraph(3),
        'cita'        => fake('es_MX')->sentence(10),
        'linkedin'    => 'https://linkedin.com/in/' . fake()->userName(),
        'destacado'   => false,
    ];
}

public function destacado(): static
{
    return $this->state(fn () => ['destacado' => true]);
}
}