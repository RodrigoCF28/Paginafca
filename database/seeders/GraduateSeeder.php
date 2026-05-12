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
        Graduate::factory()->count(20)->create();
    }
}