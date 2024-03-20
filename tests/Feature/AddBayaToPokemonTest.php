<?php

namespace Tests\Feature;

use App\Models\Pokemon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AddBayaToPokemonTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_add_baya_to_pokemon(): void
    {
        $pokemon = Pokemon::factory()->create();
        $body = [
            'nombre' => 'Baya aranja',
        ];
        $response = $this->postJson(route('api.pokemon.add-baya', ['pokemon' => $pokemon->id]), $body);

        $response->assertStatus(200);

        $this->assertDatabaseHas('bayas', $body);
    }
}
