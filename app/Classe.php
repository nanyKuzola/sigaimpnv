<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    //declaração de variaveis


    protected $id;
    protected $ano;
    protected $curso_id;


    // funcões
    public function curso(){
        return $this->belongsTo('App\Curso');
    }

    public static function getClassNome()
    {
        return "Classe";
    }

}
