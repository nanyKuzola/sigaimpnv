@extends('layouts.master1')

@section('conteudo')
    <!-- /.panel-heading -->
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">INSCRIÇÕES</h1>
            </div>
            <!-- /.col-lg-12 -->

            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Sobre Nome</th>
                            <th>Idade</th>
                            <th>Média</th>
                            <th>Estado</th>
                            <th>Outras Informações</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($inscricoes as $inscricao)


                            <tr>

                                        <td>{{$inscricao->id}}</td>
                                        <td>{{$inscricao->estudante->primeiro_nome}}</td>
                                        <td>{{$inscricao->estudante->sobre_nome}}</td>
                                        <td>{{$inscricao->estudante->idade}}</td>
                                        <td>
                                              @if($inscricao->media == null)
                                                  {{"Não calculada"}}
                                              @else
                                                  {{$inscricao->media}}
                                              @endif

                                        </td>
                                         <td>


                                             @if($inscricao->media == null)
                                                 <a href="#" class="btn btn-secondary btn-sm disabled" role="button" style="color: #a3b0c9;">
                                                     {{$inscricao->estado}}
                                                 </a>
                                             @else
                                                  @if($inscricao->media=!null)
                                                     @if($inscricao->estado=="fechado")
                                                             <a href="#" class="btn btn-danger btn-sm disabled" role="button">
                                                                 {{$inscricao->estado}}
                                                             </a>
                                                         @else
                                                             <a href="{{route('aprovado',['id'=>$inscricao->id])}}" class="btn-secondary btn-sm actived" role="button">
                                                                 {{$inscricao->estado}}
                                                             </a>
                                                         @endif
                                                 @endif

                                             @endif


                                         </td>
                                        <td>

                                                <button type="button" class="btn btn-link">
                                                    <a href="{{route('fichacompleta',['id'=>$inscricao->estudante->id])}}">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                </button>


                                                <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#{{$inscricao->estudante->id}}">
                                                   
                                                        <i class="fa fa-file">
                                                            B.I
                                                        </i>
                                                </button>


                                            <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#{{$inscricao->estudante->id.'s'}}">

                                                <i class="fa fa-file-text-o">
                                                    Certificado
                                                </i>
                                            </button>

                                            @if($inscricao->media == null)
                                                <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#{{$inscricao->estudante->id.'m'}}">

                                                    <i class="fa fa-edit">
                                                        Médias
                                                    </i>
                                                </button>
                                            @endif
                                           





                                       </td>


                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
        </div>
        <!-- /.row -->
        <!-- Trigger the modal with a button -->
                 @foreach($inscricoes as $inscricao)
                     <!-- Modal -->
                         <div id="{{$inscricao->estudante->id}}" class="modal fade" role="dialog">
                             <div class="modal-dialog modal-lg">

                                 <!-- Modal content-->
                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                                         <h4 class="modal-title text-center">BILHETE DE IDENTIDADE</h4>
                                     </div>
                                     <div class="modal-body">

                                         @if($inscricao->estudante->PathBI == null)
                                             <p>
                                                 NÃO ANEXOU BILHETE DE IDENTIDADE
                                             </p>
                                         @else

                                                 <img src="{{ url('storage/estudantes/'.$inscricao->estudante->PathBI)}}" style="max-height: 2800px">

                                         @endif

                                     </div>
                                     <div class="modal-footer">
                                         <button type="button" class="btn btn-default" data-dismiss="modal">FECHAR</button>
                                     </div>
                                 </div>

                             </div>
                         </div>

                         <div id="{{$inscricao->estudante->id.'s'}}" class="modal fade" role="dialog">
                             <div class="modal-dialog modal-lg">

                                 <!-- Modal content-->
                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                                         <h4 class="modal-title text-center">CERTIFICADO DE HABILITAÇÕES</h4>
                                     </div>
                                     <div class="modal-body">

                                         @if($inscricao->estudante->PathCert == null)
                                             <p class="text-center">
                                                 NÃO ANEXOU O CERTIFICADO DE ABILITAÇÕES
                                             </p>
                                         @else

                                             <img src="{{ url('storage/estudantes/'.$inscricao->estudante->PathCert)}}" style="max-height: 2800px">

                                         @endif

                                     </div>
                                     <div class="modal-footer">
                                         <button type="button" class="btn btn-default" data-dismiss="modal">FECHAR</button>
                                     </div>
                                 </div>

                             </div>
                         </div>
                         <div id="{{$inscricao->estudante->id.'m'}}" class="modal fade" role="dialog">
                             <div class="modal-dialog modal-sm">

                                 <!-- Modal content-->
                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                                         <h4 class="modal-title text-center">CALCULO DE MÉDIA</h4>
                                     </div>
                                     <div class="modal-body">

                                       <form method="POST" ACTION="{{route('media',['id'=>$inscricao->id])}}">

                                           {{csrf_field()}}

                                           <div class="form-row">
                                                   <label> 7ª classe</label>
                                                   <div class="col">
                                                       <input type="number" placeholder="matemática" name="mat_7">
                                                   </div>
                                                   <div class="col">
                                                       <input type="number" placeholder="fisica" name="fis_7">
                                                   </div>
                                               <div class="col">
                                                   <input type="number" placeholder="lingua portuguesa" name="lp_7">
                                               </div>
                                               <div class="col">
                                                   <input type="number" placeholder="quimica" name="qm_7">
                                               </div>
                                               <div class="col">
                                                   <input type="number" placeholder="educação elaboral" name="ed_7">
                                               </div>
                                           </div>
                                           <div class="form-row">
                                               <label> 8ª classe</label>
                                               <div class="col">
                                                   <input type="number" placeholder="matemática" name="mat_8">
                                               </div>
                                               <div class="col">
                                                   <input type="number" placeholder="fisica" name="fis_8">
                                               </div>
                                               <div class="col">
                                                   <input type="number" placeholder="lingua portuguesa" name="lp_8">
                                               </div>
                                               <div class="col">
                                                   <input type="number" placeholder="quimica" name="qm_8">
                                               </div>
                                               <div class="col">
                                                   <input type="number" placeholder="educação elabora" name="ed_8">
                                               </div>
                                           </div>
                                           <div class="form-row">
                                               <label> 9ª classe</label>
                                               <div class="col">
                                                   <input type="number" placeholder="matemática" name="mat_9">
                                               </div>
                                               <div class="col">
                                                   <input type="number" placeholder="fisica" name="fis_9">
                                               </div>
                                               <div class="col">
                                                   <input type="number" placeholder="lingua portuguesa" name="lp_9">
                                               </div>
                                               <div class="col">
                                                   <input type="number" placeholder="quimica" name="qm_9">
                                               </div>
                                               <div class="col">
                                                   <input type="number" placeholder="educação elaboral" name="ed_9">
                                               </div>
                                           </div>
                                           <div class="d-flex justify-content-center">

                                               <span>

                                               </span>
                                               <button type="submit" class="btn btn-light ">
                                                   CALCULAR
                                               </button>

                                           </div>

                                       </form>

                                     </div>
                                     <div class="modal-footer">
                                         <button type="button" class="btn btn-default" data-dismiss="modal">FECHAR</button>
                                     </div>
                                 </div>

                             </div>
                         </div>


                 @endforeach

    @foreach($inscricoes as $inscricao)
        <!-- Modal -->


        @endforeach




    </div>

    <!-- /.panel-body -->
@endsection