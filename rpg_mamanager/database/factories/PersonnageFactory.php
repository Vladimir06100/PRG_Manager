<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personnage>
 */
class PersonnageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'nom' => fake()->name(),
            'description' => fake()->text(),
            'specialite' => fake()->text(),
            'image' => fake()->imageUrl(),
            'magie' => fake()->numberBetween(1, 14),
            'force' => fake()->numberBetween(1, 14),
            'agilite' => fake()->numberBetween(1, 14),
            'intelligence' => fake()->numberBetween(1, 14),
            'vie' => fake()->numberBetween(20, 50),
            'user_id' => fake()->numberBetween(1, 10),
        ];
    }
}
