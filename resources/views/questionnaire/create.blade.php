@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create new questionnaire</div>

                <div class="card-body">
                    <form action="/questionnaires" method="post">
                        @csrf

                        <div class="form-group">
                                <label for="title">Title</label>
                                <input name="title" type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter title">
                                <small id="titleHelp" class="form-text text-muted">Give a title that create attention</small>

                                @error('title')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                              </div>

                        <div class="form-group">
                                <label for="propose">Purpose</label>
                                <input name="propose" type="text" class="form-control" id="propose" aria-describedby="proposeHelp" placeholder="Enter propose">
                                <small id="proposeHelp" class="form-text text-muted">Giving a purpose will incrase response</small>

                                @error('propose')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                              </div>

                              <button type="submit" class="btn btn-primary">Save questionnaire</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
