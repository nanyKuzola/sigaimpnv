<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Fsp;
use App\Inscricao;
use App\Estudante;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rules\In;
use Illuminate\Support\Facades\Auth;

class FspController extends Controller
{
    //

    public function inscricao()
    {
        $inscricoes = Inscricao::all();
        return view('pages.secretaria.pedagogica.inscricoes.ver',compact('inscricoes'));
    }
    // busca uma determinada inscrição e mostra
    public function especify($id)
    {
        $candidato = Estudante::find($id);
        return view('pages.secretaria.pedagogica.inscricoes.especifica',compact('candidato'));
    }
    public function bilhete($id){
        $bilhete = Estudante::find($id);
        return view('pages.secretaria.pedagogica.inscricoes.documentos.identidade',compact('bilhete'));
    }
    public function certificado($id)
    {

    }
    public function calculomedia(Request $request, $id){

        // calculando média
         $media = ((((($request->mat_7+$request->fis_7+$request->lp_7+$request->qm_7+$request->ed_7)/5) + (($request->mat_8+$request->fis_8+$request->lp_8+$request->qm_8+$request->ed_8)/5)+(($request->mat_9+$request->fis_9+$request->lp_9+$request->qm_9+$request->ed_9)/5)))/3);
         $updat = Inscricao::find($id);
         $updat->media=$media;
         $updat->save();

         $inscricoes = Inscricao::all();
        return view('pages.secretaria.pedagogica.inscricoes.ver',compact('inscricoes'));
    }
    public function validar($id)
    {
        $validar = Inscricao::find($id);


            $validar->estado = "fechado";
            $validar->fsp_id=Auth::guard('fsp')->user()->id;
            // resolve a situação de inscrever-se a varios cursos mas não resolve
           //  a questão de saber-se qual curso concorreu e conseguir a vaga
            $curso= Curso::where('nome',$validar->estudante->opcao_curso_1)->first();
            // é matriculado no curso especifico
            $validar->cursos()->attach($curso->id);
            $validar->save();
            return redirect()->back();

    }
}
