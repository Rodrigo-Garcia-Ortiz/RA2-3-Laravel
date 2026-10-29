<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class libroRGO extends Model
{
    protected $fillable = [
        'titulo',
        'autor',
        'anio_publicacion'
    ];
}
