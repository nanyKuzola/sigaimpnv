@extends('layouts.master1')

@section('conteudo')
        <p>
            olá
            @if(auth()->guard('estudante')->user()!=null)
                {{auth()->guard('estudante')->user()->primeiro_nome}}
            @elseif(auth()->guard('fsp')->user()!=null)
                {{auth()->guard('fsp')->user()->primeiro_nome}}
            @elseif(auth()->guard('professor')->user()!=null)
                {{auth()->guard('professor')->user()->primeiro_nome}}
                @endif

        </p>
@endsection