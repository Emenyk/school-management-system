<?php

namespace Database\Factories\School;

use App\Models\School\Student;
use App\Models\School\Subject;
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
            'session' => '2023/2024',
            'type' => fake()->word(),
            'mark' => fake()->randomFloat(2, 0, 100),
            'student_id' => fake()->randomElement($studentRandomIds),
            'subject_id' => null,

        ];
    }
}


