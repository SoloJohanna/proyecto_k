<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/planta_k1', [HomeController::class, 'planta_k1'])->name('planta_k1');
Route::get('/planta_k2', [HomeController::class, 'planta_k2'])->name('planta_k2');
Route::get('/planta_k3', [HomeController::class, 'planta_k3'])->name('planta_k3');

Route::post('/contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');
