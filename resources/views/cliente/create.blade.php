@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::open(['route' => 'clients.store']) !!}
    {!! Form::token(); !!}
    <h3 class="form-section">Adicionar Usuário</h3>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-8">
                <div class="form-group">
                    {!! Form::label( 'nome', 'Nome', [ 'class' => 'control-label' ] ) !!}
                    {!! Form::text( 'nome','', [ 'class' => 'form-control' ]) !!}
                    <hr>
                    {!! Form::label('sexo', 'Sexo', ['class' => 'control-label']) !!}
                    <label>
                        {!! Form::radio('sexo', 'M', true) !!}
                        Masculino
                    </label>
                    <label>
                        {!! Form::radio('sexo', 'F') !!}
                        Feminino
                    </label>
                    <hr>
                    {!! Form::label( 'telefone', 'Telefone', [ 'class' => 'control-label' ] ) !!}
                    {!! Form::text( 'telefone','', [ 'class' => 'form-control' ]) !!}

                </div>
                    <a href="{{route('clients.index')}}" class="btn btn-danger">Cancelar</a>
                    {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']); !!}
            </div>
        </div>
    </div>
</div>
    {!! Form::close() !!}
@endsection