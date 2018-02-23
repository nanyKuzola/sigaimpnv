<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    // declaração de variaveis

    protected $id;
    protected $nome;
    protected $descricao;
    protected $horasTeoricas;
    protected $horasPraticas;


    // retorna as disciplinas associadas a um curso
    public function cursos()
    {
        return $this->belongsToMany('App\Curso','curso_disciplinas','disciplina_id','curso_id');

    }

}
