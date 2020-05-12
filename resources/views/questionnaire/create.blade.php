@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Créez nouveau questionnaire</div>

                <div class="card-body">
                    <form action="/questionnaires" method="post">
                        @csrf

                        <div class="form-group">
                                <label for="title">Title</label>
                                <input name="title" type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Entrer un Titre">
                                <small id="titleHelp" class="form-text text-muted">Donnez à votre questionnaire un titre qui attire l'attention.</small>

                                @error('title')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                              </div>

                        <div class="form-group">
                                <label for="propose">L'objet</label>
                                <input name="propose" type="text" class="form-control" id="propose" aria-describedby="proposeHelp" placeholder="Entrer un objet">
                                <small id="proposeHelp" class="form-text text-muted">donner un objet a la question</small>

                                @error('propose')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                              </div>

                              <button type="submit" class="btn btn-primary">Creation du Questionnaire </button>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
