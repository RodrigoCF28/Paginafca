<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NoticiaController;

Route::get('/', [NoticiaController::class, 'index']);
