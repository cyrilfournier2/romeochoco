@extends('layouts.app')

@section('content')
    <div class="row horizontal-space" style="height: 100%;">
        <div class="col-md-1 profile-box" style="height: 100%;">
                <img src="{{ asset('img/profile/'.$user->avatar) }}" style="float: left;border-radius: 50%; width: 100%;">
                <a class="col-md-12 bouton" href="#">Modifier mon profile</a>
                <p class="col-md-12 text-profile">Nom : {{ $user->name }} </p>
                <p class="col-md-12 text-profile">Pseudo : {{ $user->pseudo }} </p>
                <p class="col-md-12 text-profile">Email : {{ $user->email }} </p>
                <p class="col-md-12 text-profile">Date de naissance : {{ $user->birthdate }} </p>
                <p class="col-md-12 text-profile">Description : {{ $user->presentation }} </p>
                <p class="col-md-12 text-profile">Adresse : {{ $user->adress ." ". $user->city . " " . $user->postal }} </p>

        </div>
        <div class="col-md-2 c-max-height profile-box">

                <h1>Mes conversations {{ $user->name or " " }}</h1>
                <h1>{{ $user->pseudo or " " }}</h1>
        </div>
        <div class="col-md-6 c-max-height profile-box">
                <h1>Mes conversations {{ $user->name or " " }}</h1>
                <h1>{{ $user->pseudo or " " }}</h1>
        </div>
        <div class="col-md-2 c-max-height profile-box">
                <h1>Mes conversations {{ $user->name or " " }}</h1>
                <h1>{{ $user->pseudo or " " }}</h1>
        </div>
    </div>
@endsection
