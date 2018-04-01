@extends('layouts.master1')

@section('conteudo')



    <div class="container-fluid">
        <p>


        </p>

        <div class="panel panel-default">

            <div class="panel-heading text-center">
                <h3 class="panel-title">CADASTRAR DISCIPLINA</h3>
            </div>

            <div class="panel-body">

                <form method="POST" action="#">
                    {{csrf_field()}}

                    <div class="row">
                        <div class="form-group col-sm-8">
                            <input class="form-control" placeholder="Nome" name="nome" type="text" autofocus>
                        </div>

                        <div class="form-group col-sm-2">
                            <input class="form-control" placeholder="duração"  type="number" name="duracao" autofocus>
                        </div>
                    </div>
                    <div class="row">

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


@endsection