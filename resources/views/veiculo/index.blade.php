@extends('layouts.app')

@section('content')
    <div class="container text-center">
        
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Tabela de Veiculos</h2>
                <div class="pull-right">
                    <a href="{{route('veiculos.create')}}" class="btn btn-primary">Criar Veiculos</a>
                </div>
                <br>
                <br>
            </div>
            <div class="panel-body">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Marca</th>
                        <th>Nome</th>
                        <th>Placa</th>
                        <th>Modelo</th>
                        <th>Tipo</th>
                        <th>Valor</th>
                        <th>ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($veiculos as $veiculo)
                    <tr>
                        <td>{{$veiculo->IDVEICULO}}</td>
                        <td>{{$veiculo->MARCA}}</td>
                        <td>{{$veiculo->NOME_VEI}}</td>
                        <td>{{$veiculo->PLACA}}</td>
                        <td>{{$veiculo->MODELO}}</td>
                        <td>{{$veiculo->TIPO}}</td>
                        <td>{{$veiculo->VALOR ? 'R$ '.number_format($veiculo->VALOR,2,',','') : ''}}</td>
                        <td>
                        <a href="{{route('veiculos.edit',['id' => $veiculo->IDVEICULO])}}">editar</a> | <a href="{{route('veiculos.delete', ['id' => $veiculo->IDVEICULO])}}">deletar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
    
@endsection
