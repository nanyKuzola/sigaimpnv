<ul class="nav navbar-top-links navbar-right">


    olá  {{strtoupper(auth()->user()->perfils()->where('utilizador_id',auth()->user()->id)->first()->nome)}} {{strtoupper(auth()->user()->primeiro_nome)}}
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
            <li><a href="#"><i class="fa fa-user fa-fw"></i>Perfil</a>
            </li>
            <li><a href="#"><i class="fa fa-gear fa-fw"></i>Configurações</a>
            </li>
            <li class="divider"></li>
            <li><a href="{{route('sair')}}"><i class="fa fa-sign-out fa-fw"></i>sair</a>
            </li>
        </ul>
        <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->
</ul>