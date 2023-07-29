<?php

namespace App\Models;

use App\Models\School\Mark;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AcademicYear extends Model
{
    use HasFactory;

    protected $fillable = [ 'academicYear', 'term' ];

    public function mark():HasMany
    {
        return $this->hasMany(Mark::class);
    }

    public function pin():HasMany
    {
        return $this->hasMany(Pin::class);
    }

}
