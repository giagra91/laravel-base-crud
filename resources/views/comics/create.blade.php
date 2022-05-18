@extends('layouts.main')

@section('title', "form")
    
@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <form class="row" action="{{route("comics.store")}}" method="post">
                    @csrf
                
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" placeholder="Title">
                    @error('title')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" placeholder="Description">
                    @error('description')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                
                    <label for="thumb">Thumb</label>
                    <input type="text" name="thumb" id="thumb" placeholder="Thumb">
                    @error('thumb')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" step="0.01" placeholder="Price">
                    @error('thumb')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    
                    <label for="series">Series</label>
                    <input type="text" name="series" id="series" placeholder="Series">
                    @error('series')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    
                    <label for="sale_date">Sale date</label>
                    <input type="date" name="sale_date" id="sale_date" placeholder="Sale date">
                    @error('sale_date')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                
                    <label for="type">Type</label>
                    <input type="text" name="type" id="type" placeholder="Type">
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
