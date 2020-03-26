@extends('layouts.app')

@can('manage-users')
<a class="dropdown-item" href="{{route('admin.users.index')}}">User Management</a>
@endcan

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/questionnaires/create" class="btn btn-dark">Créez un nouveau questionnaire</a>
                    <a href="/images" class="btn btn-dark ml-2">Ajouter des documents ou vidéo</a>
                    <a href="/graphs/create" class="btn btn-dark ml-2">Entrer des résultats par élève</a>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">Vos cours déjà créés</div>

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

            <div class="card-body">

                <a href="/accueil" class="btn btn-dark mt-4">Vers ma vue d'ensemble</a>
            </div>

        </div>
    </div>
</div>
@endsection
