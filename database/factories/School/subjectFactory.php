<?php

namespace Database\Factories\School;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\school\subject>
 */
class subjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [


            'name' => fake()->randomElement(            [
                'Mathematics',
                'Agriculture',
                'History',
                'English',
                'Geography',
                'Physics',
                'Chemistry',
                'Biology',
                'Computer Science',
                'Literature',
                'CRS',
            ]),
            'image' => null, // Replace null with your desired default image path if needed
            'description' => fake()->text(),
        ];
    }
}


