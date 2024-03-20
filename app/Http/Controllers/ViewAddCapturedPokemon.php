<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Models\User;
use Illuminate\Http\Request;

class ViewAddCapturedPokemon extends Controller
{
    public function __invoke()
    {
        $pokemons = Pokemon::all();
        $users = User::all();
        $timezone_offset = now()->offsetHours;
        return view('add-captured-pokemon', ['pokemons' => $pokemons, 'users' => $users]);
    }
}
