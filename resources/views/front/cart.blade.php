@extends('layouts.front')
@section('title')
    Cart
@endsection
@section('content')
    <section id="winkelwagen" class="col-lg-10 offset-lg-1">
        <div class="col-12 text-center my-6">
            <h2>Winkelwagen</h2>
        </div>
        <article class="row align-items-center">
            <div class="card shopping-cart w-100">
                <div class="card-header zwart text-light d-flex align-items-center justify-content-between">
                    <span><i class="fa fa-shopping-bag mr-2" aria-hidden="true"></i>Winkelmandje</span>
                    <a href="{{route('shopPage')}}" class="btn btn-outline-info btn-sm">Verder winkelen</a>
                </div>
                <div class="card-body">
                    <!-- PRODUCT -->
                    @foreach($cart as $item)
                        <div class="row">
                            <div class="col-12 col-md-2 text-center">
                                <img class="img-fluid" src="{{asset($item['product_image'])}}" alt="" width="120" height="80">
                            </div>
                            <div class="col-12 text-sm-center text-md-left col-md-6">
                                <h4><strong>{{$item['product_name']}}</strong></h4>
                                <h4>
                                    <small>{{Str::limit($item['product_description'],200,'(..)')}}</small>
                                </h4>
                            </div>
                            <div class="col-12 text-sm-center col-md-4 text-md-right row align-items-center">
                                <div class="col-4 col-md-6 text-md-right">
                                    <h6><strong>€{{$item['product_price']}} <span class="text-muted">x</span></strong></h6>
                                </div>
                                <div class="col-4">
                                    <div class="hoeveelheid">
                                        <form method="POST" action="{{action('Frontendcontroller@updateQuantity')}}">
                                            @csrf
                                            @method('POST')
                                            <div class="form-group row">
                                                <input type="number" step="1" max="99" min="1" value="{{$item['quantity']}}" name="quantity"
                                                       title="hoeveelheid"  class="hoeveelheid">
                                                <input class="form-control form-control-sm" type="hidden" name="id"
                                                       value="{{$item['product_id']}}">
                                                <button type="submit" class="btn btn-outline-secondary">
                                                    Update
                                                </button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <div class="col-2 text-right">
                                    <a href="{{route('removeItem',$item['product_id'])}}" class="btn btn-outline-danger btn-xs">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <hr>
                     @endforeach
                </div>
                <div class="card-footer">
                    <div class="coupon pl-0">
                        <div class="row">
                            <div class="col-6 col-lg-3 p-2">
                                <input type="text" class="form-control" placeholder="Kortingscode">
                            </div>
                            <div class="col-6 col-lg-3 p-2">
                                <input type="submit" class="btn btn-default btn-outline-secondary" value="Coupon toepassen">
                            </div>
                            <div class="col-6 col-lg-3 mt-md-2 text-right">
                                <span class="mr-5">Totaal prijs: <b>€{{Session::get('cart')->totalprice}}</b></span>
                            </div>
                            <div class="col-6 col-lg-3 text-right">
                                <a href="checkout.html" class="btn btn-success">Afrekenen</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
@endsection
