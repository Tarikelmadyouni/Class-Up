@extends('layouts.app')

@section('content')

<div class="container row justify-content-center ">
    <div class="card-header col-6 d-flex justify-content-center">
        
        <h2>Ma classe: {{ Auth::user() }}</h2>

    </div>
</div>



<div class="card ml-4 mt-5" style="width: 18rem;">
    <img class="card-img-top bg-primary" style="width:35px; height:35px;" src="https://img.icons8.com/dusk/64/000000/doc.png" alt="docs/images">
    <div class="card-body">
      <h5 class="card-text"><strong>tous mes documents</strong></h5>
    </div>
    <hr>
    <ul class="list-group list-group-flush">
        @foreach($idFile as $file)
              <li class="list-group-item">
                 <p style="color:royalblue">{{ Str::limit($file->original, 35) }}</p>

                 <div class="d-flex justify-content-center">
                 <a href="{{ route('download', $file->id)}}" download="{{ $file->original}}" >
                    <button type="button" class="btn btn-light ml-4">
                        <img src="https://img.icons8.com/nolan/64/download-2.png" style="width:35px; height:35px;"/> download
                    </button>
                </a>
                 </div>
              </li>
         @endforeach

    </ul>
    <div class="card-body">
       <a href="/images" class="card-link">
        <button type="button" class="btn btn-outline-primary">
        insérer un nouveau document
        </button>
       </a>

</div>


@endsection
