@extends('layouts.app')

@section('content')
    <div class="container d-flex align-items-center my-5">
        <div class="cards">
            @foreach ($movies as $movie)
                <div class="box-movie d-flex justify-content-center">
                    <div class="img-box">
                        <img src="{{$movie->image}}" alt="">
                    </div>
                    <div class="d-flex flex-column w-50 description">
                        <div class="title ms-3">Titolo: <strong>{{$movie->title}}</strong></div>
                        <div class="org-title ms-3">Titolo originale: <strong>{{$movie->original_title}}</strong></div>
                        <div class="nationality ms-3">Nazionalità: <strong>{{$movie->nationality}}</strong></div>
                        <div class="date ms-3">Data di uscita: <strong>{{$movie->date}}</strong></div>
                        <div class="vote ms-3">Voto: <strong>{{$movie->vote}}</strong></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection