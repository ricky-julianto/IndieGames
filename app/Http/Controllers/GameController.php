<?php

namespace App\Http\Controllers;

use App\Models\Game;

class GameController extends Controller
{
    public function home()
    {
        return view('games.home');
    }

   public function index()
{
    $games = Game::paginate(6);

    return view('games.index', compact('games'));
}

    public function show($id)
    {
        $game = Game::findOrFail($id);

        return view('games.show', compact('game'));
    }
}
