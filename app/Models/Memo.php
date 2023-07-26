<?php

namespace App\Models;

use App\Models\School\Parents;
use App\Models\School\Student;
use App\Models\School\Teacher;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Memo extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject',
        'body',
        'attachment',
        'reciever',
    ];

    public function teacher():BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }
    public function parent():BelongsTo
    {
        return $this->belongsTo(Parents::class);
    }
    public function student():BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
    public function admin():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
