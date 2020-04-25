@extends('layouts.admin')
@section('title')
    Categorie bewerken
@endsection
@section('content')
    <div class="col-lg-10 offset-lg-1">
        <h1>Categorie bewerken</h1>
    </div>
    <div class="col-12">
        @include('includes.form_error')
        {!! Form::open(['method'=>'PATCH', 'action'=>['AdminCategoriesController@update', $category->id]]) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', $category->name,['class'=>'form-control']) !!}
        </div>
        <div class="row">
            <div class="form-group">
                {!! Form::submit('Update category', ['class' =>'btn btn-warning']) !!}
                {!! Form::close() !!}
            </div>
            {!! Form::open(['method'=>'DELETE','action'=>['AdminCategoriesController@destroy',$category->id]]) !!}
            <div class="form-group">
                {!! Form::submit('Delete category', ['class' => 'btn btn-danger ml-2']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection

