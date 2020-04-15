@extends('layouts.app')



@section('content')

<div class="container">
    <div class="row justify-content-center mt-1">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   <div class=" d-flex justify-content-around ">
                    <a href="/questionnaires/create" class="badge badge-pill badge-primary p-2">Créez un nouveau questionnaire</a>
                    <a href="/images" class="badge badge-pill badge-primary p-2">Ajouter des documents ou vidéo</a>
                    <a href="/graphs/create" class="badge badge-pill badge-primary p-2">Entrer des résultats par élève</a>
                   </div>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header text-center">Vos cours déjà créés</div>

                     <ul class="list-group">

                        @foreach($questionnaires as $questionnaire)

                           <li class="list-group-item">

                           <a href="{{$questionnaire->path() }}">{{$questionnaire->title}}</a>

                           <div class="mt-2">

                            <small class="font-weight-bold">Share url</small>
                            <p>
                                <a href="{{$questionnaire->publicPath()}}">{{$questionnaire->publicPath()}}</a>
                            </p>

                           </div>


                           </li>

                        @endforeach

                     </ul>


                <div class="card-body">


                </div>
            </div>

            <div class="card-body  d-flex justify-content-around " >

                <a href="/accueil" class="badge badge-pill badge-primary h-50 p-3  ">Vers ma vue d'ensemble</a>
            </div>

        </div>
    </div>
</div>
@endsection
