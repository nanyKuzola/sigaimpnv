<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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

        <!-- Styles -->
    <style>
        html, body {

            color: #636b6f;

            font-weight: 100;
            height: 100vh;
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
            text-align: center;
            margin-top: 500px;
            margin-left: 300px;


        }

        .title {
            font-size: 84px;
        }
        .siga {
            font-size: 20px;
            margin-top: -40px;

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
            margin-right: 200px;
            margin-top: 400px;

        }
    </style>
</head>

<body>

<div class="container">

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <div class="login-panel panel panel-default">

                <div class="panel-heading">
                    <h3 class="panel-title text-center">
                        <strong>SIGAIMPNV</strong>
                    </h3>
                </div>

                <div class="panel-body">

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

</body>

</html>