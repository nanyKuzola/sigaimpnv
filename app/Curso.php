<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //declaração de variaveis

    protected $id;
    protected $nome;
    protected $descricao;
    protected $duracao;
    protected $perfilutilizador_id;

    // retorna o utilizador associada ao curso
    public function utilizadors()
    {
        return $this->belongsToMany('App\Utilizador');
    }

    // retorna os turnos que este curso tem
    public function turnos()
    {
        return $this->belongsToMany('App\Turno');
    }
    // retorna as disciplinas que o curso tem
    public function disciplinas()
    {
        return $this->belongsToMany('App\Disciplina');
    }
    // retorna o coordenador do curso
    public function perfilutilizador()
    {
        return $this->belongsTo('App\PerfilUtilizador');
    }
    // retorna nos anos associado a este curso
    public function classes()
    {
        return $this->hasMany('App\Classe','curso_id');
    }
    public static function getClassNome()
    {
        return "Curso";
    }
}
