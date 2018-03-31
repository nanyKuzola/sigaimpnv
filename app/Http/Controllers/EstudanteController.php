<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudanteController extends Controller
{
    //
    // login do estudante e o candidado a discente
    public function entrar(Request $request)
    {
        if (Auth::guard('estudante')->attempt(['email' => $request->email, 'password' => $request->password])){

            return  redirect()->route('meusPerfis');

        }
        else
        {
            return view('welcome');
        }

    }
    public function sair()
    {
        if(Auth::guard('estudante')->check())
        {
            Auth::guard('estudante')->logout();
            return redirect()->route('paginainicial');
        }
    }



}

