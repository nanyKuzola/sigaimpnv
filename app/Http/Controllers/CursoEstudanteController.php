<?php

namespace App\Http\Controllers;

use App\CursoEstudante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CursoEstudanteController extends Controller
{
    //
    public function ver()
    {
        $inscricoes = CursoEstudante::orderBy('created_at', 'desc')->get();



        return view('pages.curso.inscricoes.ver',compact('inscricoes'));
    }
}
