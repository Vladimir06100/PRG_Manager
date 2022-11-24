<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
            return [
            'pseudo'=>fake()->name(),
            'nom' => fake()->name(),
            'prenom' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => Str::random(10), // password
            'remember_token' => Str::random(10),
        ];
    }
}
