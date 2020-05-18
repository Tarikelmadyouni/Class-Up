<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Class'Up</title>
    <style>
        h1 {
            color: blue;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 5%
        }

        span {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 25px;
            font-style: italic;
            color: brown
        }

        .font-weight-bold {

            color: black;
            font-size: 25px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .pt-2 {
            font-family: 'fantasy', sans-serif;
            font-size: 25px;

        }

    </style>
</head>

@extends('layouts.app')

@section('content')



<div class="container">
       

    <div class="row justify-content-center mt-5   pl-4 d-flex">
        <div class="col-3 p-5">
        <img src="{{$user->profile->profileImage()}}" style="max-height:200px;" alt="face" class="rounded-circle w-100"></<img>


        </div>

        <div class="col-9 p-5 pt-5 border-3 mr-20 card text-center  ">
            <div class="d-flex justify-content-between">
                <div class="col-2">
              @can ('update', $user->profile)
                  <a href="/profile/{{ $user->id }}/edit" class="float-right btn btn-outline-info rounded-pill  align-text-bottom">Editer Actu</a>
             @endcan
                </div>

            <div class="col-1">
                     @can ('update', $user->profile)
            <a href="/p/create" class=" float-right btn btn-outline-success rounded-pill   align-text-bottom" role="button"
                aria-pressed="true">Rajoute Poste</a>
                @endcan
           </div>
            </div>

            <div>
                <h1>Profile</h1>

            </div>
            <div class=".d-inline-flex">
                <div><strong>Prenom:</strong><span class="ml-2">{{$user->surname}}</div></span>
                <div><strong>Nom: </strong><span class='ml-2'>{{$user->name}}</div></span>
                <div><strong>Email: </strong><span class='ml-2'>{{$user->email}}</div></span>
                <div><strong>Telephone: </strong><span class='ml-2'>{{$user->profile->numeroTelephone}}</div></span>
                <div><strong>Date de Naissance: </strong><span class='ml-2'>{{(new DateTime($user->profile->date_de_naissance))->format('d.m.Y')}}</div></span>
                <div><strong>Classe: </strong><span class='ml-2'>{{$user->profile->classe}}</div></span>

            </div>
            <form>

            <div class="form-group">
                  <label for="exampleFormControlTextarea1" class="pt-5 font-weight-bold text-left">Actu </label>
                   <textarea class="form-control text-center" style="font-weight: 900; color:DodgerBlue; font-family: cursive; font-size: 150%;" id="exampleFormControlTextarea1" rows="3"> {{$user->profile->description}}</textarea>
            </div>
        <div><a href="{{$user->profile->url}}" target="_blank">{{$user->profile->url ?? 'N/A'}}</a></div><br>

            </form>
        </div>
    </div>

    <div class="row pt-5 pl-6 pb-4">

        @foreach ($user->posts as $post)

        <div class="col-4 mt-4">
        <a href="/p/ {{$post->id }}"> <img src="/storage/{{ $post->image }}" class="w-100"></a>
        </div>


        @endforeach


    </div>
</div>
@endsection

</body>

</html>
