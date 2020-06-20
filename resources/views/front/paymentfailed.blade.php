@extends('layouts.front')
@section('title')
    Checkout
@endsection
@section('content')
    <div class="col-lg-10 offset-lg-1 my-6">
        <h1>Your paymeny has failed</h1>
        <p>Please try again</p>
        <a href="{{route('checkout')}}" class="btnhover">Terug naar checkout</a>
    </div>
@endsection
