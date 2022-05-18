@extends('layouts.main')

@section('title', "Comics List")
    
@section('main-content')
    <div class="container">
        <div class="row g-2">
            <div class="col-12 text-center">
                <a href="{{route("comics.create")}}" class="btn btn-warning">Add new comic</a>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
            @foreach ($comics as $comic)
                <div class="col text-center">
                    <div class="card p-3" style="width: 18rem;">
                        <img class="card-img-top img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->series }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->series }}</h5>
                            <p class="card-text">{{ substr($comic->description, 0, 50) . "..." }}</p>
                            <p>Price: €{{ $comic->price }}</p>
                            <a href="{{route("comics.show", $comic->id)}}" class="btn btn-primary">View Infos</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection