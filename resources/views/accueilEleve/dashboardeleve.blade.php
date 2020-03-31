@extends('layouts.app')

@can('manage-users')
<a class="dropdown-item" href="{{route('admin.users.index')}}">User Management</a>
@endcan

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            











            <div class="card mt-4">
                <div class="card-header">Vos cours</div>

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

            <div class="card-body">

                <a href="/accueileleve" class="btn btn-dark mt-4">Vers ma vue d'ensemble</a>
            </div>

        </div>
    </div>
</div>
@endsection
