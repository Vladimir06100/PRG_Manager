<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // create groupe with 6 personnage
            'name' => fake()->name(10),
            'description' =>fake()->text(100),
            'image' =>fake()->imageUrl(),
            'personnage_id' =>fake()->numberBetween(1, 6),
            'personnage_id1' =>fake()->numberBetween(1, 6),
            'personnage_id2' =>fake()->numberBetween(1, 6),
            'personnage_id3' =>fake()->numberBetween(1, 6),
            'personnage_id4' =>fake()->numberBetween(1, 6),
            'personnage_id5' =>fake()->numberBetween(1, 6),
        ];
    }
}
