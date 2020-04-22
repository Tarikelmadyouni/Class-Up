@extends('layouts.app')

@include('sidebar')

@section('content')




<div class="container">
    <div class="row justify-content-center col-ml-2 py-ml-3 mt-4">
<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
    <div class="card-header">MES ELEVES</div>
    <div class="card-body">
      <h5 class="card-title">
        <strong>Les élèves de Mr: {{ Auth::user()->name }}</strong>
      </h5>
      <hr>
      @foreach($user as $users)
    <p class="card-text">{{$users->name}} {{$users->surname}}</p>
    <p class="card-text">{{$users->email}}</p>
    <p class="card-text">{{ implode(',' ,$users->customer()->get()->pluck('classe')->toArray() )}}</p>
    <p class="card-text">{{ implode(',' ,$users->customer()->get()->pluck('telephone')->toArray() ) }}</p>


    @can('edit-users')
       <a href='{{ route('admin.users.edit', $users->id)}}'>
        <button type="submit" class="btn btn-light w-1 h-1">
        <img src="https://img.icons8.com/nolan/64/pencil.png" style="width:20px"/> Edit
        </button>
       </a>
       @endcan

       @can('delete-users')
       <form action="{{ route('admin.users.destroy',$users)}}" method="POST">
        @csrf
        {{ method_field('DELETE') }}

        <button type="submit" class="btn btn-light w-1 h-1">
        <img src="https://img.icons8.com/nolan/64/trash.png" style="width:20px"/>
        </button>
       </form>


       @endcan
    <hr class="bg-warning">

      @endforeach

    </div>
  </div>


  <div class="card text-white bg-success mb-3 ml-5 " style="max-width: 18rem;">
    <div class="card-header">MES CLASSES</div>
    <div class="card-body">
      <h5 class="card-title">Success card title</h5>
      <p class="card-text">
        @foreach($user as $users)
        <p class="card-text">{{$users->name}}</p>
        @can('edit-users')
        <a href='{{ route('admin.users.edit', 'admin.users.edit')}}'>
            <button type="button" class="btn btn-light w-1 h-1">
            <img src="https://img.icons8.com/nolan/64/pencil.png" style="width:20px"/> Edit
            </button>
           </a>
           @endcan

           @can('delete-users')
           <a href='{{ route('admin.users.destroy','admin.users.delete')}}'>
            <button type="button" class="btn btn-light w-1 h-1">
            <img src="https://img.icons8.com/nolan/64/trash.png" style="width:20px"/>
            </button>

           </a>
        @endcan

        <hr class="bg-warning">

           @endforeach

      </p>

    </div>
  </div>

  <div class="card text-white bg-info mb-3 ml-5" style="max-width: 18rem;">
    <div class="card-header">STATS PAR ELEVE</div>
    <div class="card-body">
      <h5 class="card-title">Warning card title</h5>
      <p class="card-text">

        @foreach($user as $users)
        <p class="card-text">{{$users->name}}</p>
        @can('edit-users')
        <a href='{{ route('admin.users.edit', 'admin.users.edit')}}'>
            <button type="button" class="btn btn-light">
            <img src="https://img.icons8.com/nolan/64/pencil.png" style="width:20px;"/> Edit
            </button>
           </a>
           @endcan

           @can('delete-users')
           <a href='{{ route('admin.users.destroy','admin.users.delete')}}'>
            <button type="button" class="btn btn-light w-1 h-1">
            <img src="https://img.icons8.com/nolan/64/trash.png" style="width:20px"/>
            </button>

           </a>
        @endcan

        <hr class="bg-warning">

           @endforeach

      </p>

    </div>
  </div>


</div>
</div>



@endsection
