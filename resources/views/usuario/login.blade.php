@extends('layouts.app')

@section('content')
    {!! Form::open(['route' => 'users.post.login']) !!}
    {!! Form::token(); !!}
    <h3 class="form-section">Login</h3>
    <div class="row">
        <div class="col-md-8">
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label( 'username', 'Email', [ 'class' => 'control-label' ] ) !!}
                    {!! Form::text( 'username','', [ 'class' => 'form-control' ]) !!}

                    {!! Form::label( 'password', 'Password', [ 'class' => 'control-label' ] ) !!}
                    {!! Form::password( 'password', [ 'class' => 'form-control' ]) !!}

                </div>
                {!! Form::submit('Logar', ['class' => 'btn btn-primary']); !!}
            </div>
        </div>

    </div>
        

    {!! Form::close() !!}
@endsection