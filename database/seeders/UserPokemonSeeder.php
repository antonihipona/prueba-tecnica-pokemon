<?php

namespace Database\Seeders;

use App\Models\Pokemon;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class UserPokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // If user table if empty call user seeder
        if (User::count() === 0) {
            $this->call(UsersSeeder::class);
        }

        // If pokemon table if empty call load from csv command
        if (Pokemon::count() === 0) {
            Artisan::call('app:load-pokedex');
        }

        $users = User::all();
        $pokemons = Pokemon::all();

        for ($i = 1; $i <= 100; $i++) {
            $user = $users->random();
            $pokemon = $pokemons->random();
            $random_date = now()->subDays(rand(1, 30))->subHours(rand(1, 24))->subMinutes(rand(1, 60));
            $user->pokemons()->attach($pokemon->id, ['captured_at' => $random_date]);
            $user->save();
        }
    }
}
