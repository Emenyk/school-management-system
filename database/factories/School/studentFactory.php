<?php

namespace Database\Factories\School;

use App\Models\School\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\school\student>
 */
class studentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $classroomIds = Classroom::pluck('id')->toArray();
        return [
            
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => bcrypt('password'), // Replace 'password' with your desired default password
            'DOB' => fake()->date(),
            'gender' => fake()->randomElement(['male', 'female']),
            'address' => fake()->address(),
            'telephone' => fake()->phoneNumber(),
            'classroom_id' => fake()->randomElement($classroomIds), // Replace null with your desired default classroom ID if needed
            'image' => null, // Replace null with your desired default image path if needed
        ];
    }
}

