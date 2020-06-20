@extends('layouts.front')
@section('title')
    Discounts
@endsection
@section('content')
    <section id="shop">
        <div class="col-12 col-lg-10 offset-lg-1 my-6">
            <div class="row">
                <div class="col-lg-10 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-12 mb-4">
                            <form method="post" action="{{route('productsPerPage')}}">
                                @csrf
                                @method('POST')
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Toon artikelen:</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect01" name="qtyproducts">
                                        <option selected>Choose...</option>
                                        <option value="12">12</option>
                                        <option value="24">24</option>
                                        <option value="36">36</option>
                                        <option value="doorlopend">doorlopend</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-filter"></i></button>
                            </form>

                        </div>
                        <div class="col-lg-6 col-12 mb-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect02">Sorteer volgens:</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect02">
                                    <option selected>Choose...</option>
                                    <option value="az">A-Z</option>
                                    <option value="za">Z-A</option>
                                    <option value="prijsoplopend">Prijs oplopend</option>
                                    <option value="prijsaflopend">Prijs aflopend</option>
                                    <option value="leeftijdoplopend">Leeftijd oplopend</option>
                                    <option value="leeftijdaflopend">Leeftijd aflopend</option>
                                </select>
                            </div>
                        </div>
                        @if($discounts)
                            @foreach($discounts as $discount)
                                <div class="col-md-3 col-sm-6 d-flex align-items-stretch">
                                    <article class="product text-center position-relative">
                                        <section class="product-image">
                                            <a href="{{route('productDetailPage',$discount->product->slug)}}">
                                                <img class="pic-1 img-fluid" alt="doos gloomhaven" src="{{asset
                                                ($discount->product->default_image->file)}}">
                                            </a>
                                        </section>
                                        <section class="product-content p-3">
                                            <h3 class="title"><a href="#">{{$discount->product->title}}</a></h3>
                                            <div class="price">
                                                <span>€{{$discount->product->price}}</span>
                                            </div>
                                        </section>
                                        <ul class="social p-0 m-0  d-flex">
                                            <li><a href="" data-toggle="modal"
                                                   data-target="#quickViewProduct{{$product->id}}"
                                                   title="Snel bekijken"
                                                   class="quickView d-flex align-items-center justify-content-center border rounded mx-2 position-relative d-block"><i
                                                        class="fa fa-search"></i></a>
                                            </li>
                                            <li><a href="{{route('addToCart',$discount->id)}}" data-toggle="tooltip" data-placement="bottom" title="Toevoegen aan winkelmand"
                                                   class="text-center border rounded mx-2 position-relative d-block">
                                                    <i class="fa fa-shopping-bag"></i></a></li>
                                        </ul>
                                    </article>
                                </div>
                                <div class="modal fade" id="quickViewProduct{{$product->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel"
                                     aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">{{$product->title}}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <img class="img-fluid" id="modalProductImage" alt="doos gloomhaven"
                                                             src="{{asset($product->default_image->file)}}">
                                                    </div>
                                                    <div class="col-12">
                                                        <h4></h4>
                                                        <p class="description">{!! $product->description !!}</p>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    @if($product->discount != null)
                                                        <p><span class="d-inline"><del>€{{$product->price}} </del></span><span class="ml-3
                                                        prijs
                                                         d-inline">€{{$product->price - ($product->price / 100 *
                                                         $product->discount->percent)}}</span></p>
                                                    @else
                                                        <p class="prijs">€{{$product->price}}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluit</button>
                                                <button type="button" class="btn btn-primary">Bekijk product</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
