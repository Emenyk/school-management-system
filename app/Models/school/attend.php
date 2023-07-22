<?php

namespace App\Models\School;

use App\Models\School\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attend extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject',
        'mark',
    ];

    public function student():BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

}
