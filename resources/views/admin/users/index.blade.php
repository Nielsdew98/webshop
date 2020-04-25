@extends('layouts.admin')
@section('title')
    Alle users
@endsection
@section('content')
    <div class="col-12">
        <a href="{{route('users.create')}}" class="btn btn-primary my-3">Create User</a>
    </div>
    @foreach($users as $user)
        <div class="bg-white border mb-2 p-2 rounded mx-auto col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2
        col-lg-offset-2">
        <div class="row user-row d-flex align-items-center">
            <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1 text-center">
                <i class="fas fa-user"></i>
            </div>
            <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10">
                <strong>{{$user->first_name . " " . $user->last_name}}</strong><br>
                <span class="text-muted">Status:
                    @if($user->deleted_at != null)
                        Not-Active
                    @else
                        Active
                    @endif
                </span>
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 dropdown-user" data-for=".usersinfo{{$user->id}}">
                <i class="mdi mdi-chevron-down text-muted"></i>
            </div>
        </div>
        <div class="row user-infos usersinfo{{$user->id}} mx-auto my-2">
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
                <div class="card">
                    <div class="card-heading bg-primary text-center">
                        <h3 class="card-title text-white">User information</h3>
                    </div>
                    <div class="card-body border-primary">
                        <div class="row">
                            <div class=" mx-auto col-md-9 col-lg-9 hidden-xs hidden-sm">
                                <table class="table table-user-information">
                                    <tbody>
                                    <tr>
                                        <td>User Role:</td>
                                        <td> @foreach($user->roles as $role){{$role->name}}@endforeach</td>
                                    </tr>
                                    <tr>
                                        <td>Registered since:</td>
                                        <td>{{$user->created_at}}</td>
                                    </tr>
                                    <tr>
                                        <td>status</td>
                                        <td>
                                            @if($user->deleted_at != null)
                                                Not-Active
                                            @else
                                                Active
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Orders</td>
                                        <td>15</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-1">
                                <a href="{{route('users.edit',$user->id)}}" class="btn btn-sm btn-warning mb-2 text-white" type="button"
                                   data-original-title="Edit this user"><i class="fa fa-edit"></i></a>
                            </div>
                            <div class="col-1">
                                @if($user->deleted_at != null)
                                    <a href="{{route('admin.userRestore',$user->id)}}" class="btn btn-sm btn-success">
                                        <i class="fas fa-trash-restore"></i></a>
                                @else
                                    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id] ]) !!}
                                    <div class="form-group">
                                        {!! Form::button('<i class="fa fa-trash"></i>', ['class' => 'btn btn-sm btn-danger','type'=>'submit'] ) !!}
                                    </div>
                                    {!! Form::close() !!}
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    @endforeach
@endsection
