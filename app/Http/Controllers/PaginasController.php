<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;

class PaginasController extends Controller
{
    public function docentes() {
        $categories = [
            'Profesores de Tiempo Completo',
            'Profesores de Medio Tiempo',
            'Coordinador del Programa Institucional de Inglés para FCA',
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

        $docentes = Docente::all()->map(function ($docente, $index) use ($categories, $lineas) {
            $categoryMap = [
                'Mtro.' => $categories[0],
                'Dr.' => $categories[1],
                'Ing.' => $categories[2],
                'Lic.' => $categories[3],
            ];

            $docente->categoria = $categoryMap[$docente->grado_academico] ?? $categories[$index % count($categories)];
            $docente->linea_academica = $lineas[$index % count($lineas)];
            return $docente;
        });

        $grupos = collect($categories)->mapWithKeys(function ($label) use ($docentes) {
            return [$label => $docentes->where('categoria', $label)];
        });

        return view('docentes', compact('grupos'));
    }

    public function egresados() {
        return view('egresados');
    }

    public function facultad() {
        return view('facultad');
    }
}