<?php

namespace App\Models\School;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attend extends Model
{
    use HasFactory;

    protected $fillable = [
        'uniqueID',
        'student_id',
        'class_id',
        'status',
    ];
    
}
