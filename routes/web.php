<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json(['message' => 'Akroud Parfum API is working perfectly! 🚀']);
});