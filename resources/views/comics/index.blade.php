@extends('layouts.main')

@section('title', "Comics List")
    
@section('main-content')
    <div class="container">
        <div class="row g-2">
            @foreach ($comics as $comic)
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ $comic->thumb }}" alt="{{ $comic->series }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->series }}</h5>
                            <p class="card-text">{{ substr($comic->description, 0, 50) . "..." }}</p>
                            <a href="{{route("comics.show", $comic->id)}}" class="btn btn-primary">View Infos</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection