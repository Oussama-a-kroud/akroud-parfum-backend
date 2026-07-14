<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfumeController;
use App\Http\Controllers\Api\CommandeController;

// الرسالة باش ديما تيستي واش السيرفر خدام
Route::get('/', function () {
    return response()->json(['message' => 'Akroud Parfum API is working perfectly! 🚀']);
});
Route::get('/test-perfumes', function () {
    return response()->json(['message' => 'Test works!']);
});

// L'adresse API bach njibo la liste d rway7
Route::get('/perfumes', [PerfumeController::class, 'index']);

// La route jdida li katzid rway7 
Route::post('/perfumes', [PerfumeController::class, 'store']);

// Route pour les commandes
Route::post('/commandes', [CommandeController::class, 'store']);