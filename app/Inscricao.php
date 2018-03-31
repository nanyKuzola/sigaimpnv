<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Estudante;
use Illuminate\Notifications\Notifiable;
use App\Curso;
use App\Fsp;

class Inscricao extends Model
{
    //
    use Notifiable;
    protected $table = 'inscricaos';

    public function fsp()
    {
        return $this->belongsTo('App\Fsp');
    }
     // relação estudante + inscricao
    public function estudante()
    {
        return $this->belongsTo('App\Estudante');
    }
    // derivou do relacionamento * para * com o curso
    public function cursos()
    {
        return $this->belongsToMany('App\Curso','curso_inscricaos','inscricao_id','curso_id');
    }
}
