
@extends('layouts.public')

@section("content")

<h1>hello world </h1>

<div class="container">
    <h1>DC Comics</h1>
    <div class="row">
        @foreach($comics as $comic)
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('img/' . $comic->thumb) }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text">{{ $comic->description }}</p>
                    <p class="card-text">{{ $comic->price }}</p>
                    <p class="card-text">{{ $comic->series }}</p>
                    <p class="card-text">{{ $comic->type }}</p>
                    
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
    
@endsection