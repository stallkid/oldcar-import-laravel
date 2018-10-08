@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 100px;">
  <div class="row justify-content-center align-items-center">
        {!! Form::open(['route' => 'users.post.login', 'className' => 'col-6']) !!}
        {!! Form::token() !!}
        <h3 class="form-section">Login</h3>
        <div class="row">
            <div>
                <div class="form-group">
                    {!! Form::label( 'username', 'Email', [ 'class' => 'control-label' ] ) !!}
                    {!! Form::text( 'username','', [ 'class' => 'form-control' ]) !!}

                    {!! Form::label( 'password', 'Password', [ 'class' => 'control-label' ] ) !!}
                    {!! Form::password( 'password', [ 'class' => 'form-control' ]) !!}

                </div>
                    <a href="{{route('users.create')}}" class="btn btn-danger">Registrar</a>
                    {!! Form::submit('Logar', ['class' => 'btn btn-primary']); !!}
            </div>
        </div>
    </div>
</div>
{{-- </div> --}}
    {!! Form::close() !!}
@endsection