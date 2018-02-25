@extends('layouts.master')

@section('conteudo')
        <p>
            ola {{auth()->user()->primeiro_nome}}
        </p>
@endsection