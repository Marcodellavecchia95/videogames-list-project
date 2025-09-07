<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();

        return response()->json([
            "success" => true,
            "results" => $games
        ]);
    }

    public function show(Game $game)
    {
        $game->load("consoles");

        return response()->json([
            "success" => true,
            "results" => $game
        ]);
    }
}
