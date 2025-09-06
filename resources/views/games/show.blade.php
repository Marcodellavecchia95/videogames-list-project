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
                <a href="#" class="btn btn-outline-warning">Modifica</a>
                <a href="#" class="btn btn-outline-danger">Elimina</a>
            </div>
        </div>
    </div>
</div>
@endsection
