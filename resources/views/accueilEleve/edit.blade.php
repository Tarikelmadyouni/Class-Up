@extends('layouts.app')



@section('content')
   <div class="row">
       <div class="col-12">
           <h1>Ton profil</h1>
       </div>
   </div>

      <div class="card-body">
      <form action="{{ route('admin.users.update', $user)}}" method="POST">
              {{ method_field('PUT') }}
              @foreach($role as $roles)
                <div class="form-check">
                <input type="checkbox" name="roles[]" value="{{$roles->id}}">
                <label>{{$roles->name}}</label>
                </div>
              @endforeach


        @can('edit-users')
        <button type="submit" class="btn btn-primary">Ajoute tes infos</button>
         @endcan
    </form>
       </div>
   </div>

@endsection