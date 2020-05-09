@extends('layouts.app')

@section('content')

@foreach($classe as $classes)
<div class="container row justify-content-center ">
    <div class="card-header col-6 d-flex justify-content-center">

        <h2>Ma classe: {{ Auth::user()->surname }} | {{ $classes->classe_travaux }} | {{ $classes->matiere }}</h2>

    </div>
</div>
@endforeach

<div class="row justify-content-center">
    <div class="col-md-8">

    <div class="row justify-content-center">

        <div class="card ml-4 mt-5" style="width: 18rem;">
            <img class="card-img-top bg-primary" style="width:35px; height:35px;" src="https://img.icons8.com/dusk/64/000000/doc.png" alt="docs/images">
            <div class="card-body">
            <h5 class="card-text"><strong>tous mes documents / vidéos</strong></h5>
            </div>
            <hr>
            <ul class="list-group list-group-flush">
                    @foreach($idFile as $idFiles)
                    <li class="list-group-item">
                        <p style="color:royalblue">{{ Str::limit($idFiles->original, 35) }}</p>

                        <div class="d-flex justify-content-center">
                        <a href="{{ route('download', $idFiles->id)}}" download="{{ $idFiles->original}}" >
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
                insérer ou supprimer un document
                </button>
            </a>
            </div>

        </div>



        <div class="card ml-4 mt-5 d-flex row" style="width: 18rem;">

            <img class="card-img-top bg-primary" style="width:35px; height:35px;" src="https://img.icons8.com/dusk/64/000000/survey.png" alt="questionnaire">
            <div class="card-body" style="height:10px;">
            <h5 class="card-text"><strong>tous mes questionnaires créés</strong></h5>
            </div>
            <hr>
            <ul class="list-group list-group-flush">
                @foreach($AccueilAdmin as $Accueil)
                <a href=" questionnaires/{{$Accueil->id}}">

                </a>
                <a style="margin-left:10px;" href="{{$Accueil->path() }}">{{$Accueil->title}}</a>

                           <div class="mt-2">

                            <small class="font-weight-bold ml-2">Partagez le lien</small>
                            <p>
                                <a style="margin-left:10px;" href="{{$Accueil->publicPath()}}">{{$Accueil->publicPath()}}</a>
                            </p>
                            <hr>
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

    </div>
    </div>
</div>



@endsection
