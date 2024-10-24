<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;

// Definimos ruta para obtener sedes
Route::get('/locations', [LocationController::class, 'index']);
