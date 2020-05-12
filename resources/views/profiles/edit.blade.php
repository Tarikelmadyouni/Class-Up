<!DOCTYPE html>
<html lang="fr">


@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
        @csrf

        @method('PATCH')

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1> Editer le Profile</h1>

                </div>

                <div class="d-flex justify-content-end">
                    <button class="btn btn-danger">Save Profile</button>
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label "> description</label>


                    <input id="	description" type="text"
                        class="form-control @error('	description') is-invalid @enderror" name="description"
                        value="{{ old('description') ?? $user->profile->description }}" autocomplete="	description"
                        autofocus>


                    @error('description')
                    <small class="text-danger"> <strong>{{$message}}</strong></small>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label "> url</label>


                    <input id="	url" type="text" class="form-control @error('	url') is-invalid @enderror" name="url"
                        value="{{ old('url') ?? $user->profile->url}} " required autocomplete="	url" autofocus>

                    @error('url')
                    <small class="text-danger"><strong>{{$message}}</strong></small>
                    @enderror
                </div>

                <div class="form-group row">

                    <label for="classe" class="col-md-4 col-form-label "> Classe</label>
                    <input id="	classe" type="text" class="form-control @error('	classe') is-invalid @enderror"
                        name="classe" value="{{ old('classe') ?? $user->profile->classe}} " required
                        autocomplete="classe" autofocus>
                    @error('classe')
                    <small class="text-danger"> <strong>{{$message}}</strong></small>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="numeroTelephone" class="col-md-4 col-form-label">Telephone</label>

                    <input class="form-control" type="tel" name="numeroTelephone" maxlength="10"
                        value="{{old('numeroTelephone')?? $user->profile->numeroTelephone}}" id="numeroTelephone">

                    @error('numeroTelephone')
                    <small class="text-danger"><strong>{{$message}}</strong></small>
                    @enderror
                </div>
                <div class="form-group row">

                    <label for="date_de_naissance" class="col-md-4 col-form-label">Date De Naissance</label>

                    <input id="date_de_naissance" class="form-control" type="date" name="date_de_naissance"
                        value="{{ old('date_de_naissance') ?? $user->profile->date_de_naissance}}">
                </div>
                @error('date_de_naissance')
                <small class="text-danger"><strong>{{$message}}</strong></small>
                @enderror

            </div>



            <div class="custom-file  form-group row mt-4 ">
                <label class=" custom-file-label" for="image">choisir un Avatar</label>
                <input type="file" class=" custom-file-input" id="image" name="image" enctype="multipart/form-data">

            </div>
        </div>
</div>





</form>




@endsection

</body>

</html>
