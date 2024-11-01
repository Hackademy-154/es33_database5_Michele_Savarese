<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use App\Http\Requests\BoardgameCreateRequest;
use App\Models\Category;

class GameController extends Controller
{
    //
    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('boardgame.create', compact('categories'));
    }

    public function library(BoardgameCreateRequest $request)
    {

        // dd($request->file('box'));
        $boardgame = Game::create(
            [
                'name' => $request->input('name'),
                'type' => $request->input('type'),
                'players' => $request->input('players'),
                'instructor' => $request->input('instructor'),
                'imgbox' => $request->has('box') ? $request->file('box')->store('box', 'public') : '/media/default.jpg',
            ]
        );
        $game = $boardgame;
        $game->categories()->attach($request->categories);

        // dd('controlla il database');
        return redirect()->route('welcome')->with('success', 'Gioco da tavolo inserito con successo');
    }
}
