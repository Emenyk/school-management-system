<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\School\Attend;
use App\Models\School\Classroom;
use App\Models\School\Library;
use App\Models\School\Mark;
use App\Models\School\Parents;
use App\Models\School\Student;
use App\Models\School\Subject;
use App\Models\School\Teacher;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        Classroom::factory(10)->create();
        Student::factory(10)->create();
        Teacher::factory(10)->create();
        Subject::factory(10)->create();
        Parents::factory(10)->create();
        Library::factory(10)->create();
        Attend::factory(10)->create();
        Mark::factory(10)->create([
            'subject_id' => 4
        ]);

        $student = Student::find(1);
        $student->classroom_id = 1;
        $student->save();
    }
}
