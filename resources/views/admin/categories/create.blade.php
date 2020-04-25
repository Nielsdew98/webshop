@extends('layouts.admin')
@section('title')
    Categorie toevoegen
@endsection
@section('content')
    @include('includes.form_error')
    {!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Create category', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@endsection
