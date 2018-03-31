<?php

namespace App\Http\Controllers;

use App\Professor;
use App\Turma;
use App\Turno;
use Illuminate\Http\Request;
use App\Curso;

class ProfessorController extends Controller
{
    //

    public function form()
    {
        $professores = Professor::all();

        return view('pages.curso.cadastrar',compact('professores'));

    }
    public function cadastro(Request $request)
    {
         $curso  = new Curso();
         $turnos = Turno::all();
         $curso->nome=strtoupper($request->nome);
         $curso->descricao = strtoupper($request->descricao);
         $curso->duracao = strtoupper($request->duracao);
         $curso->save();

          // após criar curso é  associado a 2 turnos automaticamente
         $turno = Turno::find(1);
         $curso->turnos()->save($turno);
         $turno = Turno::find(2);
         $curso->turnos()->save($turno);
         // criando turmas associada a turnos

        for($cont=1; $cont<=$curso->duracao; $cont++)
        {
           for($turn=1;$turn<=2;$turn++)
           {
               $turno = Turno::find($turn);
               $turma = new Turma();
               $turma->turno_id=$turn;
               $turma->ano=$cont;
               $turma->curso_id=$curso->id;
               // formato do codigo turma
               // C_ano_icturno
               $turma->codigo=$curso->nome['1'].$curso->nome['2'].$curso->nome['3'].$curso->nome['4'].$turma->ano.$turno->periodo['0'];
               $turma->save();
           }
        }
        return view('pages.curso.voltar');



    }
}
