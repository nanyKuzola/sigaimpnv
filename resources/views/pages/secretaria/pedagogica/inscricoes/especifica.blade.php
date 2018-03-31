@extends('layouts.master1')

@section('conteudo')

        <div class="content">

            <div class="row">

                <div class="col-lg-12">
                    <h1 class="page-header">FICHA DE INSCRIÇÃO</h1>
                </div>

                <div class="col-md-12">

                    <form method="POST" action="#">

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label style="font-weight: normal;">NOME</label>
                                <input type="text" class="form-control"  value={{$candidato->primeiro_nome}} readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label style="font-weight: normal;">SOBRE NOME</label>
                                <input type="text" class="form-control" value={{$candidato->sobre_nome}} readonly>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label style="font-weight: normal;">NOME DO PAI</label>
                                <input type="text" class="form-control" value={{$candidato->nome_pai}} readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label style="font-weight: normal;">NOME DA MÂE</label>
                                <input type="text" class="form-control" value={{$candidato->nome_mae}} readonly>
                            </div>
                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label style="font-weight: normal;">DATA DE NASCIMENTO

                                </label>
                                <input type="date" class="form-control" value={{$candidato->born_year."-".$candidato->born_month."-".$candidato->born_day}} readonly>

                            </div>

                            <div class="form-group col-md-6">
                                <label style="font-weight: normal;">B.I Nº</label>
                                <input type="text" class="form-control" value={{$candidato->bi}} readonly>
                            </div>



                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label style="font-weight: normal;">EMITIDO EM</label>
                                <input type="text" class="form-control" value={{$candidato->bi_local_emmissao}} readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <label style="font-weight: normal;">SEXO</label>
                                <select name="genero" class="form-control" readonly>
                                    <option>{{$candidato->genero}}</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label style="font-weight: normal;">INSCRIÇÃO FEITA EM</label>
                                <input type="text" value="{{$candidato->inscricao->created_at}}" readonly>
                            </div>
                        </div>
                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label style="font-weight: normal;">TELEMÓVEL</label>
                                <input type="tel" class="form-control" value={{$candidato->telefone}} readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <label style="font-weight: normal;">DATA DE EMISSÃO DO B.I</label>
                                <input type="date" class="form-control" value={{date_format(date_create($candidato->bi_year."-".$candidato->bi_month."-".$candidato->bi_day),"Y/m/d")}} readonly>
                            </div>
                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <label style="font-weight: normal;">1º OPÇÃO</label>

                                <select name="op1" class="form-control" readonly>
                                    <option >{{$candidato->opcao_curso_1}}</option>
                                </select>

                            </div>

                            <div class="form-group col-md-4">
                                <label style="font-weight: normal;">2ª OPÇÃO</label>
                                <select name="op2" class="form-control" readonly>
                                    <option >{{$candidato->opcao_curso_2}}</option>
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <label style="font-weight: normal;">3ª OPÇÃO</label>
                                <select name="op3" class="form-control" readonly>
                                    <option>{{$candidato->opcao_curso_3}}</option>
                                </select>
                            </div>



                        </div>
                        <!-- Change this to a button or input when using this as a form -->


                        <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a>
                        -->
                    </form>

                </div>
            </div>
            <span>

                   <a href="{{route('ver_inscricoes')}}">
                       <i class="fa fa-arrow-left"></i>
                       Voltar
                   </a>

            </span>

        </div>
@endsection
