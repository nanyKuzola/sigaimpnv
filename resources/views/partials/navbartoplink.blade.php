<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>

              <!--
                 INICIO  SUPER ADMINISTRADOR
              -->
            @if(auth()->guard('fsp')->user()==null)
            @if(auth()->guard('professor')->user()->can('super administrador',auth()->guard('professor')->user()))
                    <li>
                        <a href="#"> Cadastrar <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('cadastrarCurso')}}"><i class="fa fa-table"></i>
                                    <span>Curso</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('cadastrarDisciplina')}}">
                                    <i class="fa fa-sticky-note"></i>
                                    <span>Disciplina</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-sticky-note"></i>
                                    <span>Turno</span>
                                </a>
                            </li>

                        </ul>

                    </li>
                    <li>
                        <a href="#">Visualizar<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-table"></i>
                                    <span>Curso</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-sticky-note"></i>
                                    <span>Disciplina</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-sticky-note"></i>
                                    <span>Turno</span>
                                </a>
                            </li>

                        </ul>

                    </li>
                    <li>
                        <a href="#">Actualizar<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-table"></i>
                                    <span>Curso</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-sticky-note"></i>
                                    <span>Disciplina</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-sticky-note"></i>
                                    <span>Turno</span>
                                </a>
                            </li>

                        </ul>

                    </li>
                    <li>
                        <a href="#">Eliminar<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-table"></i>
                                    <span>Curso</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-sticky-note"></i>
                                    <span>Disciplina</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-sticky-note"></i>
                                    <span>Turno</span>
                                </a>
                            </li>

                        </ul>

                    </li>
            @endif
            @endif
            <!--
                  FIM SUPER ADMINISTRADOR
              -->

            <!--
                  INICIO FUNCIONARIO SECRETARIA PEDAGOGICA
              -->
            @if(auth()->guard('professor')->user()==null)
                    @if(auth()->guard('fsp')->user()->can('secretaria pedagogica',auth()->guard('fsp')->user()))
                        <li>
                            <a href="#">Inscrições<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('ver_inscricoes')}}"><i class="fa fa-table"></i>
                                        <span>
                                            ver
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-sticky-note"></i>
                                        <span> Minhas aprovações</span>
                                    </a>
                                </li>

                            </ul>

                        </li>
                        <li>
                            <a href="#">Reconfirmações<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class="fa fa-table"></i>
                                              <span>
                                                ver
                                            </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-sticky-note"></i>
                                        <span>reconfirmações</span>
                                    </a>
                                </li>

                            </ul>

                        </li>
                    @endif
            @endif
            <!--
                  FIM FUNCIONARIO SECRETARIA PEDAGOGICA
            -->



            <!--
                  INICIO DIRECTOR GERAL
              -->
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
                  FIM DIRECTOR GERAL
              -->
            <!--

            -->
        </ul>
    </div>
    <!-- /.sidebar-collapse -->

</div>