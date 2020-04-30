<!DOCTYPE html>
<html lang="fr">


@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" class="w-100">
        </div>
        <div class="col-4">

            <div>

                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100"
                            style="max-width:50px;">
                    </div>
                    <div>
                        <div class="font-weight-bold">
                            <a href="/profile/{{$post->user->id}}">
                                <span class="text-dark">{{ $post->user->surname}}</span>
                            </a>
                        </div>
                    </div>
                </div>


                <hr>

                <p
                    style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size:25px;  font-style: italic;">
                    {{ $post->légende }}
                </p>

            </div>


        </div>
    </div>

</div>
@endsection

</body>

</html>
