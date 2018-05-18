<nav class="navbar-custom-back">
    <div class="col-md-12 col-xs-12 row" style="height: 100%;">
        <div class="col-xs-12">
            <img src="{{ asset('img/logo.bmp') }}" class="logo-small" hidden>
            <button type="button" class="navbar-toggle glyphicon glyphicon-align-justify col-xs-2" data-toggle="collapse" data-target=".myNavbar"></button>
        </div>
        @if(Auth::guest())
            <a href="{{ route('login') }}" class="col-md-1 bouton-nav myNavbar" id="nav-pageConnexion"><p>Connexion</p></a>
        @else
            <a href="{{ route('profile') }}" class="col-md-1 myNavbar">
                <img  src="{{ asset('img/profile/'. Auth::user()->avatar) }}" style="max-height: 130px;float: left;border-radius: 50%" >
                <p class="text-profile">Bienvenue {{ Auth::user()->name }}</p>
            </a>
        @endif
        <a href="{{ url('/') }}" class="col-md-1 bouton-nav myNavbar nav-selected" id="nav-page1"><p>Accueil</p></a>
        <a href="#section-section2" class="col-md-1 bouton-nav myNavbar" id="nav-page2"><p>J'offre/J'ai reçu</p></a>
        <a href="#section-section3" class="col-md-1 bouton-nav myNavbar" id="nav-page3"><p>Nos produits</p></a>
        <a href="#section-section4" class="col-md-1 bouton-nav myNavbar" id="nav-page4"><p>Où les acheter ?</p></a>

        <div class="col-md-2 collapse navbar-collapse" >
            <p style=" width: 100%;text-align: center"> <img src="{{ asset('img/logo.bmp') }}" style="max-height: 150px; width: 100%"></p>

        </div>
        <a href="#section-section5" class="col-md-1 bouton-nav myNavbar" id="nav-page5"><p>Actualités et évennements</p></a>
        <a href="#section-section6" class="col-md-1 bouton-nav myNavbar" id="nav-page6"><p>Témoignages</p></a>
        <a href="{{ route('histoire') }}" class="col-md-1 bouton-nav  myNavbar"><p>Notre histoire</p></a>
        <a class="col-md-offset-1 col-md-1 bouton-nav myNavbar"><p><span class="glyphicon glyphicon-shopping-cart" style="font-size: 30px;  "></span></p></a>

    </div>
</nav>

