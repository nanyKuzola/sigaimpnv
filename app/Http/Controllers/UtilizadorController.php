<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UtilizadorController extends Controller
{
    //

    public function logins()
    {
        return view('logins');
    }

    //função que recebe os dados via request para serem validados e possibilitar logar-se
    //
    public function entrar(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){

            return  redirect()->route('inicio');

        }
        else
        {
            return redirect()->back();
        }

    }
    public function inicio()
    {
        return view('pages.inicio');
    }
    public function sair()
    {
        if(Auth::check())
        {
            Auth::logout();
            return redirect()->route('logins');
        }
    }
}
