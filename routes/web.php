<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContactanosMailable;
use App\Http\Controllers\ContactanosController;

Route::get('/', function () {
    return view('home');
});

Route::get('/planta_k1', function () {
    return view('planta_k1');
});

Route::get('/planta_k2', function () {
    return view('planta_k2');
});

Route::get('/planta_k3', function () {
    return view('planta_k3');
});

Route::post('/contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');

