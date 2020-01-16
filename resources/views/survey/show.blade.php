@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        <h1>{{$questionnaire->title}}</h1>

        <form action="/surveys/{{$questionnaire->id}}-{{Str::slug($questionnaire->title)}}" method="post">
            @csrf

            @foreach ($questionnaire->questions as $question)
            <div class="card mt=4">
                <div class="card-header">{{$questionnaire->title}}</div>

                <div class="card-body">

                    @error('responses.' . $key . '.answer_id')
                <small class='text-danger'>{{$message}}</small>
                    @enderror


                <ul class="list-group">
                    @foreach ($question->answers as $answer)
                <label for="answer{{$answer->id}}">
                        <li class="list-group-item">
                        <input type="radio" name="responses[{{ $key }} ][answer_id]" id="answer{{$answer->id}}" {{(old('responses.' . $key . '.answer_id') == $answer->id)?'checked' : '' }}  value="$answer->id}}">
                        {{ $answer->answer }}

                        <input type="hidden" name="responses[{{ $key }} ][question_id]" value="{{$question->id}}">
                        </li>

                </label>

                @endforeach
                  </ul>
                    </div>
                </div>
            @endforeach



            <div class="card">
                <div class="card-header">Your informations</div>

                <div class="card-body">

                        @csrf

                        <div class="form-group">
                                <label for="name">Your name</label>
                                <input name="survey[name]" type="text" class="form-control" id="title" aria-describedby="nameHelp" placeholder="Enter name">
                                <small id="nameHelp" class="form-text text-muted">Hello whats your name</small>

                                @error('title')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                              </div>

                        <div class="form-group">
                                <label for="email">Purpose</label>
                                <input name="email" type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your email">
                                <small id="emailHelp" class="form-text text-muted">Your email please</small>

                                @error('propose')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                              </div>

                              <div>
                                <button class="btn btn-dark" type="submit">Complete survey</button>
                              </div>
        </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
