<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>

              <!--
                 AQUI VAI O MENNU QUE TIREI
              -->


                <li>
                    <a href="#">Candidatura<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{route('ver_candidatura')}}"><i class="fa fa-user"></i>Ver</a>
                        </li>
                        <li>
                            <a href="#">Coordenador de Area de Formação</a>
                        </li>
                        <li>
                            <a href="#">Coordenador de Curso</a>
                        </li>
                        <li>
                            <a href="#">Coordenador de turno</a>
                        </li>
                        <li>
                            <a href="#">classe</a>
                        </li>
                        <li>
                            <a href="#">Turno</a>
                        </li>
                        <li>
                            <a href="#">Turma</a>
                        </li>
                    </ul>

                </li>
           @can('Director Geral', auth()->user())
                    <li>
                        <a href="#"> Nomear<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-user"></i> Director de turma</a>
                            </li>
                            <li>
                                <a href="#">Coordenador de Area de Formação</a>
                            </li>
                            <li>
                                <a href="#">Coordenador de Curso</a>
                            </li>
                            <li>
                                <a href="#">Coordenador de turno</a>
                            </li>
                            <li>
                                <a href="#">classe</a>
                            </li>
                            <li>
                                <a href="#">Turno</a>
                            </li>
                            <li>
                                <a href="#">Turma</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"> Despacho & Recebimento de documentos<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-user"></i> #</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#">Assinar Certificados<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-user"></i> #</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#">Elaborar Relatório<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-user"></i> #</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#">Agendar Reunião<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-user"></i> #</a>
                            </li>

                        </ul>
                    </li>
            @endcan
            <!--

            -->
        </ul>
    </div>
    <!-- /.sidebar-collapse -->

</div>