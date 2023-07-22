<?php

namespace Database\Factories\School;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\school\library>
 */
class libraryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [    
           
            'asset' => fake()->word(),
            'author' => fake()->name(),
            'year' => fake()->numberBetween(1900, 2023),
            'classroom' => fake()->word(),
            'status' => fake()->word(),
            'type' => fake()->word(),
            'price' => fake()->numberBetween(500, 10000),
            'file' => null, // Replace null with your desired default file path if needed
        ];
    }
}
