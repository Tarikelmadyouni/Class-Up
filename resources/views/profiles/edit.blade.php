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

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label "> description</label>


                    <input id="	description" type="text" class="form-control @error('	description') is-invalid @enderror"
                        name="description" value="{{ old('description') ?? $user->profile->description }}" required autocomplete="	description" autofocus>

                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message->first('description')   }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label "> url</label>


                    <input id="	url" type="text" class="form-control @error('	url') is-invalid @enderror"
                        name="url" value="{{ old('url') ?? $user->profile->url}} " required autocomplete="	url" autofocus>

                    @error('url')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message->first('url') }}</strong>
                    </span>
                    @enderror
                </div>

                  <div class="form-group row">
                         <label for="classe" class="col-md-4 col-form-label "> Classe</label>
                          <input id="	classe" type="text" class="form-control @error('	classe') is-invalid @enderror"
                        name="classe" value="{{ old('classe') ?? $user->profile->classe}} " required autocomplete="classe" autofocus>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label "> Profile Image</label>
                    <input type="file" , class="form-control-file" id="image" name="image">

                    @if ($errors->has('image'))
                         <strong class="text-danger">{{ $errors->first('image') }}</strong>

                    @endif
                </div>
                <div class="row pt-4">
                    <button class="btn btn-danger">Save Profile</button>
                </div>
            </div>
        </div>
</div>

</form>

</div>
@endsection

</body>

</html>
