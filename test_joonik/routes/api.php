<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;

// Definimos el endpoint para acceder a las sedes
Route::get('/locations', [LocationController::class, 'index']);
