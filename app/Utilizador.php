<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Utilizador extends Authenticatable
{
    // declaração de variaveis
    use Notifiable;

    /**

     */
    protected $fillable = [
        'primeiro_nome','sobre_nome','email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    // retorna os perfils que o utilizador possui
    public function perfils()
    {
        return $this->belongsToMany('App\Perfil','perfil_utilizadors','utilizador_id','perfil_id');
    }

    // retorna os cursos associado ao utilizador

    public function cursos()
    {
        return $this->belongsToMany('App\Curso','curso_utilizadors','utilizador_id','curso_id');
    }


}
