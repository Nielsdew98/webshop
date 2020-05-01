@extends('layouts.front')
@section('title')
    Shop
@endsection
@section('content')
    <div id="dice" class="my-6 p-5 d-flex align-items-center justify-content-center flex-wrap">
        <div class="dice-box">
            <span class="one-h d-lg-flex align-items-center justify-content-center">W</span>
            <span class="two-e d-lg-flex align-items-center justify-content-center">I</span>
            <span class="three-l d-lg-flex align-items-center justify-content-center">N</span>
            <span class="four-l d-lg-flex align-items-center justify-content-center">K</span>
            <span class="five-o d-lg-flex align-items-center justify-content-center">E</span>
            <span class="six-e d-lg-flex align-items-center justify-content-center">L</span>
        </div>
    </div>
    <section id="shop">
        <div class="col-12 col-lg-10 offset-lg-1">
            <div class="row">
                <div class="col-lg-2 col-12">
                    <button type="button" class="btn btn-primary btn-lg btn-block mb-4 d-md-none" id="filterbutton">filter resultaten</button>
                    <div id="mySidenav" class="sidenav">
                        <a  href="javascript:void(0)" id="closebtn">&times;</a>
                        <div id="accordion" class="mb-4 p-4">
                            <div class="card">
                                <div class="card-header p-0" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Categorieën
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked" name="categorie1" value="horror">
                                            <label class="custom-control-label" for="defaultUnchecked">Horror</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="fantasy" name="categorie2" value="fantasy">
                                            <label class="custom-control-label" for="fantasy">Fantasy</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="sciencefiction" name="categorie3" value="sciencefiction">
                                            <label class="custom-control-label" for="sciencefiction">Science Fiction</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="coöperatief" name="categorie3" value="coöperatief">
                                            <label class="custom-control-label" for="coöperatief">Coöperatief</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header p-0" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Leeftijd
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="01" name="leeftijd1" value="0-1">
                                            <label class="custom-control-label" for="01">0-1 jaar</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="26" name="leeftijd2" value="2-6">
                                            <label class="custom-control-label" for="26">2-6 jaar</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="912" name="leeftijd3" value="6-9">
                                            <label class="custom-control-label" for="912">9-12jaar</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="13" name="leeftijd4" value="13+">
                                            <label class="custom-control-label" for="13">13+ </label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Volwassenen" name="leeftijd5" value="Volwassenen">
                                            <label class="custom-control-label" for="Volwassenen">Volwassenen</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header p-0" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Prijs
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <p class="my-2">
                                            <label for="amount">Price</label>
                                            <input type="text" id="amount" readonly style="border:0">
                                        </p>
                                        <div id="slider-range"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="accordion2" class="mb-4 p-4 d-none d-md-block">
                        <div class="card">
                            <div class="card-header p-0" id="headingOne2">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="true"
                                            aria-controls="collapseOne">
                                        Categorieën
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne2" class="collapse" aria-labelledby="headingOne2" data-parent="#accordion2">
                                <div class="card-body">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked2" name="categorie1"
                                               value="horror">
                                        <label class="custom-control-label" for="defaultUnchecked2">Horror</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="fantasy2" name="categorie2" value="fantasy">
                                        <label class="custom-control-label" for="fantasy2">Fantasy</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="sciencefiction2" name="categorie3"
                                               value="sciencefiction">
                                        <label class="custom-control-label" for="sciencefiction2">Science Fiction</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="coöperatief2" name="categorie3"
                                               value="coöperatief">
                                        <label class="custom-control-label" for="coöperatief2">Coöperatief</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-0" id="headingTwo2">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo2"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                        Leeftijd
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2" data-parent="#accordion2">
                                <div class="card-body">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="012" name="leeftijd1" value="0-1">
                                        <label class="custom-control-label" for="012">0-1 jaar</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="262" name="leeftijd2" value="2-6">
                                        <label class="custom-control-label" for="262">2-6 jaar</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="9122" name="leeftijd3" value="6-9">
                                        <label class="custom-control-label" for="9122">9-12jaar</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="132" name="leeftijd4" value="13+">
                                        <label class="custom-control-label" for="132">13+ </label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Volwassenen2" name="leeftijd5"
                                               value="Volwassenen">
                                        <label class="custom-control-label" for="Volwassenen2">Volwassenen</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-0" id="headingThree2">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree2"
                                            aria-expanded="false" aria-controls="collapseThree">
                                        Prijs
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree2" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <p class="my-2">
                                        <label for="amount">Price</label>
                                        <input type="text" id="amount2" readonly style="border:0">
                                    </p>
                                    <div id="slider-range2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-12 mb-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Toon artikelen:</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option selected>Choose...</option>
                                    <option value="12">12</option>
                                    <option value="24">24</option>
                                    <option value="36">36</option>
                                    <option value="doorlopend">doorlopend</option>
                                </select>
                            </div>
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
                        @if($products)
                            @foreach($products as $product)
                                <div class="col-md-3 col-sm-6">
                                    <article class="product text-center position-relative">
                                        <section class="product-image">
                                            <a href="{{route('productDetailPage',$product->slug)}}">
                                                <img class="pic-1 img-fluid" alt="doos gloomhaven" src="{{asset($product->default_image->file)}}">
                                            </a>
                                        </section>
                                        <section class="product-content p-3">
                                            <h3 class="title"><a href="#">{{$product->title}}</a></h3>
                                            <div class="price">
                                                <span>{{$product->price}}</span>
                                            </div>
                                        </section>
                                        <ul class="social p-0 m-0  d-flex">
                                            <li><a href="" data-producttitle="{{$product->title}}"
                                                   data-productDescription="{{$product->description}}"
                                                   data-toggle="modal"
                                                   data-target="#quickViewProduct"
                                                   data-placement="bottom"
                                                   title="Snel bekijken"
                                                   class="text-center border rounded mx-2 position-relative d-block"><i
                                                        class="fa fa-search"></i></a>
                                            </li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Toevoegen aan winkelmand"
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
                    <button onclick="window.location.href='product.html';" type="button" class="btn btn-primary">Bekijk product</button>
                </div>
            </div>
        </div>
    </div>
@endsection
