<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfumeController;
use App\Http\Controllers\Api\CommandeController;

// L'adresse API bach njibo la liste d rway7
Route::get('/perfumes', [PerfumeController::class, 'index']);
// Route::post('/commandes', [CommandeController::class, 'store']);
Route::post('/commandes', [App\Http\Controllers\Api\CommandeController::class, 'store']);
Route::post('/perfumes', [App\Http\Controllers\Api\PerfumeController::class, 'store']);
// La route jdida li katzid rway7 (Zid hadi)
Route::post('/perfumes', [PerfumeController::class, 'store']);