@extends('layouts.main')

@section('title', "Comics List")
    
@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Serie: {{ $comic->series }}</h2>
                <h2>{{ $comic->title }}</h2>
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                <p>{{ $comic->description }}</p>
                <h3>Price: €{{ $comic->price }}</h3>
            </div>
            <div class="col-12 d-flex justify-content-evenly">
                <a href="{{route("comics.show", $comic->id-1)}}" class="btn btn-success">Prev</a>
                <a href="{{route("comics.show", $comic->id+1)}}" class="btn btn-success">Next</a>
            </div>
        </div>
    </div>
@endsection