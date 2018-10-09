@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::open(['route'=>['veiculos.update', $veiculo->IDVEICULO], 'method'=>'put']) !!}
    {!! Form::token(); !!}
    <h3 class="form-section">Editar Cliente {{$veiculo->IDVEICULO}}#</h3>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label( 'marca', 'Marca', [ 'class' => 'control-label' ] ) !!}
                        {!! Form::text( 'marca',$veiculo->MARCA, [ 'class' => 'form-control' ]) !!}
                        {{-- <hr> --}}
                        {!! Form::label( 'nome', 'Nome', [ 'class' => 'control-label' ] ) !!}
                        {!! Form::text( 'nome',$veiculo->NOME_VEI, [ 'class' => 'form-control' ]) !!}
                        {{-- <hr> --}}
                    </div>
                </div>
            <div class="col-md-4">
                    {!! Form::label( 'placa', 'Placa', [ 'class' => 'control-label' ] ) !!}
                    {!! Form::text( 'placa',$veiculo->PLACA, [ 'class' => 'form-control' ]) !!}
                    {{-- <hr> --}}
                    {!! Form::label( 'modelo', 'Modelo', [ 'class' => 'control-label' ] ) !!}
                    {!! Form::text( 'modelo',$veiculo->MODELO, [ 'class' => 'form-control' ]) !!}
                    {{-- <hr> --}}
            </div>
            <div class="col-md-4">
                    {!! Form::label( 'tipo', 'Tipo', [ 'class' => 'control-label' ] ) !!}
                    {!! Form::text( 'tipo',$veiculo->TIPO, [ 'class' => 'form-control' ]) !!}
                    {{-- <hr> --}}
                    {!! Form::label( 'valor', 'Valor', [ 'class' => 'control-label' ] ) !!}
                    {!! Form::text( 'valor',$veiculo->VALOR, [ 'class' => 'form-control' ]) !!}
            </div>
            <hr>
            <div class="col-md-4">
                <a href="{{route('veiculos.index')}}" class="btn btn-danger">Cancelar</a>
                    {!! Form::submit('Atualizar', ['class' => 'btn btn-primary']); !!}
            </div>
        </div>
    </div>
</div>
    {!! Form::close() !!}
@endsection