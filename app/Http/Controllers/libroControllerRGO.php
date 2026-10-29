<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\libroRGO;

class libroControllerRGO extends Controller
{
    public function index()
    {
        libroRGO::create([
            'titulo' => 'El camino de los reyes',
            'autor' => 'Brandon Sanderson',
            'anio_publicacion' => 2012
        ]);

        libroRGO::create([
            'titulo' => 'La divina comedia',
            'autor' => 'Dante Aligiheri',
            'anio_publicacion' => 1543
        ]);

        libroRGO::create([
            'titulo' => 'El ingenioso hidalgo Don Quijote de la Mancha',
            'autor' => 'Miguel de Cervantes',
            'anio_publicacion' => 1524
        ]);

        $libros = libroRGO::all();

        return view('libros.index', compact('libros'));
    }
}
