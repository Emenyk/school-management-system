<?php

namespace App\Models\School;

use App\Models\School\Student;
use App\Models\School\Subject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classroom extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'classTeacher',
        'status',
    ];

    public function students():HasMany
    {
        return $this->hasMany(Student::class);
    }
     public function subjects():HasMany
    {
        return $this->hasMany(Subject::class);
    }

}
