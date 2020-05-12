@extends('layouts.app')


@section('content')

<h3>Une dernière petite chose pour configurer ta classe, {{ Auth()->user()->surname }} </h3>


<form action="/classeEleve"  method="post">
    @csrf


<div class='input-group mt-5'>

    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

    <div class="input-group-prepend">
            <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">votre classe</span>
            </div>
            <input type="text" name="classe_eleve" class="form-control" id="classe_eleve" placeholder="ex: 2c2" aria-label="classe_eleve"  aria-describedby="basic-addon1">
    </div>


        <button type="submit" class="btn btn-primary ml-3">Commencer</button>


</div>

</form>




@endsection

