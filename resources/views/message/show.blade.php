@extends('layouts.app')

@section('content')
<div class="container">



    <widgetbot
    server="706499274338336800"
    channel="706499274782933042"
    width="1000"
    height="740"
    shard="https://e.widgetbot.io"
></widgetbot>
<script src="https://cdn.jsdelivr.net/npm/@widgetbot/html-embed"></script>

<div class= "d-flex justify-content-center mt-4 mr-3">
<a href="{{ route('accueileleve') }}" class="btn btn-primary p-2 m-2 rounded-pill">Retourner sur mon toolbox</a>
</div>
</div>
@endsection

