<?php

namespace App\Models\School;

use App\Models\Memo;
use App\Models\School\Student;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Parents extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'telephone',
        'gender',
        'address',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function students():BelongsToMany
    {
        return $this->belongsToMany(Student::class, 'student_parent');
    }

    public function messages():HasMany
    {
        return $this->hasMany(Memo::class);
    }

}
