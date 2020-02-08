<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    protected $fillable = [
        'titulo',
        'descripcion',
        'duracion',
        'donde_long',
        'donde_lat'
    ];
}
