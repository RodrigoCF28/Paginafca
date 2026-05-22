<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\PaginasController;
use App\Http\Controllers\GraduateController;
use App\Models\Docente;

Route::get('/', [NoticiaController::class, 'index']);
Route::get('/docentes', [PaginasController::class, 'docentes'])->name('docentes');
Route::get('/egresados', [PaginasController::class, 'egresados'])->name('egresados');
Route::get('/facultad', [PaginasController::class, 'facultad'])->name('facultad');
Route::get('/egresados', [GraduateController::class, 'index'])->name('egresados');
Route::get('/oferta-educativa', [PaginasController::class, 'ofertaEducativa'])->name('oferta-educativa');
Route::get('/vinculacion', [PaginasController::class, 'vinculacion'])->name('vinculacion');
Route::get('/internacionalizacion', [PaginasController::class, 'internacionalizacion'])->name('internacionalizacion');