@extends('layouts.master1')

@section('conteudo')
        <div class="container">

            <div class="row">

                <div class="col-md-6 col-md-offset-3">

                    <div class="login-panel panel panel-default">

                        <div class="panel-heading">
                            <h3 class="panel-title text-center">SIGA</h3>
                        </div>

                        <div class="panel-body">

                            <form method="POST">
                                {{csrf_field()}}


                             <p>{{$utilizador}}</p>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn col-md-4 col-md-offset-4">
                                    Entrar
                                </button>
                                <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a>
                                -->
                            </form>

                        </div>

                    </div>

                </div>

            </div>
        </div>
@endsection
