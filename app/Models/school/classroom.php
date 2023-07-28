<?php

namespace App\Models\School;

use App\Models\School\Student;
use App\Models\School\Subject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    public function subjects():BelongsToMany
    {
        return $this->belongsToMany(Subject::class, 'classroom_subject');
    }

}
