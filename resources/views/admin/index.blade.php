@extends('layouts.admin')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-6">
            <div class="card p-2">
                <h4 class="header-title mb-3">Transaction History</h4>

                <div class="table-responsive">
                    <table class="table table-centered table-hover mb-0">
                        <thead>
                        <tr>
                            <th class="border-top-0">Name</th>
                            <th class="border-top-0">Status</th>
                            <th class="border-top-0">User/Guest</th>
                            <th class="border-top-0">Date</th>
                            <th class="border-top-0">Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($orders)
                            @foreach($orders as $order)
                                <tr>
                                    <td>
                                        <span class="ml-2">{{$order->user ? $order->user->first_name . ' ' .  $order->user->last_name :
                                        $order->guest->first_name . ' ' .  $order->guest->last_name}}</span>
                                    </td>
                                    <td>
                                         <span class="ml-2">
                                             @if($order->payment_status == "in behandeling")
                                                <p class="badge badge-pill badge-warning mx-1">{{$order->payment_status}}</p>
                                             @elseif($order->payment_status == "paid")
                                                 <p class="badge badge-pill badge-success mx-1">{{$order->payment_status}}</p>
                                              @endif
                                         </span>
                                    </td>
                                    <td>
                                        @if($order->user)
                                            <strong>User</strong>
                                        @else($order->guest)
                                            <strong>Guest</strong>
                                        @endif
                                    </td>
                                    <td>{{$order->created_at}}</td>
                                    <td>€{{$order->total_price}}</td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div> <!-- end table-responsive -->

            </div> <!-- end card-box-->
        </div> <!-- end col-->
        <div class="col-xl-6">
            <div class="card p-2">
                <h4 class="header-title mb-3">Recent Products</h4>

                <div class="table-responsive">
                    <table class="table table-centered table-hover mb-0">
                        <thead>
                        <tr>
                            <th class="border-top-0">Product</th>
                            <th class="border-top-0">Category</th>
                            <th class="border-top-0">Added Date</th>
                            <th class="border-top-0">Amount</th>
                            <th class="border-top-0">Status</th>
                        </tr>
                        </thead>
                        <tbody>

                            @if($products)
                                @foreach($products as $product)
                                    <tr>
                                        <td>
                                            <img src="{{asset($product->default_image->file)}}" alt="product-pic" height="36" />
                                        </td>
                                        <td>
                                         <span class="ml-2">
                                                @foreach ($product->categories as $category)
                                                 <p class="badge badge-pill badge-success mx-1">{{$category->name}}</p>
                                             @endforeach
                                            </span>
                                        </td>
                                        <td>{{$product->created_at}}</td>
                                        <td>€{{$product->price}}</td>
                                        <td>
                                            @if($product->deleted_at != null)
                                                <span class="badge bg-soft-danger text-success shadow-none">Not-Active</span>
                                            @else
                                                <span class="badge bg-soft-success text-success shadow-none">Active</span>
                                            @endif

                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div> <!-- end table-responsive -->
            </div> <!-- end card-box-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->
@endsection
