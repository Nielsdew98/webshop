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
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old
                        ('email')
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
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password"
                               required
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

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif

                    </div>
                    <button class="btnhover">Login</button>
                </form>
            </div>
            <div class="col-lg-6">
                <h2>Nog geen account? Registreer nu</h2>
                @include('includes.form_error')
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    @method('POST')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Vnaam">Voornaam *</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old
                            ('first_name')}}"  required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Naam">Naam *</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old
                            ('last_name')}}"  required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Email">Email *</label>
                            <input type="email" class="form-control @error('register_email') is-invalid @enderror" value="{{ old('register_email')}}"
                            id="email" name="register_email" required>
                            @error('register_email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Telefoon">Telefoon/GSM *</label>
                            <input type="tel" class="form-control" id="phone" name="phone" value="{{ old
                            ('phone')}}"  required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="ww">Wachtwoord *</label>
                            <input type="password" class="form-control @error('register_password') is-invalid @enderror"  value="{{ old
                            ('register_password')}}" id="ww" name="register_password"
                                   required>
                            @error('register_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="ww2">Wachtwoord herhalen *</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        </div>
                    </div>
                    <button class="btnhover">registreer nu</button>
                </form>
            </div>
        </section>
    </div>
@endsection
