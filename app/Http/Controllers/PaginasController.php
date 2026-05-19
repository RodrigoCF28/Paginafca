<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;

class PaginasController extends Controller
{
public function docentes()
{
    $categorias = [
        'Profesores de Tiempo Completo',
        'Profesores de Medio Tiempo',
        'Coordinadores del Programa Institucional de Inglés para FCA',
        'Profesores por Asignatura',
    ];

    $grupos = collect($categorias)->mapWithKeys(function ($categoria) {
        return [
            $categoria => Docente::where('categoria', $categoria)
            ->orderBy('nombre')
            ->get()
        ];
    });

    return view('docentes', compact('grupos'));
}

    public function egresados() {
        return view('egresados');
    }

    public function facultad() {
        return view('facultad');
    }

    public function ofertaEducativa()
{
    return view('oferta-educativa');
}

    public function vinculacion()
    {
        return view('vinculacion');
    }

    public function internacionalizacion()
    {
        return view('internacionalizacion');
    }
}