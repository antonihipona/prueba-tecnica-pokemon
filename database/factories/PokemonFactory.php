<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pokemon>
 */
class PokemonFactory extends Factory
{

    public function definition(): array
    {
        return [
            'number' => $this->faker->unique()->numberBetween(1, 898),
            'name' => $this->faker->name,
            'type1' => $this->faker->word,
            'type2' => $this->faker->word,
            'total' => $this->faker->numberBetween(1, 1000),
            'hp' => $this->faker->numberBetween(1, 255),
            'attack' => $this->faker->numberBetween(1, 255),
            'defense' => $this->faker->numberBetween(1, 255),
            'sp_atk' => $this->faker->numberBetween(1, 255),
            'sp_def' => $this->faker->numberBetween(1, 255),
            'speed' => $this->faker->numberBetween(1, 255),
            'generation' => $this->faker->numberBetween(1, 8),
            'legendary' => $this->faker->boolean,
        ];
    }
}
