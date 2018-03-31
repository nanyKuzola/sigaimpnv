@extends('layouts.master1')

@section('conteudo')
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Sobre Nome</th>
                        <th>Idade</th>
                        <th>Outros</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($inscricoes as $inscricao)


                            <tr>

                                <td>{{$inscricao->id}}</td>
                                <td>{{$inscricao->estudante($inscricao->estudante_id)->primeiro_nome}}</td>
                                <td>{{$inscricao->estudante($inscricao->estudante_id)->sobre_nome}}</td>
                                <td>{{$inscricao->estudante($inscricao->estudante_id)->idade}}</td>

                             </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
@endsection