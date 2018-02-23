<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CursoTurno extends Model
{
// declaração de variaveis
    protected $id;
    // atributos proveniente da relação M:M  entre curso e turno
    protected $turno_id;
    protected $curso_id;
    // atributo proveniente da relaão 1:1 com a tabela turma
    protected $turma_id;
    // determina o turma associado a este curso no corrente turno
    public function turma()
    {
        return $this->belongsTo('App\Turma');
    }

}
