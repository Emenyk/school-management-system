<?php

namespace Database\Factories\School;

use App\Models\School\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attend>
 */
class attendFactory extends Factory
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
            'subject' => 'Biology',
            'student_id' => fake()->randomElement($studentRandomIds)
        ];
    }
}
