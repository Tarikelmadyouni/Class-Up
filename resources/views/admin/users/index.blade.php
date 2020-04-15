@extends('layouts.app')

@section('content')

<div class="card-body mt-2">

    <a href="/home" class="btn btn-dark">Vers mon tableau de bord</a>
</div>


<div class="container">
    <div class="row justify-content-center col-ml-2 py-ml-3 mt-4">
<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
    <div class="card-header">MES CLASSES</div>
    <div class="card-body">
      <h5 class="card-title">
        <strong>Classes de Mr: {{ Auth::user()->name }}</strong>
      </h5>
      <hr>
      @foreach($user as $users)
    <p class="card-text">{{$users->name}}</p>
    <p class="card-text">{{$users->email}}</p>
    <p class="card-text">{{$users->role}}</p>
    <hr class="bg-warning">



      @endforeach

       @can('edit-users')
       <a href='{{ route('admin.users.edit', 'admin.users.edit')}}'><button type="button" class="btn btn-warning">Edit</button></a>
       @endcan

       @can('delete-users')
       <a href='{{ route('admin.users.destroy','admin.users.delete')}}'><button type="button" class="btn btn-danger">Delete</button></a>
       @endcan
    </div>
  </div>

  <div class="card text-white bg-success mb-3 ml-5 " style="max-width: 18rem;">
    <div class="card-header">MES ELEVES</div>
    <div class="card-body">
      <h5 class="card-title">Success card title</h5>
      <p class="card-text">
        @foreach($customer as $users)
        <p class="card-text">{{$users->nom}}</p>
        <p class="card-text">{{$users->email}}</p>
        <hr class="bg-warning">




           @endforeach

      </p>
    </div>
  </div>

  <div class="card text-white bg-warning mb-3 ml-5" style="max-width: 18rem;">
    <div class="card-header">MES OPTIONS DE COURS</div>
    <div class="card-body">
      <h5 class="card-title">Warning card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <hr class="bg-success">
    </div>
  </div>
</div>
</div>



@endsection
