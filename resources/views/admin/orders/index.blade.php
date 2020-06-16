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
                <th scope="row">User</th>
                <th scope="row"> Products</th>
                <th scope="row"> Price</th>
                <th scope="row"> Payment Status</th>
            </tr>
            </thead>
            <tbody>
            @if($orders)
                @foreach($orders as $order)


                @endforeach
            @endif
            </tbody>
        </table>
        {{ $order->links() }}
    </div>

@endsection
