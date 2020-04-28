@extends('layouts.app')



@section('content')
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">

                <div class="card-header">
                    <h2>Les infos de {{$user->name}}</h2>
                    <p><em>Que voulez vous modifier ?</em></p>

                </div>



                    <div class="card-body">
                      <form action="{{ route('admin.users.update', $user) }}" method="POST">
                        @csrf


                                <div class="form-group w-50">
                                    <div class="input-group">


                                    <label>prenom
                                    <input class="form-control" type="text" name="name" value="{{ $user->name }}">

                                    </label>

                                    <label>nom
                                    <input class="form-control ml-3" type="text" name="surname" value="{{ $user->surname }}">
                                    </label>

                                    <label>email
                                    <input class="form-control" type="text" name="email" value="{{ $user->email }}">
                                    </label>

                                    </div>
                                </div>

                                <div class="form-group w-50">
                                {{ method_field('PUT') }}


                                  @foreach ($info as $infos)


                                  <label>classe

                                  <input class="form-control" type="text" name="classe" value="{{ $infos->classe}}"
                                  @if($user->customer->pluck('id')->contains($infos->id)) @endif>

                                  </label>



                                  <label >telephone
                                  <input class="form-control" type="text" name="telephone" value="{{ $infos->telephone}}"
                                  @if($user->customer->pluck('id')->contains($infos->id)) @endif>

                                  </label>



                                    @endforeach

                                </div>


                        <button type="submit" class="btn btn-primary mt-4">
                            mettre à jour
                        </button>

                      </form>
                    </div>
         </div>

        </div>
    </div>
@endsection
