@extends('layouts.admin')
@section('title')
    User toevoegen
@endsection
@section('content')
    <div class="col-lg-10 offset-lg-1 mb-5">
        @include('includes.form_error')
        <form class="w-100" method="POST" action="{{action('AdminUsersController@update',$user->id)}}">
            @csrf {{--Geeft een hidden token mee zodat injecties niet kunnen gebeuren--}}
            @method('PATCH')
            <div class="card mb-2">
                <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">General</h5>
                <div class="p-2">
                    <div class="form-group position-relative mb-3">
                        <input type="text" class="owninput" name="firstname" value="{{$user->first_name}}"><span class="highlight"></span><span
                            class="bar"></span>
                        <label class="ownlabel">First Name</label>
                    </div>
                    <div class="form-group position-relative mb-3">
                        <input type="text" class="owninput" name="lastname" value="{{$user->last_name}}"><span class="highlight"></span><span
                            class="bar"></span>
                        <label class="ownlabel">Last Name</label>
                    </div>
                    <div class="form-group position-relative mb-3">
                            <input type="number" class="owninput" name="phone" value="{{$user->phone}}"><span class="highlight"></span><span
                            class="bar"></span>
                        <label class="ownlabel">Phone Number</label>
                    </div>

                    <div class="form-group position-relative mb-3">
                        <input type="email" class="owninput" name="email" value="{{$user->email}}"><span class="highlight"></span><span
                            class="bar"></span>
                        <label class="ownlabel">Email</label>
                    </div>
                    <div class="form-group position-relative mb-3">
                        <input type="password" class="owninput" name="password"><span class="highlight"></span><span class="bar"></span>
                        <label class="ownlabel">Password</label>
                    </div>
                    <div class="form-group position-relative mb-3">
                        <select class="owninput" name="roles[]" multiple>
                                @for($i=0; $i < count($roles);$i++)
                                    @if($i < count($user->roles))
                                        @if($roles[$i]->id == $user->roles[$i]->id)
                                            <option selected value="{{$roles[$i]->id}}">{{$roles[$i]->name}}</option>
                                        @else
                                            <option value="{{$roles[$i]->id}}">{{$roles[$i]->name}}</option>
                                        @endif
                                    @else
                                        <option value="{{$roles[$i]->id}}">{{$roles[$i]->name}}</option>
                                    @endif
                                @endfor
                        </select><span class="highlight"></span><span class="bar"></span>
                        <label class="ownlabel">Select the Roles for the user</label>
                    </div>

                    <div class="form-group position-relative mb-3">
                        <select class="owninput" name="is_active">
                            <option value="" disabled selected></option>
                            @if($user->is_active == 1)
                                <option selected value="1">Active</option>
                                <option value="0">Not Active</option>
                            @else
                                <option selected value="0">Not Active</option>
                                <option value="1">Active</option>
                            @endif
                        </select><span class="highlight"></span><span class="bar"></span>
                        <label class="ownlabel">Status</label>
                    </div>
                </div>
                    <div class="row w-100">
                        <div class="col-12">
                            <div class="text-center mb-3">
                                <button class="btn w-sm btn-success waves-effect waves-light" type="submit"><i class="fas fa-plus-circle">Update
                                        User</i></button>
                                <a href="{{route('users.index')}}" class="btn w-sm btn-light waves-effect">Cancel</a>
                            </div>
                        </div> <!-- end col -->
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
