<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Professor extends Authenticatable
{
    //
    protected $table="professors";



    // 1 prof cordena apenas 1 curso
    public function curso()
    {
        return $this->hasOne('App\Curso','professor_id');
    }

}
