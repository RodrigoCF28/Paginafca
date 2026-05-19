<?php

namespace App\Http\Controllers;

use App\Models\Graduate;

class GraduateController extends Controller
{
public function index()
{
    $historias = Graduate::where('destacado', true)->get();

    $comunidad = Graduate::where('destacado', false)
    ->orderBy('generacion', 'desc')
    ->paginate(12);

    return view('egresados', compact('historias', 'comunidad'));
}
}