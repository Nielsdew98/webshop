@extends('layouts.front')
@section('title')
    Checkout
@endsection
@section('content')
    <div class="col-lg-10 offset-lg-1">
        <section id="checkout">
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
                                                <form class="my-3">
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
                                        </form>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <h3>Inloggen</h3>
                                        <form  class="my-3">
                                            <div class="form-row">
                                                <div class="form-group w-100">
                                                    <label for="emailAcc">Email *</label>
                                                    <input type="email" class="form-control" id="emailAcc" required="">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group w-100">
                                                    <label for="wwAcc">Wachtwoord *</label>
                                                    <input type="password" class="form-control" id="wwAcc" required="">
                                                </div>
                                            </div>
                                            <span><a href="#" class="text-muted">wachtwoord vergeten</a></span><br>
                                            <button class="btnhover mt-4">Inloggen</button>
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
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="Vnaam">Voornaam *</label>
                                        <input type="text" class="form-control" id="Vnaam" required=""
                                               value="{{Auth::user() ? Auth::user()->first_name : ''}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="Naam">Naam *</label>
                                        <input type="text" class="form-control" id="Naam" required="" value="{{Auth::user() ? Auth::user()->last_name
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
                                    <input type="text" class="form-control" id="Adres" required="" value="">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="Postcode">Postcode *</label>
                                        <input type="text" class="form-control" id="Postcode" required="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="Gemeente">Gemeente *</label>
                                        <input type="text" class="form-control" id="Gemeente" required="">
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
                                        <input type="checkbox" id="factuuradres" class="custom-control-input">
                                        <label for="factuuradres" class="custom-control-label">Bewaar mijn adres voor later</label>
                                    </div>
                                </div>
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
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="Post" name="groupOfDefaultRadios">
                                        <label class="custom-control-label" for="Post">Levering bij postpunt (+€3,00)</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="huis" name="groupOfDefaultRadios" checked>
                                        <label class="custom-control-label" for="huis">Levering aan huis (+€4,00)</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="afhalen" name="groupOfDefaultRadios" checked>
                                        <label class="custom-control-label" for="afhalen">Afhalen</label>
                                    </div>
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
                            <h4><strong>Product</strong></h4>
                            <p>Gloomhaven</p>
                            <h4><strong>Factuurnaam</strong></h4>
                            <p>Niels De Witte</p>
                            <h4><strong>Leveradres</strong></h4>
                            <p>Nielsstraat 10 8000 Brugge</p>
                            <h4><strong>Levermethode</strong></h4>
                            <p>Afhalen</p>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapseThree">
                                5. Betaling
                            </button>
                        </h2>
                    </div>
                    <div id="collapse4" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul role="tablist" class="nav bg-light nav-pills rounded-pill nav-fill mb-3">
                                <li class="nav-item">
                                    <a data-toggle="pill" href="#nav-tab-card" class="nav-link active rounded-pill">
                                        <i class="fa fa-credit-card"></i>
                                        Krediet kaart
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="pill" href="#nav-tab-bancontact" class="nav-link rounded-pill">
                                        <i class="fa fa-credit-card"></i>
                                        Bancontact
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="pill" href="#nav-tab-paypal" class="nav-link rounded-pill">
                                        <i class="fab fa-paypal"></i>
                                        Paypal
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="pill" href="#nav-tab-bank" class="nav-link rounded-pill">
                                        <i class="fa fa-university"></i>
                                        Overschrijving
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="nav-tab-card" class="tab-pane fade show active">
                                    <form>
                                        <div class="form-group">
                                            <label for="kaartNaam1">Naam op de kaart</label>
                                            <input type="text" name="kaartNaam" id="kaartNaam1"  required class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="kaartNummer1">Kaartnummer</label>
                                            <div class="input-group">
                                                <input type="text" name="kaartnummer" id="kaartNummer1" placeholder="" class="form-control"
                                                       required>
                                                <div class="input-group-append">
                                                  <span class="input-group-text text-muted">
                                                <i class="fab fa-cc-visa mx-1"></i>
                                                <i class="fab fa-cc-mastercard mx-1"></i>
                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="form-group">
                                                    <label><span class="hidden-xs">Vervaldatum</span></label>
                                                    <div class="input-group">
                                                        <input type="number" placeholder="MM" min="1" max="12" name="maand" class="form-control"
                                                               required>
                                                        <input type="number" placeholder="JJ" min="20" max="40" name="jaar"
                                                               class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group mb-4">
                                                    <label data-toggle="tooltip" title="3 delige code op de achterkant van de kaart">CVV
                                                        <i class="fa fa-question-circle"></i>
                                                    </label>
                                                    <input type="text" required class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm">Betaal</button>
                                    </form>
                                </div>
                                <div id="nav-tab-paypal" class="tab-pane fade">
                                    <p>
                                        <form></form>
                                        <button  type="button" class="btn btn-primary rounded-pill"><i class="fab fa-paypal mr-2"></i> Log into
                                            my Paypal</button>
                                    </p>
                                </div>
                                <div id="nav-tab-bank" class="tab-pane fade">
                                    <h6>Bank account details</h6>
                                    <dl>
                                        <dt>Bank</dt>
                                        <dd>KBC</dd>
                                    </dl>
                                    <dl>
                                        <dt>IBAN</dt>
                                        <dd>BE20 2020 2020 2020</dd>
                                    </dl>
                                    <dl>
                                        <dt> Met gestructureerde mededeling:</dt>
                                        <dd>+++090/9337/55493+++</dd>
                                    </dl>
                                </div>
                                <div id="nav-tab-bancontact" class="tab-pane fade">
                                    <form>
                                        <div class="form-group">
                                            <label for="kaartNaam2">Naam op de kaart</label>
                                            <input type="text" name="kaartNaam" id="kaartNaam2"  required class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <label for="kaartNaam2">Kaartnummer</label>
                                                <input type="text" name="kaartNummer" id="kaartNummer2" placeholder="" class="form-control"
                                                       required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="form-group">
                                                    <label><span class="hidden-xs">Vervaldatum</span></label>
                                                    <div class="input-group">
                                                        <input type="number" placeholder="MM" min="1" max="12" name="maand" class="form-control"
                                                               required>
                                                        <input type="number" placeholder="JJ" min="20" max="40" name="jaar" class="form-control"
                                                               required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm">Betaal</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
