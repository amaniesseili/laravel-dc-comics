@extends('layouts.public')

@section("title",comics->title."- dc Comics")

@section("content")

<h1>{{titolo}}</h1>

<div class="container">
    <h1>DC Comics</h1>
    <div class="row">
      <img src="{{comics->thumb}}" alt="">
      <h1>{{comics->title}}</h1>
      <p>{{comics->description}}</p>


    </div>
</div>
    
@endsection