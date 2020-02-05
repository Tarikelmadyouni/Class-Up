@extends('layouts.app')

@section('content')

<h1>Entrez les nouvelles notes</h1>

<form action="/graphs" method="post">
@csrf

    <div class="col-4 ml-2">

       @foreach ($graphs as $customer)
        <div class="form-group">

            <label for="nom">Choisissez un élève</label>
        <select name="nom[]" id="nom">
            <option>{{ $customer->nom }}</option>
            </select>

        </div>
        @endforeach

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

          <input type="date" id="start" name="trip-start"
                 value="2018-07-22"
                 min="2018-01-01" max="2050-12-31">
        </div>



    </div>

    <button type="submit" class="btn btn-primary ml-4 mt-4">Ajouter les infos au graphiques</button>

</form>


    @endsection







