<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CursoDisciplina extends Model
{
    // declaração de variaveis

    protected $id;
    protected $disciplina_id;
    protected $curso_id;
    protected $perfilutilizador_id;


    // buscar o perfil(prefessor) que leciona esta disciplina
    public function perfilutilizador()
    {
        return $this->belongsTo('App\PerfilUtilizador');
    }
}
