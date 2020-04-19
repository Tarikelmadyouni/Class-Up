@extends('layouts.app')



@section('content')
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">

                <div class="card-header">
                    <h2>Les infos de {{$user->name}}</h2>
                    <p><em>Que voulez vous modifier/ajouter ?</em></p>

                </div>



                    <div class="card-body">
                    <form action="{{ route('admin.users.update', $user) }}" method="POST">
                        @csrf
                            {{ method_field('PUT') }}

                                <div class="form-group w-50">
                                    <div class="input-group">
                                    <label>prenom
                                    <input class="form-control" type="text" name="users[]" value="{{ $user->name }}">
                                    </label>

                                    <label>nom
                                    <input class="form-control ml-3" type="text" name="users[]" value="{{ $user->surname }}">
                                    </label>
                                    </div>
                                </div>

                                <div class="form-group w-25">
                                <label>role
                                <select value="{{ $user->id}}" class="form-control">
                                    <option>professeur</option>
                                    <option>student</option>
                                </select>
                                </label>
                                </div>

                                <div class="form-group w-50">
                                    <div class="input-group">
                                @foreach ($info as $infos)
                                <label>classe
                                <input class="form-control" type="text" name="customers[]" value="{{ $infos->classe}}">
                                </label>
                                <label>Tel
                                <input class="form-control ml-3" type="text" name="customers[]" value="{{ $infos->telephone}}">
                                </label>
                                    </div>
                                @endforeach
                                </div>


                        <button type="submit" class="btn btn-primary mt-4">
                            Ajoute tes infos
                        </button>

                    </form>
                    </div>
         </div>

        </div>
    </div>
@endsection
