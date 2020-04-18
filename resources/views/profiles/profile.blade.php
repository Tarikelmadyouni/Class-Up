<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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

    </style>
</head>
@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center mt-5 d-flex">
        <div class="col-3 p-5">
            <img src="/image-profile/face.png" style="max-height:200px;" alt="face" class="rounded-circle"></<img>
        </div>

        <div class="col-9 p-5 pt-5 border-3 card text-center ">

            <div>
                <h1>Profile</h1>
            </div>
              <div class=".d-inline-flex">
            <div><strong>Prenom:</strong><span class="ml-2">{{$user->surname}}</div></span>
          <div><strong>Nom: </strong><span class='ml-2'>{{$user->name}}</div></span>
              </div>



    </div>


</div>
</div>
@endsection

</body>

</html>
