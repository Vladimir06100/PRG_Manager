<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // join table with user and personnage
            'personnage_id' =>fake()->numberBetween(1, 6),
            'user_id' =>fake()->numberBetween(1, 6),
            'response' =>fake()->boolean(),
        ];
    }
}
