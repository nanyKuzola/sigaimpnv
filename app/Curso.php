<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Estudante;

class Curso extends Model
{
    //
    protected $table = 'cursos';
    public $timestamps = false;

    protected $fillable = [
        'nome','descricao','duracao', 'professor_id',
    ];
    // devolve os cursos que os estudantes se inscriveram
    public function estudantes()
    {
        return $this->belongsToMany('App\Estudante')->withTimestamps();
    }
    // devirou do relacionamento * para * com inscrição
    public function inscricaos()
    {
        return $this->belongsToMany('App\Inscricao');
    }
    // relacção prof - curso
    public function professor()
    {
        return $this->belongsTo('App\Professor');
    }
    //relacao com disciplina
    public function disciplinas(){
        return $this->belongsToMany('App\Disciplina','curso_disciplinas');
    }
    public function turnos()
    {
        return $this->belongsToMany('App\Turno','curso_turnos');
    }
    public function turmas()
    {
        return $this->hasMany('App\Turma');
    }

}
