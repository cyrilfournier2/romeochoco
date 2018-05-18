@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row horizontal-space" style="height: 100%;">
            <div class="col-md-offset-1 col-md-4 profile-box panel panel-content" >
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <img src="{{ asset('img/profile/'.$user->avatar) }}" style="float: left;border-radius: 50%; width: 100%;max-width: 250px; border: 1px solid #bb1917;">
                    </div>
                </div>
                <div class="row">
                    <a class=" col-md-3 bouton" href="#">Modifier mon profile</a>
                </div>
                <div class="row">
                    <p class="text-profile">Nom :  </p>
                    <p class="text-profile-content">{{ $user->name }} </p>
                </div>
                <div class="row">
                    <p class="text-profile">Pseudo : </p>
                    <p class="text-profile-content"> {{ $user->pseudo }} </p>
                </div>
                <div class="row">
                    <p class="text-profile">Email :  </p>
                    <p class="text-profile-content">{{ $user->email }} </p>
                </div>
                <div class="row">
                    <p class="text-profile">Date de naissance : </p>
                    <p class="text-profile-content"> {{ $user->birthdate }} </p>
                </div>
                <div class="row">
                    <p class="text-profile">Description : </p>
                    <p class="text-profile-content"> {{ $user->presentation }} </p>
                </div>
                <div class="row">
                    <p class="text-profile">Adresse :  </p>
                    <p class="text-profile-content">{{ $user->adress ." ". $user->city . " " . $user->postal }} </p>
                </div>
            </div>
            <div class="col-md-offset-2 col-md-4 c-max-height profile-box panel panel-content">

                <h1>Mes conversations {{ $user->name or " " }}</h1>
                <h1>{{ $user->pseudo or " " }}</h1>
            </div>
            <div class="col-md-offset-2 col-md-4 c-max-height profile-box panel panel-content">

                <h1>Mes conversations {{ $user->name or " " }}</h1>
                <h1>{{ $user->pseudo or " " }}</h1>
            </div>
        </div>
    </div>

@endsection
