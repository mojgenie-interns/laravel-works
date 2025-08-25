<?php

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/image', [ImageController::class, 'index'])->name('image.index');
Route::get('/image/create', [ImageController::class, 'create'])->name('image.create');
Route::post('/image', [ImageController::class, 'store'])->name('image.store');
Route::delete('/image/{image}', [ImageController::class, 'destroy'])->name('image.destroy');
