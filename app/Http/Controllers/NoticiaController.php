<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use App\Models\Carrusel;

class NoticiaController extends Controller
{
 public function index()
{
    $noticias = Noticia::all();
    $carruseles = Carrusel::all();

    return view('inicio', compact('noticias', 'carruseles'));
}
}