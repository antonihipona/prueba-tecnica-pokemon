<?php

namespace Tests\Feature;

use App\Models\Pokemon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AddPocionToPokemonTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_add_pocion_to_pokemon(): void
    {
        $pokemon = Pokemon::factory()->create();
        $body = [
            'nombre' => 'Pocion de vida',
        ];
        $response = $this->postJson(route('api.pokemon.add-pocion', ['pokemon' => $pokemon->id]), $body);

        $response->assertStatus(200);

        $this->assertDatabaseHas('pociones', $body);
    }
}
