<!DOCTYPE html>
<html lang="fr">


@extends('layouts.app')

@section('content')
<div class="container">

<div class="row">
     <div class="col-8">
         <img src="/storage/{{$post->image}}" class="w-100">
      </div>
     <div class="col-4">

          <div>

          <h1>{{$post->user->surname}}</h1>

          <p>{{ $post->légende  }}</p>

          </div>


    </div>
</div>

</div>
@endsection

</body>

</html>
