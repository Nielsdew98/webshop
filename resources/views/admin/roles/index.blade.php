@extends('layouts.admin')
@section('title')
    All Roles
@endsection
@section('content')
    @if(Session::has('deleted_role'))
        <p class="alert alert-success">{{session('deleted_role')}}</p>
    @elseif(Session::has('created_role'))
        <p class="alert alert-success">{{session('created_role')}}</p>
    @elseif(Session::has('updated_role'))
        <p class="alert alert-success">{{session('updated_role')}}</p>
    @elseif(Session::has('restored_role'))
        <p class="alert alert-success">{{session('restored_role')}}</p>
    @endif
    <div class="col-12">
        <a href="{{route('roles.create')}}" class="btn btn-primary my-3">Create role</a>
    </div>
    <div class="col-lg-10 offset-lg-1">
        <table class="table table-dark table-striped rounded">
            <thead>
            <tr>
                <th scope="row">Id</th>
                <th scope="row">role</th>
                <th scope="row">Actions</th>
            </tr>
            </thead>
            <tbody>
            @if($roles)
                @foreach($roles as $role)
                    <tr>
                        <td>{{$role->id}}</td>
                        <td>{{$role-> name}}</td>
                        <td>
                            <a href="{{route('roles.edit',$role->id)}}" class="btn btn-sm btn-warning mb-2 text-white" type="button"
                               data-original-title="Edit this user"><i class="fa fa-edit"></i></a>
                            @if($role->deleted_at != null)
                                <a href="{{route('admin.roleRestore',$role->id)}}" class="btn btn-sm btn-success">
                                    <i class="fas fa-trash-restore"></i></a>
                            @else
                                {!! Form::open(['method'=>'DELETE', 'action'=>['AdminRolesController@destroy', $role->id] ]) !!}
                                <div class="form-group">
                                    {!! Form::button('<i class="fa fa-trash"></i>', ['class' => 'btn btn-sm btn-danger','type'=>'submit'] ) !!}
                                </div>
                                {!! Form::close() !!}
                            @endif

                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
        {{ $roles->links() }}
    </div>

@endsection
