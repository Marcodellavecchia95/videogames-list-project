@extends('layouts.games')

@section("title", "Lista dei videogiochi")

@section("content")
<div class="row">
    @foreach ($games as $game)
    <div class="col g-4">
        <div class="card" style="width: 18rem;">
  <img src="{{$game->cover_image}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$game->title}}</h5>
    <p class="card-text">{{$game->description}}</p>
    <div class="buttons">
    <a href="#" class="btn btn-warning">Modifica</a>
    <a href="#" class="btn btn-danger">Elimina</a>
    </div>
  </div>
</div>
    </div>
    @endforeach
</div>
@endsection