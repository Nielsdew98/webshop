@extends('layouts.front')
@section('title')
    Checkout
@endsection
@section('content')
    <div class="col-lg-10 offset-lg-1 my-6">
        <h1>Thank you for your order</h1>
        <p>Your order id is #1</p>
        <p>We will email you, your order details. You will also get an email when your order is shipped</p>
        <a href="{{route('homepage')}}" class="btnhover">Terug naar homepage</a>
    </div>
@endsection
