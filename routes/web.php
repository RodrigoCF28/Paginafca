<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NoticiaController;

Route::get('/', [NoticiaController::class, 'index']);
use App\Models\Docente;

Route::get('/docentes', function () { $docentes = Docente::all();return view('docentes', compact('docentes')); });