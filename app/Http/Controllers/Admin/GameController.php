<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Console;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::with("consoles")->get();
        return view("games.index", compact("games"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $games = Game::all();

        $consoles = Console::all();

        return view("games.create", compact("games", "consoles"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newGame = new Game;

        $newGame->title = $data["title"];
        $newGame->description = $data["description"];
        $newGame->release_date = $data["release_date"];
        $newGame->cover_image = $data["cover_image"];

        $newGame->save();

        if ($request->has("consoles")) {

            $newGame->consoles()->attach($data["consoles"]);
        }

        return redirect()->route("games.index", $newGame);
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {

        return view("games.show", compact("game"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
