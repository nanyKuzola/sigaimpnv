<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    //

    public function showForm()
    {
       return view('pages.perfil.cadastrar');
    }
    public function guardar()
    {

    }
}
