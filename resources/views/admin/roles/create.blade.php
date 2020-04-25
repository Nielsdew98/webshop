@extends('layouts.admin')
@section('title')
    Role toevoegen
@endsection
@section('content')
    @include('includes.form_error')
    {!! Form::open(['method'=>'POST', 'action'=>'AdminRolesController@store']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Create role', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@endsection
