<?php

namespace Database\Factories\School;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\school\parents>
 */
class parentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => bcrypt('password'), // Replace 'password' with your desired default password
            'telephone' => fake()->phoneNumber(),
            'gender' => fake()->randomElement(['Male', 'Female']),
            'address' => fake()->address(),
            'image' => null, // Replace null with your desired default image path if needed
        ];
    }
}

