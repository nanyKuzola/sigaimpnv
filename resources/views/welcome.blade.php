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
                margin-left: 300px;

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

        <div class="#">
            <div class="inscricao">

                    <strong class="plusins">

                        <a href="{{route('formInscricao')}}">
                            INSCRIÇÃO
                        </a>

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
                <strong>
                    <a href="{{route('logins')}}">
                        ENTRAR
                    </a>
                </strong>
            </div>
        </div>
    </body>
</html>
