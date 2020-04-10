@extends('layouts.app')

@include('nav')

@can('manage-users')
<a class="dropdown-item" href="{{route('admin.users.index')}}">User Management</a>
@endcan

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


            <div class="card mt-4">
                <div class="card-header">
            <h3 style="text-align:center; color:royalblue"><strong>Vos cours et travaux à réaliser. Good job ;)</strong></h3>
                </div>
            </div>









            <div class="card mt-4">
                <div class="card-header">Vos questionnaires en cours</div>

                     <ul class="list-group">

                        @foreach($questionnaire as $questionnaire)

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

            </div>


            <div class="card mt-4">
                <div class="card-header">Vos documents à traiter</div>

                     <ul class="list-group">



                           <li class="list-group-item">

                           <a href="">doc pdf,txt,... à traiter</a>

                           <div class="mt-2">


                            <p>
                                <a href="">//document à traiter</a>
                            </p>

                           </div>


                           </li>



                     </ul>

            </div>


            <div class="card mt-4">
                <div class="card-header">Vos vidéo à consulter</div>

                     <ul class="list-group">



                           <li class="list-group-item">

                           <a href="">ici la vidéo</a>

                           <div class="mt-2">


                            <p>
                                <a href="">//video</a>
                            </p>

                           </div>


                           </li>



                     </ul>

            </div>

            <div class="card-body">

                <a href="/accueileleve" class="btn btn-dark mt-4">Vers ma vue d'ensemble</a>
            </div>

        </div>
    </div>
</div>
@endsection
