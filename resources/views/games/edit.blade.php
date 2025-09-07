@extends("layouts.games")

@section("title", "Modifica il gioco")

@section("content")
<form action="{{ route('games.update', $game->id) }}" method="POST">
    @csrf 
   @method("PUT")
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input value="{{$game->title}}" type="text" class="form-control" id="title" name="title" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <input value="{{$game->description}}"  class="form-control" id="description" name="description" rows="3" required></textarea>
    </div>

    <div class="mb-3">
        <label for="cover_image" class="form-label">URL immagine</label>
        <input value="{{$game->cover_image}}" type="text" class="form-control" id="cover_image" name="cover_image">
    </div>

    <div class="mb-3">
        <label for="release_date" class="form-label">Data di uscita</label>
        <input value="{{$game->release_date}}" type="date" class="form-control" id="release_date" name="release_date">
    </div>

     <div class=" me-3 my-3 g-3 d-flex flex-wrap">
        @foreach($consoles as $console)

        <div class="technology me-2">
          <input type="checkbox" name="consoles[]" value="{{$console->id}}" id="console-{{$console->id}}" {{$game->consoles->contains($console->id) ? "checked" : "" }}>
          <label for="{{$console->id}}">{{$console->name}}</label>
        </div>

        @endforeach
      </div>

    <button type="submit" class="btn btn-warning">Modifica</button>
</form>


@endsection