<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dhruvang>
 */
class DhruvangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'user_name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'remember_token' => Str::random(10),
        ];
    }
}
