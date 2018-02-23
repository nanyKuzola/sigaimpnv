<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerfilUtilizador extends Model
{
    //declaração de variaveis


    protected $id;
    protected $perfil_id;
    protected $utilizador_id;

    //
    //
    //
    // para o caso do utilizador for um Director de turnma
    public function turma()
    {
        return $this->hasOne('App\Turma');
    }
    // um professor leciona varias disciplinas em varios cursos
    public function cursodisciplinas()
    {
        return $this->hasMany('App\CursoDisciplina','perfilutilizador_id');
    }
    // um coordenador coordena só 1 curso 1:1(coordenador do curso)
    public function curso()
    {
        return $this->hasOne('App\Curso');
    }

}
