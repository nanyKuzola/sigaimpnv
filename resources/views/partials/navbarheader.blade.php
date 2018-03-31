<ul class="nav navbar-top-links navbar-right">


    olá
         @if(auth()->guard('estudante')->user())
            {{auth()->guard('estudante')->user()->primeiro_nome}}
        @endif
        @if(auth()->guard('professor')->user())
        {{auth()->guard('professor')->user()->primeiro_nome}}
        @endif
        @if(auth()->guard('fsp')->user())
        {{auth()->guard('fsp')->user()->primeiro_nome}}
        @endif


    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
            <li><a href="{{route('meusPerfis')}}"><i class="fa fa-user fa-fw"></i>Perfil</a>
            </li>

            </li>
            <li class="divider"></li>
            <li><a href="{{route('sair')}}"><i class="fa fa-sign-out fa-fw"></i>sair</a>
            </li>
        </ul>
        <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->
</ul>