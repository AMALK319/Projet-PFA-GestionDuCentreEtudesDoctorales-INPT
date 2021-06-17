<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('professeur', function (User $user) {
            return $user->role_id === 1;
        });
        Gate::define('chef_cedoc', function (User $user) {
            return $user->role_id === 2;
        });
        Gate::define('directeur_these', function (User $user) {
            return $user->role_id === 3;
        });
        //
    }
}
