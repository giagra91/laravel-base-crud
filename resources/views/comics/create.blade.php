@extends('layouts.main')

@section('title', "form")
    
@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-3">
                <form class="row" action="{{route("comics.store")}}" method="post">
                    @csrf
                
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" placeholder="Title">
                
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" placeholder="Description">
                
                    <label for="thumb">Thumb</label>
                    <input type="text" name="thumb" id="thumb" placeholder="Thumb">
                
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" placeholder="Price">
                    
                    <label for="series">Series</label>
                    <input type="text" name="series" id="series" placeholder="Series">
                    
                    <label for="sale_date">Sale date</label>
                    <input type="date" name="sale_date" id="sale_date" placeholder="Sale date">
                
                    <label for="type">Type</label>
                    <input type="text" name="type" id="type" placeholder="Type">

                    <input class="my-2" type="submit" value="Save">
                </form>
            </div>
        </div>
    </div>
@endsection
