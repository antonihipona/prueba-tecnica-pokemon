<?php

use App\Http\Controllers\ActionAddCapturedPokemon;
use App\Http\Controllers\ViewAddCapturedPokemon;
use App\Http\Controllers\ViewListCapturedPokemon;
use Illuminate\Support\Facades\Route;

Route::get('/', ViewListCapturedPokemon::class);
Route::get('/add-captured-pokemon', ViewAddCapturedPokemon::class);

Route::post('/add-captured-pokemon', ActionAddCapturedPokemon::class);
