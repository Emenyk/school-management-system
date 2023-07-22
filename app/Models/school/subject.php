<?php

namespace App\Models\School;

use App\Models\School\Student;
use App\Models\School\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
    ];

    public function classroom():BelongsTo
    {
        return $this->belongsTo(Classroom::class);
    }
    public function teacher():BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }
    public function students():BelongsToMany
    {
        return $this->belongsToMany(Student::class, 'student_subject');
    }
    public function marks():HasMany
    {
        return $this->hasMany(Mark::class);
    }


}
