@extends('layouts.front')
@section('title')
    Checkout
@endsection
@section('content')
    <div class="col-lg-10 offset-lg-1" id="checkout">
       {{-- <section>
            <div id="app">
                <div class="row">
                    <div class="col-12 text-center my-6">
                        <h1>Afrekenen</h1>
                    </div>
                </div>
                <div class="accordion " id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    1. Checkout methode
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                @if(\Illuminate\Support\Facades\Auth::check())
                                    <div class="row">
                                        <div class="alert alert-success" role="alert">
                                            You are already logged in!
                                        </div>
                                    </div>
                                @else
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <span class="">Afrekenen als gast of met account</span>
                                            <div class="input-group">
                                                <form class="my-3" method="POST">
                                                    <!-- Group of default radios - option 1 -->
                                                    <div class="form-group custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios">
                                                        <label class="custom-control-label" for="defaultGroupExample1">Gast</label>
                                                    </div>

                                                    <!-- Group of default radios - option 2 -->
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="groupOfDefaultRadios" checked>
                                                        <label class="custom-control-label" for="defaultGroupExample2">Registreer</label>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="btnhover mt-2">Doorgaan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <h3>Inloggen</h3>
                                            <form  method="POST" action="{{route('login')}}" class="my-3">
                                                @method('POST')
                                                @csrf
                                                <div class="form-row">
                                                    <div class="form-group w-100">
                                                        <label for="emailAcc">Email *</label>
                                                        <input type="email" class="form-control" name="email" id="emailAcc" required="">
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group w-100">
                                                        <label for="wwAcc">Wachtwoord *</label>
                                                        <input type="password" class="form-control" name="password" id="wwAcc" required="">
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <span><a href="#" class="text-muted">wachtwoord vergeten</a></span><br>
                                                <input type="submit" class="btnhover mt-4">
                                            </form>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. Factuurgegevens
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <form id="checkoutUserInfo">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="Vnaam">Voornaam *</label>
                                            <input type="text"  class="form-control" id="vnaam" required="" name="Vnaam"
                                                   value="{{Auth::user() ? Auth::user()->first_name : ''}}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="Naam">Naam *</label>
                                            <input type="text" class="form-control" id="naam" name="naam" required="" value="{{Auth::user() ?
                                            Auth::user()
                                            ->last_name
                                            : ''}}">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="Email">Email *</label>
                                            <input type="email" class="form-control" id="Email" required="" value="{{Auth::user() ? Auth::user()->email :
                                            ''}}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="Telefoon">Telefoon/GSM *</label>
                                            <input type="tel" class="form-control" id="Telefoon" required="" value="{{Auth::user() ? Auth::user()
                                            ->phone : ''}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Adres">Straat en huisnummer *</label>
                                        <input type="text" class="form-control" id="adres" required="" value="">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <label for="Postcode">Postcode *</label>
                                            <input type="text" class="form-control" id="postcode" required="">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="Gemeente">Gemeente *</label>
                                            <input type="text" class="form-control" id="gemeente" required="">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Land">Land *</label>
                                            <select id="Land" class="form-control" required="" size="2">
                                                <option value="België" selected="">België</option>
                                                <option value="Nederland">Nederland</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group custom-control custom-checkbox">
                                            <input type="checkbox" value="bewaar" id="factuuradres" class="custom-control-input">
                                            <label for="factuuradres" class="custom-control-label">Bewaar mijn adres voor later</label>
                                        </div>
                                    </div>
                                    <input type="submit" value="doorgaan" name="continueAdres" class="btnhover">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. Shipping methode
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="input-group">
                                    <form class="my-3">
                                        @csrf
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" value="postpunt" name="postpunt"
                                            id="Post">
                                            <label class="custom-control-label" for="Post">Levering bij postpunt (+€3,00)</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" value="huis" name="huis"  id="huis">
                                            <label class="custom-control-label" for="huis">Levering aan huis (+€4,00)</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" value="afhalen" name="afhalen"
                                            id="afhalen">
                                            <label class="custom-control-label" for="afhalen">Afhalen</label>
                                        </div>
                                        <input type="submit" value="doorgaan" name="delivery" class="btnhover">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse5"
                                        aria-expanded="false" aria-controls="collapseThree">
                                    4. Overzicht
                                </button>
                            </h2>
                        </div>
                        <div id="collapse5" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body d-flex flex-column">
                                <form action="{{route('createOrder')}}" method="POST">
                                    @method('POST')
                                    @csrf
                                    <h4><strong>Product(en)</strong></h4>
                                    <select class="classname w-100" name="products[]" multiple>
                                        @foreach($cart as $item)
                                            <option value="{{$item['product_id']}}" readonly selected>{{$item['product_name']}}</option>
                                        @endforeach
                                    </select>
                                    <h4><strong>Prijs</strong></h4>
                                    <input type="text" class="form-control classname" name="prijs" value="{{Session::get('cart')->totalprice}} +
                                    "
                                           readonly />
                                    <h4><strong>Factuurnaam</strong></h4>
                                    <input type="text" class="form-control classname" name="factuurnaam" id="ordername"
                                           value="{{Auth::id()}}" placeholder="" readonly />
                                    <h4><strong>Leveradres</strong></h4>
                                    <input type="text" class="form-control classname" name="leveradres" value="test"
                                           readonly />
                                    <h4><strong>Levermethode</strong></h4>
                                    <input type="text" class="form-control classname" name="levermethode" value="post" readonly />
                                    <input type="submit" class="btnhover" value="Betalen">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>--}}
        <div class="row">
            <div class="col-12 text-center my-6">
                <h1>Afrekenen</h1>
            </div>
        </div>
        <div class="multisteps-form">
            <!--progress bar-->
            <div class="row">
                <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
                    <div class="multisteps-form__progress">
                        <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">Personal Info</button>
                        <button class="multisteps-form__progress-btn" type="button" title="Address">Address</button>
                        <button class="multisteps-form__progress-btn" type="button" title="Order Info">Shipping method</button>
                        <button class="multisteps-form__progress-btn" type="button" title="Order Info">Order Info</button>
                        <button class="multisteps-form__progress-btn" type="button" title="Comments">Comments</button>
                    </div>
                </div>
            </div>
            <!--form panels-->
            <div class="row">
                <div class="col-12 col-lg-8 m-auto">
                    <form class="multisteps-form__form" method="POST" action="{{route('createOrder')}}">
                        @method('POST')
                            @csrf
                        <!--single form panel-->
                        <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                            <h3 class="multisteps-form__title">Your User Info</h3>
                            <div class="multisteps-form__content">
                                <div class="form-row mt-4">
                                    <div class="col-12 col-sm-6">
                                        <input class="multisteps-form__input form-control" type="text" name="first_name" placeholder="First Name"
                                               value="{{Auth::user() ? Auth::user()->first_name : ''}}" required/>
                                    </div>
                                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                        <input class="multisteps-form__input form-control" type="text" name="last_name" placeholder="Last Name"
                                               value="{{Auth::user() ? Auth::user()->last_name : ''}}" required/>
                                    </div>
                                </div>
                                <div class="form-row mt-4">
                                    <div class="col-12 col-sm-6">
                                        <input class="multisteps-form__input form-control" type="email" name="email" placeholder="Email"
                                               value="{{Auth::user() ? Auth::user()->email : ''}}" required/>
                                    </div>
                                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                        <input class="multisteps-form__input form-control" type="tel" name="phone" placeholder="Telephone"
                                               value="{{Auth::user() ? Auth::user()->phone : ''}}" required/>
                                    </div>
                                </div>
                                <div class="button-row d-flex mt-4">
                                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                                </div>
                            </div>
                        </div>
                        <!--single form panel-->
                        <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                            <h3 class="multisteps-form__title">Your Address</h3>
                            <div class="multisteps-form__content">
                                    @if($adress = \App\Adress::where('user_id',Auth::id())->first())
                                            <div class="form-row mt-4">
                                                <div class="col">
                                                    <input class="multisteps-form__input form-control" type="text" name="adress" placeholder="Address 1"
                                                           value="{{$adress->street }}" required/>
                                                </div>
                                            </div>
                                            <div class="form-row mt-4">
                                                <div class="col-12 col-sm-6">
                                                    <input class="multisteps-form__input form-control" type="text" name="city" placeholder="City"
                                                           value="{{$adress->City}}" required/>
                                                </div>
                                                <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                                                    <select class="multisteps-form__select form-control" name="country">
                                                        <option selected="selected">Country...</option>
                                                        <option>België</option>
                                                        <option>Nederland</option>
                                                    </select>
                                                </div>
                                                <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                                                    <input class="multisteps-form__input form-control" name="zip" type="text" placeholder="Zip"
                                                           value="{{$adress->Postal_code}}"/>
                                                </div>
                                            </div>
                                    @else
                                    <div class="form-row mt-4">
                                        <div class="col">
                                            <input class="multisteps-form__input form-control" type="text" name="adress" placeholder="Street +
                                            number"
                                                   value="" required/>
                                        </div>
                                    </div>
                                    <div class="form-row mt-4">
                                        <div class="col-12 col-sm-6">
                                            <input class="multisteps-form__input form-control" type="text" name="city" placeholder="City"
                                                   value="" required/>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                                            <select class="multisteps-form__select form-control" name="country">
                                                <option selected="selected">Country...</option>
                                                <option>België</option>
                                                <option>Nederland</option>
                                            </select>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                                            <input class="multisteps-form__input form-control" name="zip" type="text" placeholder="Zip"
                                                   value=""/>
                                        </div>
                                    </div>
                                    <div class="form-row custom-control custom-checkbox">
                                        <input type="checkbox" value="bewaar" id="factuuradres" name="saveadress" class="custom-control-input">
                                        <label for="factuuradres" class="custom-control-label">Bewaar mijn adres voor later</label>
                                    </div>
                                @endif
                                <div class="button-row d-flex mt-4">
                                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                                </div>
                            </div>

                        </div>
                        <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                                <h3 class="multisteps-form__title">Shipping method</h3>
                                <div class="multisteps-form__content">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" value="postpunt" name="deliver_method"
                                               id="Post">
                                        <label class="custom-control-label" for="Post">Levering bij postpunt (+€3,00)</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" value="huis" name="deliver_method"  id="huis">
                                        <label class="custom-control-label" for="huis">Levering aan huis (+€4,00)</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" value="afhalen" name="deliver_method"
                                               id="afhalen">
                                        <label class="custom-control-label" for="afhalen">Afhalen</label>
                                    </div>
                                    <div class="row">
                                        <div class="button-row d-flex mt-4 col-12">
                                            <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                                            <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!--single form panel-->
                        <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                            <h3 class="multisteps-form__title">Your Order Info</h3>
                            <div class="multisteps-form__content">
                                <div class="row">
                                    @foreach($cart as $item)
                                        <div class="col-12 col-md-6 mt-4">
                                            <div class="card shadow-sm">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{$item['product_name']}}</h5>
                                                    <select hidden name="products[]" id="">
                                                        <option value="{{$item['product_id']}}"></option>
                                                    </select>
                                                    <strong>Price: {{$item['product_price'] * $item['quantity']}}</strong>
                                                    <strong>Quantity: {{$item['quantity']}}</strong>
                                                    <a class="btn btn-outline-primary" target="_blank" href="{{route('productDetailPage',
                                                    \App\Product::findOrFail
                                                    ($item['product_id'])->slug)}}"
                                                       title="Item Link">Item
                                                        Link</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="row">
                                    <div class="button-row d-flex mt-4 col-12">
                                        <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                                        <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--single form panel-->
                        <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                            <h3 class="multisteps-form__title">Additional Comments</h3>
                            <div class="multisteps-form__content">
                                <div class="form-row mt-4">
                                    <textarea class="multisteps-form__textarea form-control" name="comments" placeholder="Additional Comments and
                                    Requirements"></textarea>
                                </div>
                                <div class="button-row d-flex mt-4">
                                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                                    <input class="btn btn-success ml-auto" type="submit"  title="Send" value="send">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
