<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Graduate;

class GraduateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
{
    // 4 historias destacadas (Parte A)
    Graduate::factory()->count(4)->destacado()->create();

    // 20 perfiles de comunidad (Parte C)
    Graduate::factory()->count(20)->create();
}
}