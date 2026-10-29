<?php

use App\Http\Controllers\libroControllerRGO;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/libros', [libroControllerRGO::class, 'index']);
