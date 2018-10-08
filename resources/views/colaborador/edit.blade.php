@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::open(['route'=>['colaboradores.update', $colaborador->IDCOLABORADOR], 'method'=>'put']) !!}
    {!! Form::token(); !!}
    <h3 class="form-section">Editar Colaborador {{$colaborador->NOME_COLAB}}</h3>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-8">
                <div class="form-group">
                    {!! Form::label( 'nome', 'Nome', [ 'class' => 'control-label' ] ) !!}
                    {!! Form::text( 'nome',$colaborador->NOME_COLAB, [ 'class' => 'form-control' ]) !!}
                    {!! Form::label('setor', 'Setor', ['class' => 'control-label']) !!}
                    {!! Form::select(
                                'setor',
                                [
                                    'VENDAS' => 'Vendas',
                                    'FINANCEIRO' => 'Financeiro',
                                    'ADMINISTRATIVO' => 'Administrativo',
                                ],
                                'setor',
                                ['class' => 'form-control', 'id' => 'setor']
                                ) !!}
                    <hr>
                    <hr>
                    {!! Form::label('sexo', 'Sexo', ['class' => 'control-label']) !!}
                    <label>
                        {!! Form::radio('sexo', 'M', $colaborador->SEXO == 'M' ?true : false) !!}
                        Masculino
                    </label>
                    <label>
                        {!! Form::radio('sexo', 'F', $colaborador->SEXO == 'F' ?true : false) !!}
                        Feminino
                    </label>
                    <hr>
                    {!! Form::label( 'telefone', 'Telefone', [ 'class' => 'control-label' ] ) !!}
                    {!! Form::text( 'telefone',$colaborador->TELEFONE, [ 'class' => 'form-control' ]) !!}

                </div>
                    <a href="{{route('colaboradores.index')}}" class="btn btn-danger">Cancelar</a>
                    {!! Form::submit('Alterar', ['class' => 'btn btn-primary']); !!}
            </div>
        </div>
    </div>
</div>
    {!! Form::close() !!}
@endsection