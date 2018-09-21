@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <a href="{{route('clients.create')}}" class="btn btn-primary">Criar Usuário</a>
                </div>
                <div class="col-md-6">
                    Client Index
                </div>
            </div>
        </div>
    </div>
    
@endsection