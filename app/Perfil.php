<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    // declaração de variaveis
    protected $id;
    protected $nome;


    public static function getClassNome()
    {
        return "Perfil";
    }

    // devolve o utilizador associado a este perfil
    public function utilizadors()
    {
        return $this->belongsToMany('App\Utilizador');
    }
}
