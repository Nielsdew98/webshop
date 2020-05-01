@extends('layouts.front')
@section('title')

@endsection
@section('content')
    <section id="product" class="col-lg-10 offset-lg-1 my-6 row">
        <div class="col-lg-6">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset($product->default_image->file)}}" alt="" class="w-100">
                    </div>
                    @if($product->detail_images)
                        @foreach($product->detail_images as $detail)
                            <div class="carousel-item">
                                <img src="{{asset($detail->file)}}" data-slide="{{$detail->id}}" alt="" class="w-100">
                            </div>
                         @endforeach
                    @endif
                </div>
                <div class="row my-4">
                    @if($product->photos)
                        @foreach($product->photos as $photo)
                            <div class="col-3">
                                <img src="{{asset($photo->file)}}" alt="" class="w-100 img-fluid img-thumbnail"
                                     data-target="#carouselExampleIndicators"
                                     data-slide-to="{{($photo->id)-1}}">
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <article class="d-flex flex-column text-left">
                <header>
                    <h1>{{$product->title}}</h1>
                </header>
                <p>{{$product ->short_description}}<br><br>
                    <span><a href="#accordion" data-toggle="collapse" data-target="#collapseOne" class="text-uppercase text-primary">Lees
                                meer</a></span></p>
                <span class="prijs my-4">{{$product->price}}</span>
                @if($product->stock->stock > 0)
                    <span class="text-success"> Product is leverbaar <i class="fas fa-smile"></i></span>
                    <div class="row align-items-center my-5">
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Aantal</span>
                                </div>
                                <input type="number" class="form-control"  aria-label="Username" name="hoevelheid" min="1" max="10"
                                       aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-6">
                            <button class="btnhover" onclick="window.location.href='winkelmand.html';">Aan winkelmand toevoegen</button>
                        </div>
                    </div>
                @else
                    <span class="text-danger"> Product niet meer leverbaar <i class="fas fa-sad-cry"></i></span>
                @endif

                <div id="accordion" class="mb-4 p-4">
                    <div class="card">
                        <div class="card-header p-0" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Beschrijving
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                   {{$product->description}}
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-0" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Awards
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <ul class="list-group">
                                    @if($product->awards)
                                        @foreach($product->awards as $award)
                                            <li class="list-group-item bg-transparent">{{$award->year}} | {{$award->name}}</li>
                                         @endforeach
                                     @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-0" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Reviews
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <h4>My awesome review</h4>
                                <div class="ratebox text-center" data-id="0" data-rating="5"></div>
                                <p class="review-text">My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. </p>
                                <small class="review-date">March 26, 2017</small>
                            </div>
                            @if(\Illuminate\Support\Facades\Auth::check())
                            <button class="btn btn-primary" data-toggle="modal" data-target="#reviewModal" data-item-id="{{$product->id}}">Schrijf
                                een
                                review</button>
                            @endif

                        </div>
                    </div>
                </div>
            </article>
            <div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Review</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="POST" action="{{action('AdminReviewsController@store')}}">
                            @csrf
                            @method('POST')
                        <div class="modal-body">
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <input type="text" name="reviewTitle" id="reviewTitel" class="form-control" required=""
                                               placeholder="Titel review">
                                    </div>
                                    <div class="form-group col-12 d-none">
                                        <input type="text" name="product_id" value="{{$product->id}}">
                                </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <textarea name="reviewBody" id="review" class="form-control" required="" placeholder="Review"></textarea>
                                    </div>
                                </div>
                            <div class="rate">
                                <input type="radio" id="star5" name="rate" value="5" />
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" id="star4" name="rate" value="4" />
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" name="rate" value="3" />
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" name="rate" value="2" />
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" name="rate" value="1" />
                                <label for="star1" title="text">1 star</label>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluit</button>
                            <button type="submit" class="btn btn-primary">Opslaan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
