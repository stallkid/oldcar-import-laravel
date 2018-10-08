@extends('layouts.app')

@section('content')
    <div class="container text-center">
        
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Tabela de Clientes</h2>
                <div class="pull-right">
                    <a href="{{route('clients.create')}}" class="btn btn-primary">Criar Cliente</a>
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
                        <th>Sexo</th>
                        <th>Telefone</th>
                        <th>ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clientes as $cliente)
                    <tr>
                        <td>{{$cliente->IDCLIENTE}}</td>
                        <td>{{$cliente->NOME_CLI}}</td>
                        <td>{{$cliente->SEXO}}</td>
                        <td>{{$cliente->TELEFONE}}</td>
                        <td>
                        <a href="{{route('clients.edit',['id' => $cliente->IDCLIENTE])}}">editar</a> | <a href="{{route('clients.delete', ['id' => $cliente->IDCLIENTE])}}">deletar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
    
@endsection
