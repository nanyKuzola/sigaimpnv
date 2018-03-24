@extends('layouts.master1')

@section('conteudo')
        <p>
            ola {{auth()->user()->primeiro_nome}}
        </p>
@endsection