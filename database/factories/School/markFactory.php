<?php

namespace Database\Factories\School;

use App\Models\School\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mark>
 */
class markFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $studentRandomIds = Student::pluck('id')->toArray();
        return [
            'type' => 'first term',
            'assignment' => fake()->randomFloat(2, 0, 20),
            'test' => fake()->randomFloat(2, 0, 20),
            'exam' => fake()->randomFloat(2, 0, 60),
            'academic_year_id' => 1,
            'student_id' => fake()->randomElement($studentRandomIds),
            'subject_id' => 1,

        ];
    }
}


