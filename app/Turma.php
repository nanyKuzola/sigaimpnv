<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    // declaração de variaveis
    protected $id;

    protected $codTurma;

    protected $perfilutilizador_id;// recebeu o chave primaria da tabela perfilutilizador 1:1


    // devolve o curso e turno da corrente turma
    public function cursoturno()
    {
        return $this->hasOne('App\CursoTurno');
    }
    // devolve o perfil do utilizador(director de turma) associado a esta turma
    public function perfilutilizador()
    {
        return $this->belongsTo('App\PerfilUtilizador');
    }
}
