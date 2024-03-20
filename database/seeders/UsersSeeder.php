<?php

namespace Database\Seeders;

use App\Models\Guild;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create some guilds
        $guilds = Guild::factory()->count(3)->create();

        // Create some users
        User::factory()->create(['name' => 'Ash Ketchum']);
        // No guild
        User::factory()->count(2)->create();

        // Assign the rest of the users to a guild
        $guilds->each(function (Guild $guild): void {
            User::factory()->count(3)->create(['guild_id' => $guild->id]);
        });
    }
}
