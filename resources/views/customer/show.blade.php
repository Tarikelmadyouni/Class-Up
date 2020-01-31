@extends('layouts.app')



@section('content')
   <div class="row">
       <div class="col-12">
           <div class="ml-4">
           <h1>Les details de ton profil, {{$customer->prenom}}</h1>
           </div>
       </div>
   </div>


   <div class="row mt-5">
       <div class="col-12 ml-5 ">


        <p class="row"><strong>Nom:</strong> <h5>{{ $customer->nom }}</h5></p>
        <br>
        <p class="row"><strong>Prenom:</strong> <h5>{{ $customer->prenom }}</h5></p>
        <br>
        <p class="row"><strong>Email:</strong> <h5>{{ $customer->email }}</h5></p>
        <br>
        <p class="row"><strong>Classe:</strong> <h5>{{ $customer->classe }}</h5></p>
        <br>
        <p class="row"><strong>Ecole:</strong> <h5>{{ $customer->ecole }}</h5></p>


       </div>
   </div>

   @endsection



