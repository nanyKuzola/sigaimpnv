<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Perfil;
use App\PerfilUtilizador;
use App\Utilizador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

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

            return  redirect()->route('meusPerfis');

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
            return redirect()->route('paginainicial');
        }
    }
    public function showForm()
    {   $perfils = Perfil::all();
        return view('pages.utilizador.cadastrar',compact('perfils'));
    }
    public function guardar()
    {

    }
    public function meusPerfis()
    {
        $utilizador=Auth::user()->getAuthIdentifier();


        return view('pages.utilizador.meuperfilactual', compact('utilizador'));
    }
    public function inscricao()
    {
        return view('inscricao');
    }
    // funcão que recebe os dados vindo do formulário de inscrição
    public function inscricao_candidato(Request $request)
    {

        $utilizador = new Utilizador();

        $utilizador->primeiro_nome=$request->nome;
        $utilizador->sobre_nome=$request->sobre_nome;
        $utilizador->email=$request->nome.".".$request->sobre_nome."@impnv.co.ao";
        $utilizador->password=bcrypt("123456");
        $utilizador->morada=" ";
        $utilizador->nome_pai=$request->nome_pai;
        $utilizador->nome_mae=$request->nome_mae;

         $ano_actual = Carbon::now()->year;
         $data_nascimento = explode("-",$request->data_nascimento);

         $utilizador->born_day=$data_nascimento[2];
         $utilizador->born_month=$data_nascimento[1];
         $utilizador->born_year=$data_nascimento[0];
         $utilizador->idade=$ano_actual-$utilizador->born_year;
         $utilizador->bi=$request->numero_bilhete;

         $data_emissao = explode('-',$request->data_emissao);
         $utilizador->bi_year=$data_emissao[0];
         $utilizador->bi_month=$data_emissao[1];
         $utilizador->bi_day=$data_emissao[2];
         $utilizador->bi_local_emmissao=$request->local_emissao;
         $utilizador->morada=$utilizador->bi_local_emmissao;

         $utilizador->genero=$request->genero;
         $utilizador->telefone=$request->telemovel;
         $utilizador->opcao_curso_1 = $request->op1;
         $utilizador->opcao_curso_2 = $request->op2;
         $utilizador->opcao_curso_3 = $request->op3;
         $utilizador->estado=0;

         $utilizador->area_formacao = " ";


        $utilizador->save();


        $_utilizador = Utilizador::find($utilizador->id);

        $id_perfil_estudante = 11;// 11 é o id de perfil candidato a estudante


        $_utilizador->perfils()->attach($id_perfil_estudante); // associar o utilizador um perfil de candidato

       //  foreach($_utilizador->perfils as $perfil) // pega os perfis que o utilizador tem

        // ASSOCIAÇÃO COM CADA CURSO QUE O UTILIZADOR ESCOLHEU
        $_utilizador->cursos()->attach(Curso::where('nome','=',$utilizador->opcao_curso_1)->first()->id);
        $_utilizador->cursos()->attach(Curso::where('nome','=',$utilizador->opcao_curso_2)->first()->id);
        $_utilizador->cursos()->attach(Curso::where('nome','=',$utilizador->opcao_curso_3)->first()->id);


        return true;

    }
    public function resultados()
    {
        return view('resultados');
    }
}
