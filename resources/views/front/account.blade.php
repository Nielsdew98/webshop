@extends('layouts.front')
@section('title')
    Checkout
@endsection
@section('content')
    <section class="col-lg-10 offset-lg-1" id="profile">
        <div class="col-12 my-5">
            <div class="bg-white border mb-2 p-2 rounded mx-auto col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2
        col-lg-offset-2">
                <div class="row user-infos mx-auto my-2">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-heading black text-center">
                                <h3 class="card-title oranje">User information</h3>
                            </div>
                            <div class="card-body border-primary">
                                <div class="row">
                                    <div class="mx-auto col-md-9 col-lg-9 hidden-xs hidden-sm">
                                        <table class="table table-user-information">
                                            <tbody>
                                            <tr>
                                                <td>Name:</td>
                                                <td>{{$user->first_name . ' ' . $user->last_name}}</td>
                                            </tr>
                                            <tr>
                                                <td>Email:</td>
                                                <td>{{$user->email}}</td>
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
                                                <td>{{count($user->orders)}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
