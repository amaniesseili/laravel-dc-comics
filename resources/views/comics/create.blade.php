@extends('layouts.public')

@section('content')
<div class="container">
    <h1>Aggiungi un nuovo fumetto</h1>
    <form action="{{  }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="author">Autore</label>
            <input type="text" class="form-control" id="author" name="author" required>
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</div>
@endsection