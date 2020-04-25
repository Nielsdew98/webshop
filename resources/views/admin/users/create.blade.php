@extends('layouts.admin')

@section('content')
@section('title')
    User toevoegen
@endsection
    <div class="col-8 offset-2">
        @include('includes.form_error')
        {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store','files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('name', 'Voornaam:') !!}
            {!! Form::text('firstname', null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('name', 'Achternaam:') !!}
            {!! Form::text('lastname', null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('phone', 'Telefoon:') !!}
            {!! Form::number('phone', null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'E-mail:') !!}
            {!! Form::text('email', null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Select roles: (hou de ctrl toets ingedrukt om meerdere roles te selecteren)') !!}
            {!! Form::select('roles[]',$roles , null , ['class'=>'form-control','multiple'=>'multiple']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('is_active', 'Status:') !!}
            {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active') , 0 , ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password',['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create user', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}

    </div>


@endsection
