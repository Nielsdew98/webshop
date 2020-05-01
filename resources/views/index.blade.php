@extends('layouts.front')
@section('title')
    BoardGamers Delight
@endsection
@section('content')
{{--    <nav class="navbar home navbar-expand-lg d-flex align-items center">
        <a class="navbar-brand d-flex align-items-center p-0 ml-5" href="index.html">
            <p id="brand" class="text-uppercase">Boardgamers Delight</p>
        </a>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mr-5">
                <li class="nav-item active">
                    <a class="nav-link text-uppercase" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="shop.html">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="contact.html">contact</a>
                </li>
            </ul>
        </div>
    </nav>--}}
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
                <div class="row mx-0">
                    <div class="col-lg-8 my-3">
                        <article class="cube">
                            <div class="foto position-relative">
                                <img class="img-fluid" src="https://placekitten.com/g/800/800" alt="">
                            </div>
                            <div class="producttekst w-100">
                                <header>
                                    <h3>Gloomhaven</h3>
                                </header>
                                <p>€115</p>
                                <button class="btnhover" onclick="window.location.href='product.html';" >Meer info</button>
                            </div>
                        </article>
                    </div>
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
                            <div class="col-12 mt-4">
                                <article class="cube">
                                    <div class="foto position-relative">
                                        <img class="img-fluid" src="https://placekitten.com/g/800/800" alt="">
                                    </div>
                                    <div class="producttekst  w-100">
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
                <div class="row my-3">
                    <div class="col-lg-4">
                        <article class="cube my-3">
                            <div class="foto position-relative ">
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
                    <div class="col-lg-4">
                        <article class="cube my-3">
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
                    <div class="col-lg-4">
                        <article class="cube my-3">
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
        <section id="promoties" class="w-100 mx-0 my-6">
            <div class="col-lg-10 offset-lg-1">
                <h2 class="text-center my-6">Promoties</h2>
                <div class="row bg-white border-primary">
                    <div class="col-lg-6">
                        <img src="images/gloomhaven1.jpg" class="img-fluid" alt="...">
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex flex-column p-3">
                        <h4>Gloomhaven</h4>
                        <p><span class="d-inline"><del>€115 </del></span><span class="ml-3 prijs d-inline">€100,00</span></p>
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
                                <a class="btnhover mr-2">Aan winkelmand toevoegen</a>
                                <a class="btnhover">Ontdek andere promoties</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="instagram" class="w-100 mx-0 mt-6 position-relative">
            <div class="row mx-0">
                <article class="col-lg-3 p-0">
                    <img class="img-fluid" src="https://placekitten.com/400/400" alt="">
                </article>
                <article class="col-lg-3 p-0">
                    <img class="img-fluid" src="https://placekitten.com/400/400" alt="">
                </article>
                <article class="col-lg-3 p-0">
                    <img class="img-fluid" src="https://placekitten.com/400/400" alt="">
                </article>
                <article class="col-lg-3 p-0">
                    <img class="img-fluid" src="https://placekitten.com/400/400" alt="">
                </article>
            </div>
            <div class="absolutemiddle">
                <span id="instagramtekst">
                    @BDBE on instagram<br>
                    <a href="#">Bekijk foto's</a>
                </span>
            </div>
        </section>
        <section id="nieuwsbrief" class="newsletter w-100 mx-0 mb-6 py-6">
            <div class="container">
                <div class="row mx-0">
                    <div class="col-sm-12">
                        <div class="content">
                            <form>
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
