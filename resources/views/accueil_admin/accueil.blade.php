@extends('layouts.app')

@section('content')
<div class="container">
<h4>Professeur connecté: {{ Auth::user()->name }}</h4>
<br>
<h3><strong>Vue d'enssemble</strong></h3>

<div class="card-body mt-2">

    <a href="/home" class="btn btn-dark">Vers mes options</a>
</div>

    <div class="row justify-content-center">
        <div class="col-md-8">

        <div class="row justify-content-center">

            <div class="card mt-5" style="width: 18rem;">

                <img class="card-img-top bg-primary" style="width:35px; height:35px;" src="https://img.icons8.com/dusk/64/000000/survey.png" alt="questionnaire">
                <div class="card-body" style="height:10px;">
                  <h5 class="card-text"><strong>tous mes questionnaires créés</strong></h5>
                </div>
                <hr>
                <ul class="list-group list-group-flush">
                    @foreach($AccueilAdmin as $Accueil)
                    <a href=" questionnaires/{{$Accueil->id}}">
                  <li class="list-group-item"> {{$Accueil->title}}  </li>
                    </a>
                     @endforeach
                </ul>
                <div class="card-body">
                  <a href="/questionnaires/create" class="card-link">
                    <button type="button" class="btn btn-outline-primary">
                    Créer un nouveau questionnaire
                    </button>
                  </a>

                </div>
              </div>


              <div class="card ml-4 mt-5" style="width: 18rem;">
                <img class="card-img-top bg-primary" style="width:35px; height:35px;" src="https://img.icons8.com/dusk/64/000000/doc.png" alt="docs/images">
                <div class="card-body">
                  <h5 class="card-text"><strong>tous mes documents</strong></h5>
                </div>
                <hr>
                <ul class="list-group list-group-flush">
                    @foreach($idFile as $file)
                          <li class="list-group-item">
                             <p style="color:royalblue">{{ Str::limit($file->original, 35) }}</p>

                             <div class="d-flex justify-content-center">
                             <a href="{{ route('download', $file->id)}}" download="{{ $file->original}}" >
                                <button type="button" class="btn btn-light ml-4">
                                    <img src="https://img.icons8.com/nolan/64/download-2.png" style="width:35px; height:35px;"/> download
                                </button>
                            </a>
                             </div>
                          </li>
                     @endforeach





                </ul>
                <div class="card-body">
                   <a href="/images" class="card-link">
                    <button type="button" class="btn btn-outline-primary">
                    insérer un nouveau document
                    </button>
                   </a>

                </div>
            </div>

        </div>





        </div>
    </div>
</div>
@endsection
