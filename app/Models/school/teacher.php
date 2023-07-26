<?php

namespace App\Models\School;

use App\Models\Memo;
use App\Models\School\Subject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Authenticatable
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
        'image',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function subjects():HasMany
    {
        return $this->hasMany(Subject::class);
    }

    public function messages():HasMany
    {
        return $this->hasMany(Memo::class);
    }

}
