@extends('main')

@section('title','|Login')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {!! Form::open() !!}
            {{ Form::label('email','Email:') }}
            {{ Form::email('email',null,['class'=>'form-controll']) }}

            {{ Form::label('password','Password:') }}
            {{ Form::password('password',null,['class'=>'form-controll']) }}

            {{ Form::checkbox('remember') }}{{ Form::label('remember','Remember Me:') }}
            {{ Form::submit('Login') }}
            {!! Form::close() !!}
        </div>
    </div>
@endsection