@extends('layouts.admin')
@section('title')
    User toevoegen
@endsection
@section('content')
    <div class="col-12">
        <h1>User Bewerken</h1>
    </div>
    <div class="col-12">
        <div class="row">
            <div class="col-8">
                @include('includes.form_error')
                {!! Form::open(['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id],'files'=>true]) !!}
                <div class="form-group">
                    {!! Form::label('first_name', 'First Name:') !!}
                    {!! Form::text('first_name', $user->first_name,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('last_name', 'Last Name:') !!}
                    {!! Form::text('last_name', $user->last_name,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('phone', 'Phone Number:') !!}
                    {!! Form::text('phone', $user->phone,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'E-mail:') !!}
                    {!! Form::text('email', $user->email,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('roles[]', 'Role:') !!}
                    {!! Form::select('roles[]',$roles, $user->roles->pluck('id')->toArray(),
                    ['class'=>'form-control','multiple'=>'multiple'])
                     !!}
                </div>
                <div class="form-group">
                    {!! Form::label('is_active', 'Status:') !!}
                    {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active') , $user->is_active,
                    ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'Password:') !!}
                    {!! Form::password('password',['class'=>'form-control']) !!}
                </div>
                <div class="row">
                    <div class="col-12 d-flex">
                        <div class="form-group mr-3">
                            {!! Form::submit('Update user', ['class' => 'btn btn-warning rounded-0']) !!}
                        </div>
                        {!! Form::close() !!}

                        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id] ]) !!}
                        <div class="form-group">
                            {!! Form::submit('Delete user', ['class' => 'btn btn-danger rounded-0']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
