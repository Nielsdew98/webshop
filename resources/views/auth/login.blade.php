@extends('layouts.front')
@section('title')
    Login pagina
@endsection
@section('content')
    <div class="col-lg-10 offset-lg-1">
        <section id="login" class="w-100 mx-0 my-6 row">
            <div class="col-lg-6">
                <h2>Login</h2>
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    @method('POST')
                    <div class="form-group p-0 w-75 col-12">
                        <label for="emailAcc">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email')
                        }}"
                               required
                               autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group p-0 w-75 col-12">
                        <label for="wwAcc">Wachtwoord</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required
                               autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="form-group custom-control custom-checkbox">
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="custom-control-input">
                                <label for="login" class="custom-control-label">Ingelogd blijven</label>
                            </div>
                        </div>
                        <span><a href="#" class="text-muted">Wachtwoord vergeten</a></span>

                    </div>
                    <button class="btnhover">Login</button>
                </form>
            </div>
            <div class="col-lg-6">
                <h2>Nog geen account? Registreer nu</h2>
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    @method('POST')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Vnaam">Voornaam *</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Naam">Naam *</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Email">Email *</label>
                            <input type="email" class="form-control @error('email_register') is-invalid @enderror" value="{{ old('email_register')}}"
                            id="email" name="register_email" required>
                            @error('email_register')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Telefoon">Telefoon/GSM *</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="ww">Wachtwoord *</label>
                            <input type="text" class="form-control @error('password_register') is-invalid @enderror"  value="{{ old('password_register')}}" id="ww" name="register_password"
                                   required>
                            @error('password_register')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="ww2">Wachtwoord herhalen *</label>
                            <input type="text" class="form-control" id="ww2" name="password2" required>
                        </div>
                    </div>
                    <button class="btnhover">registreer nu</button>
                </form>
            </div>
        </section>
    </div>
@endsection
