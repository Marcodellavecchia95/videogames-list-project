@extends('layouts.games')

@section('title', 'Aggiungi un gioco')

@section('content')


<form action="{{ route('games.store') }}" method="POST">
    @csrf 
    
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <input  class="form-control" id="description" name="description" rows="3" required></textarea>
    </div>

    <div class="mb-3">
        <label for="cover_image" class="form-label">URL immagine</label>
        <input type="text" class="form-control" id="cover_image" name="cover_image">
    </div>

    <div class="mb-3">
        <label for="release_date" class="form-label">Data di uscita</label>
        <input type="date" class="form-control" id="release_date" name="release_date">
    </div>

     <div class=" me-3 my-3 g-3 d-flex flex-wrap">
        @foreach($consoles as $console)

        <div class="technology me-2">
          <input type="checkbox" name="consoles[]" value="{{$console->id}}" id="console-{{$console->id}} ">
          <label for="{{$console->id}}">{{$console->name}}</label>
        </div>

        @endforeach
      </div>

    <button type="submit" class="btn btn-primary">Aggiungi</button>
</form>
@endsection 


