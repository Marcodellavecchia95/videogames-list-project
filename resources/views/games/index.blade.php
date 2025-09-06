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
    <a href="#" class="btn btn-outline-warning">Modifica</a>
    <a href="#" class="btn btn-outline-danger">Elimina</a>
    </div>
  </div>
</div>
    </div>
    @endforeach
</div>
@endsection