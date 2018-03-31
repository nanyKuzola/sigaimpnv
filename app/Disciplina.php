<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    //
    protected $table="disciplinas";


    // relacionamento disc-curso*-*

    public function cursos()
    {
        return $this->belongsToMany('App\Curso','curso_disciplinas','disciplina_id');
    }


}
