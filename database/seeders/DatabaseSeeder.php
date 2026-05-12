<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Docente;
use App\Models\Noticia;
use App\Models\Carrusel;
use Database\Seeders\GraduateSeeder;

class DatabaseSeeder extends Seeder

{
    public function run(): void
    {
        // 1. DOCENTES 
        Docente::factory(40)->create();

        // 2. NOTICIAS 
        // Noticia 1
        Noticia::create([
            'titulo' => 'Entre raíces y caminos del Mayab',
            'descripcion' => 'Nueva exposición pictórica en FCA',
            'imagen' => 'images/noticia1.png',
        ]);

        // Noticia 2
        Noticia::create([
            'titulo' => 'Inicia el nuevo programa de inducción a la vida...',
            'descripcion' => 'Con la bienvenida del alumnado nuevo',
            'imagen' => 'images/noticia2.png',
        ]);

        // Noticia 3
        Noticia::create([
            'titulo' => 'Clausuran los talleres artísticos y culturales',
            'descripcion' => 'Con ello se cancelan los festejos del 63 aniver...',
            'imagen' => 'images/noticia3.png',
        ]);

        // 3. CARRUSEL 
        Carrusel::create([
            'imagen' => 'images/fondo1.png',
            'titulo' => 'Primer Slide',
            'descripcion' => 'Descripción del primer slide'
        ]);

        Carrusel::create([
            'imagen' => 'images/fondo2.png',
            'titulo' => 'Segundo Slide',
            'descripcion' => 'Descripción del segundo slide'
        ]);

        Carrusel::create([
            'imagen' => 'images/fondo3.png',
            'titulo' => 'Tercer Slide',
            'descripcion' => 'Descripción del tercer slide'
        ]);

        $this->call([
        GraduateSeeder::class,
        ]);
    }

}

