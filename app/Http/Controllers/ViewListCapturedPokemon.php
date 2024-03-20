<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;

class ViewListCapturedPokemon extends Controller
{
    public function __invoke()
    {
        $pokemons_paginated = Pokemon::join('user_pokemon', 'pokedex.id', '=', 'user_pokemon.pokemon_id')
            ->join('users', 'user_pokemon.user_id', '=', 'users.id')
            ->leftJoin('guild', 'users.guild_id', '=', 'guild.id')
            ->select('pokedex.*', 'user_pokemon.captured_at as captured_at', 'users.name as user_name', 'guild.name as guild_name')
            ->orderBy('user_pokemon.captured_at', 'desc')
            ->paginate(10);
        return view('list-captured-pokemon', ['pokemons' => $pokemons_paginated]);
    }
}
