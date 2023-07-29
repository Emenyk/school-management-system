<?php

namespace Database\Factories\School;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\school\classroom>
 */
class classroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'name' => fake()->randomElement([
                'JSS1A',
                'JSS2B',
                'JSS3B',
                'SS1A',
                'SS2',
                'SS3',
                'JSS1B',
                'JSS2A',
                'JSS3A',
                'SS1B'
            ]),
            'classTeacher' => fake()->name(),
            'status' => fake()->randomElement(['active', 'inactive']),
            'image' => null, // Replace null with your desired default image path if needed
        ];
    }
}


