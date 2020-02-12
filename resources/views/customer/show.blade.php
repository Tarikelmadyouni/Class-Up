@extends('layouts.app')



@section('content')
   <div class="row">
       <div class="col-12">
           <div class="ml-4">
           <h1>Les details de ton profil, {{ Auth::user()->name }}</h1>
           </div>

       </div>
   </div>


   <div class="container">
    <div class="float-right mr-4 ">
    <a href="/graph"><button class="btn btn-primary pull-right">Vers mes statistiques</button></a>
    </div>
   </div>





     <div class="card col-6 ml-5 mt-5 py-3 pl-5">
        <p class="row"><strong>Nom:</strong> <h5>{{ $customer->nom }}</h5></p>
        <br>
        <p class="row"><strong>Prenom:</strong> <h5>{{ $customer->prenom }}</h5></p>
        <br>
        <p class="row"><strong>Email:</strong> <h5>{{ $customer->email }}</h5></p>
        </div>

        <br>

     <div class="card col-6 ml-5 mt-2 py-3 pl-5">
        <p class="row"><strong>Classe:</strong> <h5>{{ $customer->classe }}</h5></p>
        <br>
        <p class="row"><strong>Ecole:</strong> <h5>{{ $customer->ecole }}</h5></p>
        </div>



   @endsection



