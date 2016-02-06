@extends('vergo_base::layouts.template')
{{-- Content --}}
@section('content')

    @if($message)
        <div class="alert {{(!isset($error) ? 'alert-danger' : 'alert-success')}} vergo_message">
            <strong>Предупреждение!</strong><br/>{{$message}}
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Registration</h2>
            </div>
            <div class="col-lg-12">
                {!! Form::open(['method'=>"POST",'role'=>'form']) !!}
                <div class="form-group">
                    {!! Form::label('login','Login',['class'=>'awesome']) !!}
                    {!! Form::text('login','',['class'=>'form-control','required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('first_name','First Name',['class'=>'awesome']) !!}
                    {!! Form::text('first_name','',['class'=>'form-control','required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('last_name','Last Name',['class'=>'awesome']) !!}
                    {!! Form::text('last_name','',['class'=>'form-control','required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email','Email address',['class'=>'awesome']) !!}
                    {!! Form::email('email','',['class'=>'form-control','required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password','Password',['class'=>'awesome']) !!}
                    {!! Form::password('password',['class'=>'form-control','required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password','Password again',['class'=>'awesome']) !!}
                    {!! Form::password('password-confirmation',['class'=>'form-control','required']) !!}
                </div>
                {!! Form::submit('Register',['class'=>'btn btn-dark']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop