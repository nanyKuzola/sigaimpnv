<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Curso;
use App\Inscricao;

class Estudante extends Authenticatable
{
    //
    use Notifiable;
    protected $table = 'estudantes';
    protected $fillable = ['email',  'password'];
    protected $hidden = ['password',  'remember_token'];


    public function cursos()
    {
        return $this->belongsToMany('App\Curso','Curso_estudantes', 'estudante_id')->withTimestamps();
    }

    // o estudante faz inscricao

    public function inscricao()
    {
        return $this->hasOne('App\Inscricao','estudante_id');
    }


}
