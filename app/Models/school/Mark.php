<?php

namespace App\Models\School;

use App\Models\School\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mark extends Model
{
    use HasFactory;

    protected $fillable = [
        'session',
        'type',
        'marks',
        'subject',
        'students',
    ];

    public function student():BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
    public function subject():BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }
}
