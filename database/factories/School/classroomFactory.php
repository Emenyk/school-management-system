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
                'JSS3C',
                'SS1D',
                'SS2E',
                'SS3F',
                'JSS1G',
                'JSS2H',
                'JSS3I',
                '1SS1J'
            ]),
            'classTeacher' => fake()->name(),
            'status' => fake()->randomElement(['active', 'inactive']),
            'image' => null, // Replace null with your desired default image path if needed
        ];
    }
}


