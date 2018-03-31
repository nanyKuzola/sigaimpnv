@extends('layouts.master1')

@section('conteudo')
        <div class="container">

            <div class="modal-body">

                <form method="POST" action="{{route('candidatoinscricao')}}">
                    {{csrf_field()}}

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label style="font-weight: normal;">NOME</label>
                            <input type="text" class="form-control" name="nome" value=" {{auth()->guard('estudante')->user()->primeiro_nome}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label style="font-weight: normal;">SOBRE NOME</label>
                            <input type="text" class="form-control" name="sobre_nome" value=" {{auth()->guard('estudante')->user()->sobre_nome}}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label style="font-weight: normal;">NOME DO PAI</label>
                            <input type="text" class="form-control" name="nome_pai" value=" {{auth()->guard('estudante')->user()->nome_pai}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label style="font-weight: normal;">NOME DA MÂE</label>
                            <input type="text" class="form-control" name="nome_mae" value=" {{auth()->guard('estudante')->user()->nome_mae}}">
                        </div>
                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label style="font-weight: normal;">DATA DE NASCIMENTO</label>
                            <input type="date" class="form-control" name="data_nascimento" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label style="font-weight: normal;">B.I Nº</label>
                            <input type="text" class="form-control" name="numero_bilhete" value=" {{auth()->guard('estudante')->user()->bi}}">
                        </div>



                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label style="font-weight: normal;">EMITIDO EM</label>
                            <input type="text" class="form-control" name="local_emissao" value="{{auth()->guard('estudante')->user()->bi_local_emmissao}}">
                        </div>
                        <div class="form-group col-md-4">
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
                            <input type="tel" class="form-control" name="telemovel" value="{{auth()->guard('estudante')->user()->telefone}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label style="font-weight: normal;">DATA DE EMISSÃO</label>
                            <input type="date" class="form-control" name="data_emissao">
                        </div>
                    </div>






                    <input name="estado" type="number" value=0 hidden>




                    <!-- Change this to a button or input when using this as a form -->

                    <button type="submit" class="btn btn-lg btn-success btn-block">
                        actualizar
                    </button>
                    <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a>
                    -->
                </form>
            </div>


        </div>
@endsection
