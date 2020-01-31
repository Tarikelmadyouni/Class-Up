@extends('layouts.app')



@section('content')
   <div class="row">
       <div class="col-12">
           <h1>Ton profil</h1>
       </div>
   </div>


   <div class="row">
       <div class="col-12">
       <form action="{{route('customers.update', ['customer'=> $customer])}}" method="POST" >
        @method('PATCH')
        @include('customer.form')


        <button type="submit" class="btn btn-primary">Ajoute tes infos</button>
       </form>
       </div>
   </div>


