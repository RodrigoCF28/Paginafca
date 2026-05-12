<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\PaginasController;
use App\Http\Controllers\GraduateController;
use App\Models\Docente;

Route::get('/', [NoticiaController::class, 'index']);
Route::get('/docentes', [PaginasController::class, 'docentes']);
Route::get('/egresados', [PaginasController::class, 'egresados']);
Route::get('/facultad', [PaginasController::class, 'facultad']);
Route::get('/egresados', [GraduateController::class, 'index']);