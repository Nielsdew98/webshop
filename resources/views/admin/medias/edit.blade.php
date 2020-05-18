@extends('layouts.admin')
@section('title')
    Alle Medias
@endsection
@section('content')
    <div class="col-lg-10 offset-lg-1">
        @include('includes.form_error')
        <div class="row">
            <div class="col-6">
                <img src="{{asset($photo->file)}}" class="img-fluid" alt="">
            </div>
            <div class="col-6">
                {!! Form::open(['method'=>'PATCH', 'action'=>['AdminMediasController@update', $photo->id]]) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::file('image',['class'=>'form-control']) !!}
                    {!! Form::submit('Update photo', ['class' =>'btn btn-warning mt-3']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>

        <div class="row">
            <div class="form-group">

            </div>
            {!! Form::open(['method'=>'DELETE','action'=>['AdminMediasController@destroy',$photo->id]]) !!}
            <div class="form-group">
                {!! Form::submit('Delete photo', ['class' => 'btn btn-danger ml-2  mt-3']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>


@endsection
