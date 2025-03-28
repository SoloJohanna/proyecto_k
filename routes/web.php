<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/planta_k1', function () {
    return view('planta_k1');
});

Route::get('/planta_k2', function () {
    return view('planta_k2');
});
