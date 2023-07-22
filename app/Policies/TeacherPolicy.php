<?php

namespace App\Policies;

use App\Models\User;
use App\Models\School\Teacher;
use Illuminate\Auth\Access\Response;

class TeacherPolicy
{
    public function isTeacher(Teacher $teacher)
    {
        return $teacher === auth('teacher')->user();
    }
}
