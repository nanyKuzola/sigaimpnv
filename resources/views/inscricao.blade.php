<!doctype html>
<html lang="{{app()->getLocale()}}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

        <!-- Bootstrap Core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>


        <div class="panel-heading text-center">
            <h3 class="panel-title">FICHA DE INSCRIÇÃO</h3>
        </div>

        <div class="panel-body">

            <form method="POST" action="{{route('candidatoinscricao')}}">
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

                    <div class="form-group col-md-2">
                        <label style="font-weight: normal;">DATA DE NASCIMENTO</label>
                        <input type="date" class="form-control" name="data_nascimento" required>
                    </div>

                    <div class="form-group col-md-2">
                        <label style="font-weight: normal;">B.I Nº</label>
                        <input type="text" class="form-control" name="numero_bilhete" placeholder="Nº DO BILHETE">
                    </div>

                    <div class="form-group col-md-2">
                        <label style="font-weight: normal;">DATA DE EMISSÃO</label>
                        <input type="date" class="form-control" name="data_emissao">
                    </div>
                    <div class="form-group col-md-3">
                        <label style="font-weight: normal;">EMITIDO EM</label>
                        <input type="text" class="form-control" name="local_emissao" placeholder="LOCAL DE EMISSAO">
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
                </div>

                <div class="form-row">

                    <div class="form-group col-md-2">
                        <label style="font-weight: normal;">1º OPÇÃO</label>

                        <select name="op1" class="form-control">
                            <option value="#">CURSO</option>
                            <option value="CURSO1">CURSO1</option>
                        </select>

                    </div>

                    <div class="form-group col-md-2">
                        <label style="font-weight: normal;">2ª OPÇÃO</label>
                        <select name="op2" class="form-control">
                            <option value="#">CURSO</option>
                            <option value="CURSO2">CURSO2</option>

                        </select>
                    </div>

                    <div class="form-group col-md-2">
                        <label style="font-weight: normal;">3ª OPÇÃO</label>
                        <select name="op3" class="form-control">
                            <option value="#">CURSO</option>
                            <option value="CURSO3">CURSO3</option>

                        </select>
                    </div>

                </div>




                <input name="estado" type="number" value=0 hidden>




                <!-- Change this to a button or input when using this as a form -->

                <button type="submit" class="btn btn-lg btn-success btn-block">
                    Registrar
                </button>
                <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a>
                -->
            </form>

        </div>


    </body>
</html>
