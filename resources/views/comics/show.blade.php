@extends('layouts.main')

@section('title', "Comics List")
    
@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>{{ $comic->series }}</h2>
                <h2>{{ $comic->title }}</h2>
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                <p>{{ $comic->description }}</p>
                <p>{{ $comic->price }}</p>
            </div>
        </div>
    </div>
    <p>
        Contenuto di prova show
    </p>

@endsection