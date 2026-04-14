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
    return [
        'nombre' => $this->faker->name(),
        'correo' => $this->faker->unique()->safeEmail(),
        'telefono' => $this->faker->phoneNumber(),
        'foto' => 'https://randomuser.me/api/portraits/' . (rand(0,1) ? 'men' : 'women') . '/' . rand(1, 99) . '.jpg',    ];
    }
}
