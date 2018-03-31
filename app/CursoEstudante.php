<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CursoEstudante extends Model
{
    //
    protected $table = 'curso_estudantes';




    // funcionario que validou a inscricão
    public function fsp()
    {
        return $this->belongsTo('App\Fsp');
    }
    // busca o estudante associado a inscrição
    public function estudante($idestudante)
    {

        $inscrito = Estudante::find($idestudante);
        return $inscrito;
    }
    // devolve o numero de inscrições do estudante
    public function nInscricoes($idstudent)
    {
        $numero = DB::table('curso_estudantes')->where('estudante_id',$idstudent)->count();

        dd($numero);
    }
}
