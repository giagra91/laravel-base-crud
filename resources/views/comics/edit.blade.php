@extends('layouts.main')

@section('title', "form")
    
@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <form class="row" action="{{route("comics.update", $comic->id)}}" method="post">
                    @csrf
                
                    @method("PUT")
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" placeholder="Title" value="{{ $comic->title }}">
                    @error('title')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" placeholder="Description" value="{{ $comic->description }}">
                    @error('description')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                
                    <label for="thumb">Thumb</label>
                    <input type="text" name="thumb" id="thumb" placeholder="Thumb" value="{{ $comic->thumb }}">
                    @error('thumb')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" step="0.01" placeholder="Price" value="{{ $comic->price }}">
                    @error('thumb')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    
                    <label for="series">Series</label>
                    <input type="text" name="series" id="series" placeholder="Series" value="{{ $comic->series }}">
                    @error('series')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    
                    <label for="sale_date">Sale date</label>
                    <input type="date" name="sale_date" id="sale_date" placeholder="Sale date" value="{{ $comic->sale_date }}">
                    @error('sale_date')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                
                    <label for="type">Type</label>
                    <input type="text" name="type" id="type" placeholder="Type" value="{{ $comic->type }}">
                    @error('type')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror

                    <input class="btn btn-primary my-2" type="submit" value="Save">
                </form>
            </div>
        </div>
    </div>
@endsection
