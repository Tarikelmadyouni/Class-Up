@extends('layouts.app')

@section('content')

<h1>Entrez les nouvelles notes</h1>



<div class="card">
<form action="/graphs" method="post">
@csrf

<div class="card-header">
@foreach($matiere as $matieres)
<h4 style="color: darkblue"><strong>Matiere: {{ $matieres->matiere }} - Classe de: {{ $matieres->classe}}</strong></h4>
@endforeach
</div>

    <div class="col-4 ml-2 mt-2">


        <div class="form-group">
            <label for="nom">Choisissez un élève</label>

        <select class="form-control" name="nom" id="nom">
@foreach ($student as $students)

        <option>{{$students->name}} {{ $students->surname }}</option>
@endforeach
            </select>


        </div>




       <div class="form-group">
           <label for="note">sa note</label>
       <select class="form-control" name="notes" id="notes">
 @foreach($note as $notes)
           <option>{{ $notes->note }}</option>
 @endforeach
       </select>

       </div>

        <div class="form-group">
          <label for="start">date:</label>

          <input class="form-control" type="date" id="start" name="date"
                 value="22-07-2005"
                 min="1-01-1980" max="1-01-2050">
        </div>



    </div>

    <button type="submit" class="btn btn-primary ml-4 mt-4 mb-4">Ajouter les infos au graphiques</button>
</div>
</form>


    @endsection













