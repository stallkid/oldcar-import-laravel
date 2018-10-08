@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::open(['route'=>['clients.update', $cliente->IDCLIENTE], 'method'=>'put']) !!}
    {!! Form::token(); !!}
    <h3 class="form-section">Editar Cliente {{$cliente->NOME_CLI}}</h3>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-8">
                <div class="form-group">
                    {!! Form::label( 'nome', 'Nome', [ 'class' => 'control-label' ] ) !!}
                    {!! Form::text( 'nome',$cliente->NOME_CLI, [ 'class' => 'form-control' ]) !!}
                    <hr>
                    {!! Form::label('sexo', 'Sexo', ['class' => 'control-label']) !!}
                    <label>
                        {!! Form::radio('sexo', 'M', $cliente->SEXO == 'M' ?true : false) !!}
                        Masculino
                    </label>
                    <label>
                        {!! Form::radio('sexo', 'F', $cliente->SEXO == 'F' ?true : false) !!}
                        Feminino
                    </label>
                    <hr>
                    {!! Form::label( 'telefone', 'Telefone', [ 'class' => 'control-label' ] ) !!}
                    {!! Form::text( 'telefone',$cliente->TELEFONE, [ 'class' => 'form-control' ]) !!}

                </div>
                    <a href="{{route('clients.index')}}" class="btn btn-danger">Cancelar</a>
                    {!! Form::submit('Alterar', ['class' => 'btn btn-primary']); !!}
            </div>
        </div>
    </div>
</div>
    {!! Form::close() !!}
@endsection