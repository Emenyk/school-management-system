<?php

namespace App\Models\School;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    use HasFactory;

    protected $fillable = [

        'asset',
        'author',
        'year',
        'classroom',
        'file',
        'status',
        'price',
        'type',

    ];
}
