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
                                            <li><a href="" data-producttitle="{{$discount->product->title}}"
                                                   data-productDescription="{{$discount->product->description}}"
                                                   data-toggle="modal"
                                                   data-target="#quickViewProduct"
                                                   data-placement="bottom"
                                                   title="Snel bekijken"
                                                   class="text-center border rounded mx-2 position-relative d-block"><i
                                                        class="fa fa-search"></i></a>
                                            </li>
                                            <li><a href="{{route('addToCart',$discount->id)}}" data-toggle="tooltip" data-placement="bottom" title="Toevoegen aan winkelmand"
                                                   class="text-center border rounded mx-2 position-relative d-block">
                                                    <i class="fa fa-shopping-bag"></i></a></li>
                                        </ul>
                                    </article>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <div class="row"></div>
        </div>
    </section>
    <div class="modal fade" id="quickViewProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title modalProductTitle">Gloomhaven</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <img class="img-fluid" id="modalProductImage" alt="doos gloomhaven" src="images/gloomhaven1.jpg">
                        </div>
                        <div class="col-lg-6">
                            <h4>Gloomhaven</h4>
                            <p>Gloomhaven is a game of Euro-inspired tactical combat in a persistent world of shifting motives. Players
                                will take on the role of a wandering adventurer with their own special set of skills and their own reasons for traveling to this dark corner of the world. Players must work together out of necessity to clear out menacing dungeons and forgotten ruins. In the process, they will enhance their abilities with experience and loot, discover new locations to explore and plunder, and expand an ever-branching story fueled by the decisions they make.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluit</button>
                    <button type="button" class="btn btn-primary">Bekijk product</button>
                </div>
            </div>
        </div>
    </div>
@endsection
