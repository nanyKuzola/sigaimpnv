<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Fsp extends Authenticatable
{
    //
    use Notifiable;
    protected $table = 'fsps';
    protected $fillable = ['email',  'password'];
    protected $hidden = ['password',  'remember_token'];


    // validar inscrição

    // relacionamento entre Fsp e inscricao de  1 para muitos
    public function inscricaos()
    {
        return $this->hasMany('App\Inscricao','fsp_id','id');
    }


}
