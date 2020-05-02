@extends('layouts.app')

@section('content')
<div class="container">
<h4>Que veux tu faire <p style="color:royalblue; display:inline;">{{ Auth::user()->surname }}</p> <span style='font-size:40px;'>&#128526;</span></h4>
<br>
<h3><strong>Choisis une action dans ta toolbox <img src="https://img.icons8.com/nolan/64/toolbox.png" style="width:45px; height:45px;"/></strong></h3>

<div class="card-body mt-2">

    <a href="/dashboardeleve" class="btn btn-danger">Vers ma zone de travail</a>
</div>

    <div class="row justify-content-center">
        <div class="col-md-8">

        <div class="row justify-content-center">
            {{--
            <div class="card mt-5" style="width: 18rem;">
                <img class="card-img-top bg-primary" src="..." alt="Card image cap">
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
                  <a href="/dashboardeleve" class="card-link">Voir mes travaux en cours</a>

                </div>
              </div>
              --}}
              <div class="card text-center">
                <div class="card-header">
                  le Chat <img src="https://img.icons8.com/nolan/64/topic.png" style="width:40px; height:40px"/>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Choisis qui tu veux contacter</h5>
                  <p class="card-text">Acceder au Chat &#x1F447</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card-footer text-muted">
                  <em>dernier message: il ya...</em>
                </div>
              </div>

              <div class="card text-center ml-4">
                <div class="card-header">
                  Mes statistiques <img src="https://img.icons8.com/nolan/64/combo-chart.png" style="width:40px; height:40px"/>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Toutes tes notes sont là</h5>
                  <p class="card-text">Acceder stats &#x1F447</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card-footer text-muted">
                  <em>dernier resultat obtenu...</em>
                </div>
              </div>

              <div class="card text-center ml-4 mt-4">
                <div class="card-header">
                  Charger un document <img src="https://img.icons8.com/nolan/64/document.png" style="width:40px; height:40px"/>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Un pdf, txt, png,...</h5>
                  <p class="card-text">Acceder à la zone de télechargement &#x1F447</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card-footer text-muted">
                  <em>dernier doc chargé...</em>
                </div>
              </div>


              {{--
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
                  <a href="/dashboardeleve" class="card-link">Vers mes documents</a>

                </div>
              </div>
              --}}

        </div>





        </div>
    </div>
</div>
@endsection
