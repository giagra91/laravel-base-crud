@extends('layouts.main')

@section('title', "form")
    
@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-3">
                <form action="{{route("comics.store")}}" method="post">
                    @csrf
                
                    <input type="text" name="title" id="title" placeholder="Title">
                
                    <input type="text" name="description" id="description" placeholder="Description">
                
                    <input type="text" name="thumb" id="thumb" placeholder="Thumb">
                
                    <input type="number" name="price" id="price" placeholder="Price">
                    
                    <input type="text" name="series" id="series" placeholder="Series">
                    
                    <input type="date" name="sale_date" id="sale_date" placeholder="Sale date">
                
                    <input type="text" name="type" id="type" placeholder="Type">

                    <input type="submit" value="Save">
                </form>
            </div>
        </div>
    </div>
@endsection

