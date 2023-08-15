<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AcademicYear;
use App\Models\Memo;
use App\Models\School\Attend;
use App\Models\School\Classroom;
use App\Models\School\Library;
use App\Models\School\Mark;
use App\Models\School\Parents;
use App\Models\School\Student;
use App\Models\School\Subject;
use App\Models\School\Teacher;
use GuzzleHttp\Psr7\Message;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        AcademicYear::factory()->create();
        \App\Models\User::factory()->create([
            'name' => 'Admin Bola',
            'email' => 'adminbola@gmail.com',
            'password' => Hash::make('adminpassword')
        ]);
        Classroom::factory(10)->create();
        Student::factory(20)->create();
        Teacher::factory(10)->create();
        Subject::factory(10)->create();
        Parents::factory(10)->create();
        Library::factory(10)->create();
        Attend::factory(4)->create();
        Student::factory()->create([
            'name' => 'Student Bola',
            'email' => 'studentbola@gmail.com',
            'password' => Hash::make('studentpassword')
        ]);
        Teacher::factory()->create([
            'name' => 'Teacher Bola',
            'email' => 'teacherbola@gmail.com',
            'password' => Hash::make('teacherpassword')
        ]);
        Parents::factory()->create([
            'name' => 'Parent Bola',
            'email' => 'parentbola@gmail.com',
            'password' => Hash::make('parentpassword')
        ]);
        Mark::factory(10)->create([
            'subject_id' => 4
        ]);
        Memo::create([
            'user_id' => 1,
            'subject' => 'complain',
            'body'    => 'please Admin we need more ink in Jss1b, thank you ma!'
        ]);
        Memo::create([
            'teacher_id' => 11,
            'subject' => 'complain',
            'body'    => 'please teacher we need you in Jss1b, thank you ma!'
        ]);
        Memo::create([
            'student_id' => 21,
            'subject' => 'Assignment',
            'body'    => 'please my dear I want to see you after class, thank you ma! Its me student Bola'
        ]);
        Memo::create([
            'parent_id' => 11,
            'subject' => 'Assignment',
            'body'    => 'please I will like to see both of you this morning - Admin'
        ]);

        $student = Student::find(1);
        $student->classroom_id = 1;
        $student->save();
    }
}
