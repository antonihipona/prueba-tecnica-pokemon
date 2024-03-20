<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ActionAddCapturedPokemon extends Controller
{
    public function __invoke(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'pokemon_id' => 'required|exists:pokedex,id',
            'captured_at' => 'required|date|before_or_equal:now',
        ]);

        if ($validator->fails()) {
            return redirect('/add-captured-pokemon')
                ->withErrors($validator)
                ->withInput();
        }

        User::find($request->input('user_id'))
            ->pokemons()
            ->attach($request->input('pokemon_id'), ['captured_at' => $request->input('captured_at')]);

        return redirect('/');
    }
}
