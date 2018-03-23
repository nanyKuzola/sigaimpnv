<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    // declaração de variavel
    protected $id;
    protected $nome;


    // devolve os cursos associados ao turno

    public static function getClassNome()
    {
        return "Turno";
    }

    public function cursos()
    {
        return $this->belongsToMany('App\Curso','curso_turnos','turno_id','curso_id');
    }

}
