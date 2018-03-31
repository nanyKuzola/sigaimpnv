<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Perfil;
use App\PerfilUtilizador;
use App\Utilizador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Estudante;
use App\Fsp;
use App\Inscricao;
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

        if (Auth::guard('estudante')->attempt(['email' => $request->email, 'password' => $request->password])){

            return  view('pages.inicio');

        }
        if (Auth::guard('fsp')->attempt(['email' => $request->email, 'password' => $request->password])){

            return  view('pages.inicio');

        }

        if (Auth::guard('professor')->attempt(['nome_utilizador' => $request->email, 'password' => $request->password])){

            return  view('pages.inicio');

        }

        else
        {
            return redirect()->back();
        }

    }

    public function sair()
    {

        if(Auth::guard('estudante')->check())
        {
            Auth::guard('estudante')->logout();
            return redirect()->route('paginainicial');
        }
        if(Auth::guard('professor')->check())
        {
            Auth::guard('professor')->logout();
            return redirect()->route('paginainicial');
        }
        if(Auth::guard('fsp')->check())
        {
            Auth::guard('fsp')->logout();
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



        return view('pages.utilizador.perfil');
    }
    public function inscricao()
    {
        return view('inscricao');
    }
    // funcão que recebe os dados vindo do formulário de inscrição
    public function inscricao_candidato(Request $request)
    {


        $utilizador = new Estudante();
        // upload de imagen

        $utilizador->primeiro_nome=$request->nome;
        $utilizador->sobre_nome=$request->sobre_nome;
        $utilizador->email=$request->nome."@".$request->sobre_nome."co.ao";
        $utilizador->password=bcrypt("123456");
        $utilizador->morada=$request->morada;
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
        $utilizador->morada=$request->morada;

        $utilizador->genero=$request->genero;
        $utilizador->telefone=$request->telemovel;
        $utilizador->opcao_curso_1 = $request->op1;
        $utilizador->opcao_curso_2 = $request->op2;
        $utilizador->opcao_curso_3 = $request->op3;
        $utilizador->estado=0;
         // salvando bilhete de identidade
        if($request->hasFile('bilhete') && $request->file('bilhete')->isValid())
        {
            // nome da imagem
            $nome = kebab_case($request->numero_bilhete);
            // pega extensão da imagem
            $extension = $request->bilhete->extension();
            // nome final da imagem
            $nomebi = "{$nome}.{$extension}";

            // guardando o nome do bi
            $utilizador->PathBI=$nomebi;
            // fazando o upload da imagem
            $upload = $request->bilhete->storeAs('estudantes',$nomebi);


        }
        // salvando certificado de abilitações literarias
        if($request->hasFile('certificado') && $request->file('certificado')->isValid())
        {
            // nome da imagem
            $nomeimagem = $request->nome_mae.kebab_case($request->nome);
            // pega extensão da imagem
            $extencao = $request->certificado->extension();
            // nome final da imagem
            $nomecert= "{$nomeimagem}.{$extencao}";
            // guardando o nome  de imagem com extensão
            $utilizador->PathCert=$nomecert;
            // fazando o upload da imagem na pasta estudantes
            $uploads = $request->certificado->storeAs('estudantes',$nomecert);

        }


        // validações
        // idade
        $erro = " ";
        if($utilizador->idade< 15 || $utilizador->idade>20)
        {
             $erro="idade";
             return view('pages.secretaria.pedagogica.inscricoes.erros',compact('erro'));
        }
        //numero do bilhete
        $size = strlen($utilizador->bi);

        $utilizador->nome_utilizador=$request->numero_bilhete;

        $utilizador->save();

        $inscricao = new Inscricao();
        $inscricao->estado="aberto";
        $inscricao->estudante_id=$utilizador->id;

        $inscricao->save();





        // ASSOCIAÇÃO COM CADA CURSO QUE O UTILIZADOR ESCOLHEU


         return redirect()->route('paginainicial');

    }
    public function resultados()
    {
        return view('resultados');
    }

    // Funções do funcionário da secretaria pedagógica

    public function vercandidaturas() // exibe todas as candidaturas feitas pelo candidado a discente
    {
        $u = Utilizador::all();// recebece todos estudantes


        //  $utilizadores = $utilizadors->perfils()->get();
        //  $courses = Course::with('profiles')->get();

        dd(true);
        return view('pages.utilizador.fsp.candidaturas');
    }
}
