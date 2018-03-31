@extends('layouts.master1')

@section('conteudo')
    <p>
        <div class="container-fluid text-center">
         Curso adicionado com sucesso
        </div>

    </p>
    <a href="{{route('cadastrarCurso')}}">
        <i class="fa fa-arrow-left"></i>
        Voltar
    </a>
@endsection