@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::open(['route' => 'colaboradores.store']) !!}
    {!! Form::token(); !!}
    <h3 class="form-section">Adicionar Colaborador</h3>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-8">
                <div class="form-group">
                    {!! Form::label( 'nome', 'Nome', [ 'class' => 'control-label' ] ) !!}
                    {!! Form::text( 'nome','', [ 'class' => 'form-control' ]) !!}
                    <hr>
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
                    <a href="{{route('colaboradores.index')}}" class="btn btn-danger">Cancelar</a>
                    {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']); !!}
            </div>
        </div>
    </div>
</div>
    {!! Form::close() !!}
@endsection