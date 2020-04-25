@extends('layouts.admin')
@section('title')
    Alle Medias
@endsection
@section('content')
    <div class="col-lg-10 offset-lg-1">
        @include('includes.form_error')
        {!! Form::open(['method'=>'PATCH', 'action'=>['AdminMediasController@update', $photo->id]]) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::file('image',['class'=>'form-control']) !!}
        </div>
        <div class="row">
            <div class="form-group">
                {!! Form::submit('Update photo', ['class' =>'btn btn-warning']) !!}
                {!! Form::close() !!}
            </div>
            {!! Form::open(['method'=>'DELETE','action'=>['AdminMediasController@destroy',$photo->id]]) !!}
            <div class="form-group">
                {!! Form::submit('Delete photo', ['class' => 'btn btn-danger ml-2']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>


@endsection
