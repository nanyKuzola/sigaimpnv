@extends('layouts.master1')

@section('conteudo')


    <div class="container-fluid">
        <p>


        </p>
        <div class="panel panel-default">

            <div class="panel-heading text-center">
                <h3 class="panel-title">SIGA | Adicionar {{App\Curso::getClassNome()}} </h3>
            </div>

            <div class="panel-body">

                <form method="POST" action="#">
                    {{csrf_field()}}

                    <div class="form-group col-sm-6">
                        <input class="form-control" placeholder="Nome" name="nome" type="text" autofocus>
                    </div>

                    <div class="form-group col-sm-6">
                        <input class="form-control" placeholder="Sobre Nome"  type="text" name="sobrenome" autofocus>
                    </div>


                    <input name="estado" type="number" value=0 hidden>


                    <div class="form-group col-sm-6">
                        <input class="form-control" placeholder="Morada" name="morada" type="text" autofocus required>
                    </div>

                    <div class="form-group col-sm-6">
                        <input class="form-control" placeholder="Telefone" name="telefone" type="text" autofocus required>
                    </div>

                    <div class="form-group col-sm-6">
                        <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus required>
                    </div>

                    <div class="form-group col-sm-3">
                        <input class="form-control" placeholder="Senha" name="password" type="text" autofocus required>
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