<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\School\Parents;
use App\Models\School\Student;
use App\Models\School\Teacher;
use App\Policies\AdminPolicy;
use App\Policies\UsersPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
        Gate::define('isAdmin', [AdminPolicy::class, 'isAdmin']);
        Gate::define('isStudent', [StudentPolicy::class, 'isStudent']);
        Gate::define('isTeacher', [TeacherPolicy::class, 'isTeacher']);
        Gate::define('isParents', [ParentsPolicy::class, 'isParents']);
    }
}


