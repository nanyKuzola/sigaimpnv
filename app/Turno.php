<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    //


    public function cursos()
    {
        return $this->belongsToMany('App\Curso','curso_turnos');
    }
}
