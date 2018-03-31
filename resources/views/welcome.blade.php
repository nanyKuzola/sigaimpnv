<!doctype html>
<html lang="{{app()->getLocale()}}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet" type="text/css">

        <style>

            html, body {
                background:url("IMPV.PNG") no-repeat center center fixed;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                justify-content: center;
                left: 0;
                right: 0;
            }
            .position-ref {
                position: absolute;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {

                margin-top: 82px;
                margin-left: 400px;

            }
            .title {
                font-size: 84px;
                margin-left: 150px;
            }
            .siga {
                font-size: 20px;
                margin-top: -40px;
                margin-left: -35px;
            }
            .plusins{
                margin-left: 10px;
            }
            a{
                text-decoration: none;
                color: gray;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            .esquerda{
                float: left;
            }
            .direita{
                float: right;
            }
            .inscricao
            {

                margin-left: 200px;
                margin-top: 400px;
            }
            .entrar
            {
                margin-right: 300px;
                margin-top: -15px;

            }
        </style>
    </head>
    <body>
    <!-- Button trigger modal -->

        <div class="#">
            <div class="inscricao">

                    <strong class="plusins">

                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
                            INSCRIÇÃO
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">
                                            <p class="text-center">
                                                FICHA DE INSCRIÇÃO
                                            </p>
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{route('candidatoinscricao')}}" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label style="font-weight: normal;">NOME</label>
                                                    <input type="text" class="form-control" name="nome" placeholder="INTRODUZA O SEU NOME">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label style="font-weight: normal;">SOBRE NOME</label>
                                                    <input type="text" class="form-control" name="sobre_nome" placeholder="INTRODUZA SEU SOBRE NOME">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label style="font-weight: normal;">NOME DO PAI</label>
                                                    <input type="text" class="form-control" name="nome_pai" placeholder="INTRODUZA O NOME DO PAI">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label style="font-weight: normal;">NOME DA MÂE</label>
                                                    <input type="text" class="form-control" name="nome_mae" placeholder="INTRODUZA O NOME DO MÃE">
                                                </div>
                                            </div>

                                            <div class="form-row">

                                                <div class="form-group col-md-6">
                                                    <label style="font-weight: normal;">DATA DE NASCIMENTO</label>
                                                    <input type="date" class="form-control" name="data_nascimento" required>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label style="font-weight: normal;">B.I Nº</label>
                                                    <input type="text" class="form-control" name="numero_bilhete" placeholder="Nº DO BILHETE">
                                                </div>



                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label style="font-weight: normal;">EMITIDO EM</label>
                                                    <input type="text" class="form-control" name="local_emissao" placeholder="LOCAL DE EMISSAO">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label style="font-weight: normal;">MORADA</label>
                                                    <input type="text" class="form-control" name="morada" placeholder="LOCAL DE EMISSAO">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label style="font-weight: normal;">SEXO</label>
                                                    <select name="genero" class="form-control">
                                                        <option value="#"></option>
                                                        <option value="FEMENINO">FEMENINO</option>
                                                        <option value="MASCULINO">MASCULINO</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">

                                                <div class="form-group col-md-6">
                                                    <label style="font-weight: normal;">TELEMÓVEL</label>
                                                    <input type="tel" class="form-control" name="telemovel" placeholder="INTRODUZA O TERMINAL TELEFÓNICO">
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label style="font-weight: normal;">DATA DE EMISSÃO</label>
                                                    <input type="date" class="form-control" name="data_emissao">
                                                </div>
                                            </div>

                                            <div class="form-row">

                                                <div class="form-group col-md-4">
                                                    <label style="font-weight: normal;">1º OPÇÃO</label>

                                                    <select name="op1" class="form-control">
                                                        <option value="#">CURSO</option>
                                                        <option value="CURSO1">CURSO1</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label style="font-weight: normal;">2ª OPÇÃO</label>
                                                    <select name="op2" class="form-control">
                                                        <option value="#">CURSO</option>
                                                        <option value="CURSO2">CURSO2</option>

                                                    </select>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label style="font-weight: normal;">3ª OPÇÃO</label>
                                                    <select name="op3" class="form-control">
                                                        <option value="#">CURSO</option>
                                                        <option value="CURSO3">CURSO3</option>

                                                    </select>
                                                </div>



                                            </div>


                                            <div class="form-row">

                                                <div class="form-group">
                                                    <label for="bilhet">anexar o bilhete de identidade</label>
                                                    <input type="file" class="form-control-file" name="bilhete">
                                                </div>
                                                <div class="form-group">
                                                    <label for="certificad">anexar o certificado</label>
                                                    <input type="file" class="form-control-file" name="certificado">
                                                </div>


                                            </div>




                                            <input name="estado" type="number" value=0 hidden>




                                            <!-- Change this to a button or input when using this as a form -->

                                            <div class="d-flex justify-content-center">

                                                <button type="submit" class="btn btn-light ">
                                                    Registrar
                                                </button>

                                            </div>

                                            <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a>
                                            -->
                                        </form>
                                    </div>
                                    <div class="modal-footer">

                                    </div>
                                </div>
                            </div>
                        </div>


                    </strong>
                <strong>|</strong>
                    <strong>
                        <a href="{{route('InscResultados')}}">
                            RESULTADOS
                        </a>
                    </strong>
            </div>
        </div>

       <div class="flexb-center position-ref">
              <div class="content">
                <div class="title m-b-md">
                    SIGAIMPNV
                </div>
                  <p class="siga">
                      <strong>
                          Sistema Integrado de Gestão Académica do Instituto Médio Politécnico Nova Vida Nº 2037
                      </strong>
                  </p>
            </div>
        </div>
        <div class="direita">
            <div class="entrar">

                <button type="button" class="btn btn-light" data-toggle="modal" data-target="#loginModal">
                    ENTRAR
                </button>

                <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                   <p class="text-center">LOGIN</p>
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">


                                <form method="POST" action="{{route('logins')}}">
                                    {{csrf_field()}}

                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus required>
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" required>
                                    </div>

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
        </div>
    <script src="/js/app.js"></script>
       </body>
</html>
