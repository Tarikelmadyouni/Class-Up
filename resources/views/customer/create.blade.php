@extends('layouts.app')



@section('content')
   <div class="row">
       <div class="col-12">
           <div class="ml-4">
           <h1>Ton profil</h1>
           </div>
       </div>
   </div>


   <div class="row">
       <div class="col-12">
       <form action="/customers" method="post">
        @include('customer.form')

        <button type="submit" class="btn btn-primary ml-4 mt-4">Ajoute tes infos</button>
       </form>
       </div>
   </div>

   @endsection

