@extends('layouts.app')

@section('content')

    <div class="container" >
        <div class="col-md-6">
            <h1>Inscription</h1>
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 ">Nom</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('sexe') ? ' has-error' : '' }}">
                    <label for="sexe" class="col-md-4 ">Sexe</label>

                    <div class="col-md-6">
                        <input type="radio" id="femme" name="sexe" value="femme">
                        <label for="femme">Femme</label>
                        <input type="radio" id="homme" name="sexe" value="homme">
                        <label for="homme">Homme</label>


                        @if ($errors->has('sexe'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('sexe') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 ">Adresse mail</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 ">Mot de passe</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 ">Confirmation du mot de passe</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="" name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-link titre">
                            Valider
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <h1>Se connecter</h1>

            <div class="panel-body">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 ">Adresse Mail </label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 ">Mot de passe</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Se souvenir de moi
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-link titre">
                                Valider
                            </button>

                            <a class="btn btn-link titre" href="{{ route('password.request') }}">
                                Mot de passe oublié ?
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
