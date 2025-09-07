@extends('layouts.games')

@section("title", "Dettagli del gioco")

@section("content")
<div class="d-flex justify-content-center mt-5">
    <div class="card" style="width: 18rem;">
        <img src="{{ $game->cover_image }}" class="card-img-top" alt="{{ $game->title }}">
        <div class="card-body">
            <h5 class="card-title"><strong>{{ $game->title }}</strong></h5>
            <p class="card-text">{{ $game->description }}</p>

            <p><strong>Console:</strong></p>
            @forelse ($game->consoles as $console)
                <span >{{ $console->name }}</span>
            @empty
                <span class="text-muted">Nessuna console</span>
            @endforelse

            <p class="mt-2"><strong>Data d'uscita:</strong> <br>{{ $game->release_date }}</p>

            <div class="buttons mt-3">
                <a href="{{route("games.edit", $game->id)}}" class="btn btn-outline-warning">Modifica</a>
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Elimina
</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    Stai per eliminare il gioco, sei sicuro?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        <form method="POST" action="{{route("games.destroy" , $game->id)}}">
            @csrf
             @method("DELETE")
             <input type="submit" class="btn btn-danger" value="Elimina">

        </form>
      
      </div>
    </div>
  </div>
</div>

@endsection
