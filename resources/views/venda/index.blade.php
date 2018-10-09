@extends('layouts.app')

@section('content')
    <div class="container text-center">
        
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Tabela de Vendas</h2>
                <div class="pull-right">
                    <a href="{{route('vendas.create')}}" class="btn btn-primary">Efetuar Venda</a>
                </div>
                <br>
                <br>
            </div>
            <div class="panel-body">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Cliente</th>
                        <th>Colaborador</th>
                        <th>Marca</th>
                        <th>Nome Veiculo</th>
                        <th>Modelo</th>
                        <th>Placa</th>
                        <th>Pagamento</th>
                        <th>Valor</th>
                        <th>ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vendas as $venda)
                    <tr>
                        <td>{{$venda->IDVENDA}}</td>
                        <td>{{$venda->cliente->NOME_CLI}}</td>
                        <td>{{$venda->colaborador->NOME_COLAB}}</td>
                        <td>{{$venda->veiculo->MARCA}}</td>
                        <td>{{$venda->veiculo->NOME_VEI}}</td>
                        <td>{{$venda->veiculo->MODELO}}</td>
                        <td>{{$venda->veiculo->PLACA}}</td>
                        <td>{{$venda->TIPO_VENDA}}</td>
                        <td>{{$venda->veiculo->VALOR ? 'R$ '.number_format($venda->veiculo->VALOR,2,',','') : ''}}</td>
                        <td>
                        <a href="{{route('vendas.edit',['id' => $venda->IDVENDA])}}">editar</a> | <a href="{{route('vendas.delete', ['id' => $venda->IDVENDA])}}">deletar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
    
@endsection
