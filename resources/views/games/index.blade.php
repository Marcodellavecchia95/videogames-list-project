@extends('layouts.games')

@section("title", "Lista dei videogiochi")

@section("content")

<a href="{{route("games.create")}}" class="btn btn-primary">Aggiungi gioco</a>

<div class="row">
    @foreach ($games as $game)
   
    <div class="col-4 g-4">
        <div class="card" style="width: 18rem;">
  <img src="{{$game->cover_image}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$game->title}}</h5>
   <a class="m-2" href="{{route("games.show", $game->id)}}">Vai al dettaglio</a>
    <div class="buttons">
    <a href="{{route("games.edit", $game->id)}}" class="btn btn-outline-warning">Modifica</a>
    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Elimina
</button>
    </div>
  </div>
</div>
    </div>
    @endforeach
</div>

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