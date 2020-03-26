@extends('layouts.app')

@section('content')



<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
    <div class="card-header">Users</div>
    <div class="card-body">
      <h5 class="card-title">
        {{ Auth::user()->name }}
      </h5>
      @foreach($user as $users)
    <p class="card-text">{{$users->name}}</p>
    <p class="card-text">{{$users->email}}</p>
    <p class="card-text">{{$users->role}}</p>




       @endforeach

       @can('edit-users')
       <a href='{{ route('admin.users.edit', 'admin.users.edit')}}'><button type="button" class="btn btn-primary">Edit</button></a>
       @endcan

       @can('delete-users')
       <a href='{{ route('admin.users.destroy','admin.users.delete')}}'><button type="button" class="btn btn-danger">Delete</button></a>
       @endcan
    </div>
  </div>

  <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
    <div class="card-header">Header</div>
    <div class="card-body">
      <h5 class="card-title">Success card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>

  <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
    <div class="card-header">Header</div>
    <div class="card-body">
      <h5 class="card-title">Warning card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>



@endsection
