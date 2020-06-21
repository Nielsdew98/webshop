@extends('layouts.admin')
@section('title')
    All Orders
@endsection
@section('content')
    <div class="col-lg-10 offset-lg-1">
        <table class="table table-dark table-striped rounded">
            <thead>
            <tr>
                <th scope="row">Id</th>
                <th scope="row">User/guest</th>
                <th scope="row">Name</th>
                <th scope="row">email</th>
                <th scope="row"> Products</th>
                <th scope="row"> Price</th>
                <th scope="row"> Payment Status</th>
            </tr>
            </thead>
            <tbody>
            @if($orders)
                @foreach($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>
                            @if($order->user)
                                <strong>User</strong>
                            @else($order->guest)
                                <strong>Guest</strong>
                            @endif
                        </td>
                        <td> <span class="ml-2">{{$order->user ? $order->user->first_name . ' ' .  $order->user->last_name :
                                        $order->guest->first_name . ' ' .  $order->guest->last_name}}</span></td>
                        <td>
                            @if($order->user)
                                <strong>{{$order->user->email}}</strong>
                            @else($order->guest)
                                <strong>{{$order->guest->email}}</strong>
                            @endif
                        </td>
                        <td>
                            @foreach($order->products as $product)
                                <p class="badge badge-pill badge-primary">{{$product->title}}</p>
                            @endforeach
                        </td>
                        <td>{{$order->total_price}}</td>
                        <td>{{$order->payment_status}}</td>
                    </tr>

                @endforeach
            @endif
            </tbody>
        </table>
        {{ $order->links }}
    </div>

@endsection
