@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::open(['route'=>['vendas.update', $venda->IDVENDA], 'method'=>'put']) !!}
    {!! Form::token(); !!}
    <h3 class="form-section">Editar Venda {{$venda->IDVENDA}}#</h3>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('cliente', 'Cliente', ['class' => 'control-label']) !!}
                            {!! Form::select('cliente',
                                $clientes,
                                $venda->FK_IDCLIENTE,
                                [
                                    'placeholder'=> 'Escolha um Cliente',
                                    'class' => 'form-control',
                                    'name'  => 'cliente',
                                ]
                            ) !!}

                            {!! Form::label('colaborador', 'Colaborador', ['class' => 'control-label']) !!}
                            {!! Form::select('colaborador',
                                $colaboradores,
                                $venda->FK_IDCOLABORADOR,
                                [
                                    'placeholder'=> 'Escolha um Colaborador',
                                    'class' => 'form-control',
                                    'name'  => 'colaborador',
                                ]
                            ) !!}

                            {!! Form::label('veiculo', 'Veiculo', ['class' => 'control-label']) !!}
                            {!! Form::select('veiculo',
                                $veiculos,
                                $venda->FK_IDVEICULO,
                                [
                                    'placeholder'=> 'Escolha um Veiculo',
                                    'class' => 'form-control',
                                    'name'  => 'veiculo',
                                ]
                            ) !!}

                            {!! Form::label('tipoVenda', 'Tipo de Pagamento', ['class' => 'control-label']) !!}
                            {!! Form::select('tipoVenda',
                                [
                                    'TRANSFERENCIA' => 'Transferência',
                                    'DEPOSITO' => 'Deposito',
                                    'BOLETO' => 'Boleto',
                                    'DINHEIRO' => 'Dinheiro'
                                ],
                                $venda->TIPO_VENDA,
                                [
                                    'placeholder'=> 'Tipo de Pagamento',
                                    'class' => 'form-control',
                                    'name'  => 'tipoVenda',
                                ]
                            ) !!}
                    </div>
                </div>
                <div class="col-md-4">
                <a href="{{route('vendas.index')}}" class="btn btn-danger">Cancelar</a>
                    {!! Form::submit('Alterar', ['class' => 'btn btn-primary']); !!}
            </div>
        </div>
    </div>
</div>
    {!! Form::close() !!}
@endsection