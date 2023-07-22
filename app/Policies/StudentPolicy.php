<?php

namespace App\Policies;

use App\Models\User;
use App\Models\School\Student;
use Illuminate\Auth\Access\Response;

class StudentPolicy
{
   public function isStudent(Student $student)
   {
        return $student === auth('student')->user();
   }
}
