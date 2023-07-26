<?php

namespace App\Models\School;

use App\Models\Memo;
use App\Models\School\Mark;
use App\Models\School\Attend;
use App\Models\School\Parents;
use App\Models\School\Subject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [

        'name',
        'email',
        'password',
        'DOB',
        'gender',
        'address',
        'telephone',
        'classroom_id',
        'image',

    ];



    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function classroom():BelongsTo
    {
        return $this->belongsTo(Classroom::class);
    }

    public function subjects():BelongsToMany
    {
        return $this->belongsToMany(Subject::class, 'student_subject');
    }

    public function attendance():HasMany
    {
        return $this->hasMany(Attend::class);
    }

    public function marks():HasMany
    {
        return $this->hasMany(Mark::class);
    }

    public function parents():BelongsToMany
    {
        return $this->belongsToMany(Parents::class, 'student_parent');
    }

    public function messages():HasMany
    {
        return $this->hasMany(Memo::class);
    }

}
