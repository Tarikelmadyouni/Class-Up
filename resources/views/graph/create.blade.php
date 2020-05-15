@extends('layouts.app')

@section('content')

<h1>Entrez les nouvelles notes</h1>

<form action="/graphs" method="post">
@csrf

    <div class="col-4 ml-2">


        <div class="form-group">
            <label for="nom">Choisissez un élève</label>

        <select name="nom" id="nom">
@foreach ($student as $students)
        <option>{{$students->name}} {{ $students->surname }}</option>
@endforeach
            </select>


        </div>

        <input type="hidden" name="user_id" id="user_id">
        <div class="form-group">
            <label for="matiere">Matière</label>
        <input type="text" name="matiere" id="matiere"  class="form-control">

        </div>


       <div class="form-group">
           <label for="note">note</label>
       <input type="text" name="notes" id="notes"  class="form-control">

       </div>

        <div class="form-group">
          <label for="start">date:</label>

          <input type="date" id="start" name="date"
                 value="22-07-2005"
                 min="1-01-1980" max="1-01-2050">
        </div>



    </div>

    <button type="submit" class="btn btn-primary ml-4 mt-4">Ajouter les infos au graphiques</button>

</form>


    @endsection







