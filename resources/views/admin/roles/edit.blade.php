@extends('layouts.admin')
@section('title')
    Role bewerken
@endsection
@section('content')
    <div class="col-12">
        <h1>Role bewerken</h1>
    </div>
    <div class="col-12">
        @include('includes.form_error')
        {!! Form::open(['method'=>'PATCH', 'action'=>['AdminRolesController@update', $role->id]]) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', $role->name,['class'=>'form-control']) !!}
        </div>
        <div class="row">
            <div class="form-group">
                {!! Form::submit('Update role', ['class' =>'btn btn-warning']) !!}
                {!! Form::close() !!}
            </div>
            {!! Form::open(['method'=>'DELETE','action'=>['AdminRolesController@destroy',$role->id]]) !!}
            <div class="form-group">
                {!! Form::submit('Delete role', ['class' => 'btn btn-danger ml-2']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection
