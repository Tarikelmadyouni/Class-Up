@extends('layouts.app')

@section('content')
<div class="container">
<h4>Eleve connecté: {{ Auth::user()->name }}</h4>
<br>
<h3><strong>Vue d'enssemble</strong></h3>

<div class="card-body mt-2">

    <a href="/home" class="btn btn-dark">Vers mon tableau de bord</a>
</div>

    <div class="row justify-content-center">
        <div class="col-md-8">

        <div class="row justify-content-center">

            <div class="card mt-5" style="width: 18rem;">
                <img class="card-img-top bg-dark" src="..." alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><strong>Mes travaux</strong></h5>
                  <p class="card-text"><strong>tous mes travaux réalisés</strong></p>
                </div>
                <hr>
                <ul class="list-group list-group-flush">
                    @foreach($AccueilEleves as $Accueil)
                  <li class="list-group-item"> {{$Accueil->title}}  </li>
                     @endforeach
                </ul>
                <div class="card-body">
                  <a href="/home" class="card-link">Vers mes travaux</a>

                </div>
              </div>


              <div class="card ml-4 mt-5" style="width: 18rem;">
                <img class="card-img-top bg-dark" src="" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><strong>Mes Fichiers téléchargés</strong></h5>
                  <p class="card-text"><strong>tous mes documents</strong></p>
                </div>
                <hr>
                <ul class="list-group list-group-flush">
                    @foreach($AccueilEleves as $Accueil)
                          <li class="list-group-item">
                             <a href="{{ $Accueil->thumbnail }}">
                                <img src="{{$Accueil->thumbnail}}" class="w-25 h-25">
                             </a>
                          </li>
                     @endforeach
                </ul>
                <div class="card-body">
                  <a href="/home" class="card-link">Vers mes documents</a>

                </div>
              </div>

        </div>





        </div>
    </div>
</div>
@endsection
