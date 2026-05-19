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
    $grados = ['Mtro.', 'Mtra.', 'Dr.', 'Dra.', 'Lic.', 'Ing.'];

    $categorias = [
        'Profesores de Tiempo Completo',
        'Profesores de Medio Tiempo',
        'Coordinadores del Programa Institucional de Inglés para FCA',
        'Profesores por Asignatura',
    ];

    $lineas = [
        'Contaduría Financiera',
        'Administración Estratégica',
        'Gestión Fiscal y Tributaria',
        'Auditoría y Control Interno',
        'Economía Empresarial',
        'Sistemas de Información Gerencial',
        'Investigación de Mercados',
        'Estrategia y Política Pública',
    ];

    $genero  = fake()->randomElement(['men', 'women']);
    $numero  = fake()->numberBetween(1, 99);
    $nombre  = fake()->firstName();

    return [
        'nombre'          => fake('es_MX')->name(),
        'correo'          => strtolower($nombre . '.' . fake()->lastName()) . '@docentes.uady.mx',
        'grado_academico' => fake()->randomElement($grados),
        'categoria'       => fake()->randomElement($categorias),
        'linea_academica' => fake()->randomElement($lineas),
        'foto'            => "https://randomuser.me/api/portraits/{$genero}/{$numero}.jpg",
    ];
}
}