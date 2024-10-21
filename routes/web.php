<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\ImageProcessingController;

Route::get('/image-upload', [ImageProcessingController::class, 'index']);
Route::post('/process-image', [ImageProcessingController::class, 'processImage']);
Route::get('/', function () {
    return view('landing'); // Mengarahkan ke file Blade 'landing.blade.php'
});
