<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\BoardGame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage()
    {
        $boardgames = Game::all(); //!collezione di libri, collezione è un nome tecnico
        return view('welcome', compact('boardgames'));
    }
public function profile()
{
    return view('profile');
}

public function delete(){
$user= Auth::user();

    // Auth::user()->delete();
    dd('controlla il database');
}

    //
}
