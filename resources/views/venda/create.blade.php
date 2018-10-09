@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::open(['route' => 'vendas.store']) !!}
    {!! Form::token(); !!}
    <h3 class="form-section">Efetuar uma Venda</h3>
    <div class="row">
        <div class="col-md-12">
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('cliente', 'Cliente', ['class' => 'control-label']) !!}
                            {!! Form::select('cliente',
                                $clientes,
                                null,
                                [
                                    'placeholder'=> 'Escolha um Cliente',
                                    'class' => 'form-control',
                                    'name'  => 'cliente',
                                ]
                            ) !!}

                            {!! Form::label('colaborador', 'Colaborador', ['class' => 'control-label']) !!}
                            {!! Form::select('colaborador',
                                $colaboradores,
                                null,
                                [
                                    'placeholder'=> 'Escolha um Colaborador',
                                    'class' => 'form-control',
                                    'name'  => 'colaborador',
                                ]
                            ) !!}

                            {!! Form::label('veiculo', 'Veiculo', ['class' => 'control-label']) !!}
                            {!! Form::select('veiculo',
                                $veiculos,
                                null,
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
                                null,
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
                    {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']); !!}
            </div>
        </div>
    </div>
</div>
    {!! Form::close() !!}
@endsection