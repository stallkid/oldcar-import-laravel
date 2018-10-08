@extends('layouts.app')

@section('content')
    <div class="container text-center">
        
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Tabela de Colaboradores</h2>
                <div class="pull-right">
                    <a href="{{route('colaboradores.create')}}" class="btn btn-primary">Criar Colaborador</a>
                </div>
                <br>
                <br>
            </div>
            <div class="panel-body">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Setor</th>
                        <th>Sexo</th>
                        <th>Telefone</th>
                        <th>ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($colaboradores as $colaborador)
                    <tr>
                        <td>{{$colaborador->IDCOLABORADOR}}</td>
                        <td>{{$colaborador->NOME_COLAB}}</td>
                        <td>{{$colaborador->SETOR}}</td>
                        <td>{{$colaborador->SEXO}}</td>
                        <td>{{$colaborador->TELEFONE}}</td>
                        <td>
                        <a href="{{route('colaboradores.edit',['id' => $colaborador->IDCOLABORADOR])}}">editar</a> | <a href="{{route('colaboradores.delete', ['id' => $colaborador->IDCOLABORADOR])}}">deletar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
    
@endsection
