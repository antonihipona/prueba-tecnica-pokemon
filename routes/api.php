<?php

use App\Http\Controllers\Api\AddBayaToPokemon;
use App\Http\Controllers\Api\AddPocionToPokemon;
use Illuminate\Support\Facades\Route;

// 7.1 Realizar un endpoint que API RESTful que le asigne uno de estos objetos al Pokémon capturado
Route::post('/pokemon/{pokemon}/baya', AddBayaToPokemon::class)
    ->name('api.pokemon.add-baya');
Route::post('/pokemon/{pokemon}/pocion', AddPocionToPokemon::class)
    ->name('api.pokemon.add-pocion');