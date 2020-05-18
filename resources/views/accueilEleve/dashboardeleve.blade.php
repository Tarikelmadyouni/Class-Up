@extends('layouts.app')


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
                        @if($questionnaire)
                           <a href="{{$questionnaire->path() }}">{{$questionnaire->title}}</a>

                           <div class="mt-2">

                            <small class="font-weight-bold">Partagez le lien</small>
                            <p>
                                <a href="{{$questionnaire->publicPath()}}">{{$questionnaire->publicPath()}}</a>
                            </p>
                        @else
                            {{ $maj }}<p style="font-size:40px">&#x1F389</p>

                        @endif


                           </div>


                           </li>

                        @endforeach

                     </ul>

            </div>


            <div class="card mt-4">
                <div class="card-header">Vos documents à traiter</div>

                     <ul class="list-group">



                           <li class="list-group-item">

                           <div class="mt-2">
                        @foreach($path as $paths)
                        @if ( $paths )

                                <a href="">{{ Str::limit($paths->original, 35) }}</a>

                            <a href="{{ route('download', $paths->id)}}" download="{{ $paths->original}}" >
                                <button type="button" class="btn btn-light ml-4">
                                    <img src="https://img.icons8.com/nolan/64/download-2.png" style="width:35px; height:35px;"/> download
                                </button>
                            </a>
                            <hr>
                        @else
                        {{ $maj }}<p style="font-size:40px">&#x1F389</p>

                        @endif

                        @endforeach
                           </div>


                           </li>


                     </ul>

            </div>


            <div class="card mt-4">
                <div class="card-header">Vos vidéo à consulter</div>

                     <ul class="list-group">



                           <li class="list-group-item">

                           <div class="mt-2">


                            <p>
                                <a href=""></a>
                            </p>


                        {{ $maj }}<p style="font-size:40px">&#x1F389</p>


                           </div>


                           </li>



                     </ul>

            </div>

            <div class="card-body">

                <a href="/accueileleve" >
                    <button type="button" class="btn btn-outline-primary">
                    <strong>
                    Vers ma tool box <img src="https://img.icons8.com/nolan/64/toolbox.png" style="width:45px; height:45px;"/>
                    </strong>
                    </button>
                </a>

            </div>

        </div>
    </div>
</div>
@endsection
