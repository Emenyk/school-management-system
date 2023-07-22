<?php

namespace App\Policies;

use App\Models\School\Parents;
use Illuminate\Auth\Access\Response;

class ParentsPolicy
{
    public function isParents(Parents $parents)
    {
        return $parents === auth('parents')->user();
    }
}
