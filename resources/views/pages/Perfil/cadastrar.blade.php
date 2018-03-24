@extends('layouts.master1')

@section('conteudo')


    <div class="container-fluid">
        <p>


        </p>
        <div class="panel panel-default">

            <div class="panel-heading text-center">
                <h3 class="panel-title">SIGA | Adicionar {{App\Perfil::getClassNome()}}</h3>
            </div>

            <div class="panel-body">

                <form method="POST" action="{{route('CPerfil')}}">
                    {{csrf_field()}}

                    <div class="form-group lign-items-center">
                        <input class="form-control" placeholder="Nome" name="nome" type="text" autofocus>
                    </div>
                    <!-- Change this to a button or input when using this as a form -->

                    <button type="submit" class="btn btn col-md-4 col-md-offset-4">
                        Cadastrar
                    </button>
                    <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a>
                    -->
                </form>

            </div>

        </div>

    </div>


@endsection/