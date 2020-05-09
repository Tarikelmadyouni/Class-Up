@extends('layouts.app')


@section('content')

<h3>Une dernière petite chose pour configurer votre classe, {{ Auth()->user()->surname }} </h3>


<form action="/classeprof"  method="post">
    @csrf


<div class='input-group mt-5'>

    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

    <div class="input-group-prepend">
            <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">votre classe</span>
            </div>
            <input type="text" name="classe" class="form-control" id="classe" placeholder="ex: 2c2" aria-label="classe"  aria-describedby="basic-addon1">
    </div>

    <div class="input-group-prepend">
           <div class="input-group-prepend ml-3 w-20">
            <span class="input-group-text" id="basic-addon1">Votre matière</span>
            </div>
            <input type="text" name="matiere" class="form-control" id="matiere" placeholder="ex: Français" aria-label="matiere"  aria-describedby="basic-addon1">
    </div>

        <button type="submit" class="btn btn-primary ml-3">Commencer</button>


</div>

</form>




@endsection
