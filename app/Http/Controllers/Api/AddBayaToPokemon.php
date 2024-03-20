<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AddBayaToPokemon extends Controller
{
    public function __invoke(Request $request, Pokemon $pokemon)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
        ]);

        $validator->validate();

        // Remove all previous items (pociones and bayas) from the pokemon
        $pokemon->pocion()->delete();
        $pokemon->baya()->delete();

        // Create
        $pokemon->baya()->create([
            'nombre' => $request->input('nombre'),
        ]);
    }
}
