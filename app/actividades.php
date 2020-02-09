<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actividades extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'inicio', 'fin'];
}
