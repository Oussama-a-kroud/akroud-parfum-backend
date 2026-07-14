<?php
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return response()->json(['message' => 'Akroud Parfum API is working perfectly! 🚀']);
});

// فـ ملف routes/web.php
Route::get('perfumes', [App\Http\Controllers\PerfumeController::class, 'index']);
Route::post('perfumes', [App\Http\Controllers\PerfumeController::class, 'store']);
Route::post('commandes', [App\Http\Controllers\Api\CommandeController::class, 'store']);