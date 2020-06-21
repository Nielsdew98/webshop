@extends('layouts.front')
@section('title')
    BoardGamers Delight
@endsection
@section('content')
    <div class="container-fluid text-center px-0">
    <section id="banner" class="position-relative">
        <section id="bannertekst" class="absolutemiddle text-center">
            <h1 id="headeranimatie">
                Welkom bij Boardgamers Delight
            </h1>
        </section>
        <div id="arrow" class="position-absolute w-100 text-center">
            <a href="#dice"><i class="fas fa-chevron-down"></i></a>
        </div>
    </section>
        <div id="dice" class="my-6 p-5 d-flex align-items-center justify-content-center flex-wrap">
            <div class="dice-box">
                <span class="one-h d-lg-flex align-items-center justify-content-center">W</span>
                <span class="two-e d-lg-flex align-items-center justify-content-center">E</span>
                <span class="three-l d-lg-flex align-items-center justify-content-center">L</span>
                <span class="four-l d-lg-flex align-items-center justify-content-center">K</span>
                <span class="five-o d-lg-flex align-items-center justify-content-center">O</span>
                <span class="six-e d-lg-flex align-items-center justify-content-center">M</span>
            </div>
        </div>
        <section id="shipping">
            <div class="row mx-auto">
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 qualities">
                    <div class="border border-secondary p-4 mb-3 shipping rounded">
                        <ul class="list-inline list-unstyled m-0">
                            <li class="list-inline-item text-secondary mb-0">
                                <h3>Gratis verzending <br></h3>
                                <p>Bij aankoop van min. 50 euro</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 qualities">
                    <div class="border border-secondary p-4 mb-3 exchange rounded">
                        <ul class="list-inline list-unstyled m-0">
                            <li class="list-inline-item text-secondary mb-0"><h3>14 dagen bedenktijd</h3></li>
                        </ul>
                    </div>
                </div>
                <!-- ../exchange -->
                <!-- black-friday -->
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 qualities">
                    <div class="border border-secondary p-4 mb-3 black-friday rounded">
                        <ul class="list-inline list-unstyled m-0">
                            <li class="list-inline-item text-secondary mb-0"><h3>Bestelling ophalen na 30 minuten</h3></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="nieuwbinnen" class="w-100 mx-0 my-6">
            <div class="col-lg-10 offset-lg-1">
                <h2 class="text-center my-6">Nieuw Binnen</h2>
                <div class="row mx-0 my-3">
                    @if($newproducts)
                        @foreach($newproducts as $product)
                            <div class="col-lg-4 my-2">
                                <article class="cube w-100 h-100">
                                    <div class="foto position-relative w-100 h-100">
                                        <img class="img-fluid w-100 h-100" alt="{{$product->title}}" src="{{asset($product->default_image->file)}}">
                                    </div>
                                    <div class="producttekst w-100">
                                        <header>
                                            <h3>{{$product->title}}</h3>
                                        </header>
                                        <div class="price">
                                            @if($product->discount != null)
                                                <p><span class="d-inline"><del>€{{$product->price}} </del></span><span class="ml-3
                                                        prijs
                                                         d-inline">€{{round($product->price - ($product->price / 100 *
                                                         $product->discount->percent),2)}}</span></p>
                                            @else
                                                <p class="prijs">€{{$product->price}}</p>
                                            @endif
                                        </div>
                                        <a class="btnhover" href="{{route('productDetailPage',\App\Product::findOrFail($product->id)->slug)}}">Meer info</a>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    @endif
               {{--     @if($newproducts)
                        @for($i=0;$i<count($newproducts);$i++)
                            @if($i = 1)
                                <div class="col-lg-8 my-3">
                                    <article class="cube">
                                        <div class="foto position-relative">
                                            <img class="img-fluid" alt="{{$newproducts[$i]->title}}" src="{{asset($newproducts[$i]->default_image->file)}}">
                                        </div>
                                        <div class="producttekst w-100">
                                            <header>
                                                <h3>{{$newproducts[$i]->title}}</h3>
                                            </header>
                                            <p>{{$newproducts[$i]->price}}</p>
                                            <a class="btnhover" href="{{route('productDetailPage',\App\Product::findOrFail($newproducts[$i]->id)->slug)}}">Meer info</a>
                                        </div>
                                    </article>
                                </div>
                            @elseif($i=1)
                                <div class="col-lg-4 my-3">
                                    <div class="row mx-0">
                                        <div class="col-12">
                                            <article class="cube">
                                                <div class="foto position-relative">
                                                    <img class="img-fluid" src="https://placekitten.com/g/800/800" alt="">
                                                </div>
                                                <div class="producttekst w-100">
                                                    <header>
                                                        <h3>Gloomhaven</h3>
                                                    </header>
                                                    <p>€115</p>
                                                    <button class="btnhover" onclick="window.location.href='product.html';">Meer info</button>
                                                </div>
                                            </article>
                                        </div>
                            @elseif($i = 2)
                                            <div class="col-12 mt-4">
                                                <article class="cube">
                                                    <div class="foto position-relative">
                                                        <img class="img-fluid" src="https://placekitten.com/g/800/800" alt="">
                                                    </div>
                                                    <div class="producttekst w-100">
                                                        <header>
                                                            <h3>Gloomhaven</h3>
                                                        </header>
                                                        <p>€115</p>
                                                        <button class="btnhover" onclick="window.location.href='product.html';">Meer info</button>
                                                    </div>
                                                </article>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endfor
                    @endif--}}
        </section>
        <section id="qoute" class="w-100 mx-0 my-6">
            <h2 id="text">"We don't stop playing because we grow old.<br>
                We grow old because we stop playing."<br>
                -George Bernard Shaw</h2>
        </section>
        <section id="bestsellers" class="w-100 mx-0 my-6">
            <div class="col-lg-10 offset-lg-1">
                <h2 class="text-center my-6">Bestsellers</h2>
                <div class="row d-flex align-items-center mx-0">
                    <div id="carouselExampleControls" class="carousel d-lg-block d-none slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-flex align-items-center">
                                    <article class="col-lg-3 d-flex flex-column">
                                        <img class="img-fluid" src="images/gloomhaven1.jpg" alt="">
                                        <h4>Gloomhaven</h4>
                                        <p>€115</p>
                                    </article>
                                    <article class="col-lg-3 d-flex flex-column">
                                        <img class="img-fluid" src="images/gloomhaven1.jpg" alt="">
                                        <h4>Gloomhaven</h4>
                                        <p>€115</p>
                                    </article>
                                    <article class="col-lg-3 d-flex flex-column">
                                        <img class="img-fluid" src="images/gloomhaven1.jpg" alt="">
                                        <h4>Gloomhaven</h4>
                                        <p>€115</p>
                                    </article>
                                    <article class="col-lg-3 d-flex flex-column">
                                        <img class="img-fluid" src="images/gloomhaven1.jpg" alt="">
                                        <h4>Gloomhaven</h4>
                                        <p>€115</p>
                                    </article>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class=" d-flex align-items-center">
                                    <article class="col-lg-3 d-flex flex-column">
                                        <img class="img-fluid" src="images/gloomhaven1.jpg" alt="">
                                        <h4>Gloomhaven</h4>
                                        <p>€115</p>
                                    </article>
                                    <article class="col-lg-3 d-flex flex-column">
                                        <img class="img-fluid" src="images/gloomhaven1.jpg" alt="">
                                        <h4>Gloomhaven</h4>
                                        <p>€115</p>
                                    </article>
                                    <article class="col-lg-3 d-flex flex-column">
                                        <img class="img-fluid" src="images/gloomhaven1.jpg" alt="">
                                        <h4>Gloomhaven</h4>
                                        <p>€115</p>
                                    </article>
                                    <article class="col-lg-3 d-flex flex-column">
                                        <img class="img-fluid" src="images/gloomhaven1.jpg" alt="">
                                        <h4>Gloomhaven</h4>
                                        <p>€115</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div id="carouselExampleControls2" class="carousel slide d-block d-lg-none" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <article class="col-lg-3 d-flex flex-column position-relative">
                                    <img class="img-fluid" src="images/gloomhaven1.jpg" alt="">
                                    <h4>Gloomhaven</h4>
                                    <p>€115</p>
                                    <div class="overlay">

                                    </div>
                                </article>

                            </div>
                            <div class="carousel-item">
                                <div class=" d-flex align-items-center">
                                    <article class="col-lg-3 d-flex flex-column">
                                        <img class="img-fluid" src="images/gloomhaven1.jpg" alt="">
                                        <h4>Gloomhaven</h4>
                                        <p>€115</p>
                                    </article>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class=" d-flex align-items-center">
                                    <article class="col-lg-3 d-flex flex-column">
                                        <img class="img-fluid" src="images/gloomhaven1.jpg" alt="">
                                        <h4>Gloomhaven</h4>
                                        <p>€115</p>
                                    </article>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class=" d-flex align-items-center">
                                    <article class="col-lg-3 d-flex flex-column">
                                        <img class="img-fluid" src="images/gloomhaven1.jpg" alt="">
                                        <h4>Gloomhaven</h4>
                                        <p>€115</p>
                                    </article>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class=" d-flex align-items-center">
                                    <article class="col-lg-3 d-flex flex-column">
                                        <img class="img-fluid" src="images/gloomhaven1.jpg" alt="">
                                        <h4>Gloomhaven</h4>
                                        <p>€115</p>
                                    </article>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class=" d-flex align-items-center">
                                    <article class="col-lg-3 d-flex flex-column">
                                        <img class="img-fluid" src="images/gloomhaven1.jpg" alt="">
                                        <h4>Gloomhaven</h4>
                                        <p>€115</p>
                                    </article>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class=" d-flex align-items-center">
                                    <article class="col-lg-3 d-flex flex-column">
                                        <img class="img-fluid" src="images/gloomhaven1.jpg" alt="">
                                        <h4>Gloomhaven</h4>
                                        <p>€115</p>
                                    </article>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @if($discount)
            <section id="promoties" class="w-100 mx-0 my-6">
                <div class="col-lg-10 offset-lg-1">
                    <h2 class="text-center my-6">Promoties</h2>
                    <div class="row bg-white border-primary">
                        <div class="col-lg-6">
                            <img src="{{asset($discount->product->default_image->file)}}" class="img-fluid"
                                 alt="{{$discount->product->title}}">
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex flex-column p-3">
                                <h4>{{$discount->product->title}}</h4>
                                <p><span class="d-inline"><del>€{{$discount->product->price}} </del></span><span class="ml-3 prijs
                                d-inline">€{{$discount->product->price - ($discount->product->price / 100 * $discount->percent)}}</span></p>
                                <div>
                                    <ul>
                                        <li class="p-2"><span id="days"></span>days</li>
                                        <li class="p-2"><span id="hours"></span>Hours</li>
                                        <li class="p-2"><span id="minutes"></span>Minutes</li>
                                        <li class="p-2"><span id="seconds"></span>Seconds</li>
                                        <p class="prijs text-center">Profiteer nog snel van deze promotie!</p>
                                    </ul>
                                </div>
                                <div class="row mx-auto">
                                    <a class="btnhover mr-2" href="{{route('addToCart',$discount->product->id)}}">Aan winkelmand toevoegen</a>
                                    <a class="btnhover" href="{{route('discounts')}}">Ontdek andere promoties</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <section id="instagram" class="w-100 mx-0 mt-6 position-relative">
            <div class="row mx-0">
                @if($nonPrivateAccountMedias)
                    @foreach($nonPrivateAccountMedias as $media)
                        <article class="col-lg-3 p-0">
                            <a href="{{$media->getLink()}}">
                                <img class="img-fluid" src="{{$media->getImageHighResolutionUrl()}}" alt="">
                            </a>

                        </article>
                    @endforeach
                @endif
            </div>
            <div class="absolutemiddle">
                <span id="instagramtekst">
                    @boardgamersdbe on instagram<br>
                    <a href="{{url('https://www.instagram.com/boardgamersdbe/')}}">Bekijk foto's</a>
                </span>
            </div>
        </section>
        <section id="nieuwsbrief" class="newsletter w-100 mx-0 mb-6 py-6">
            <div class="container">
                <div class="row mx-0">
                    <div class="col-sm-12">
                        <div class="content">
                            <form method="POST" action="{{route('newsletter')}}">
                                @csrf
                                @method('POST')
                                <h2 class="my-3 text-uppercase">Abonneer je op onze nieuwsbrief</h2>
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Vul hier je email in">
                                    <span class="input-group-btn">
                                    <button class="btnnews" type="submit">Abonneer nu</button>
                                </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


</div>
@endsection
