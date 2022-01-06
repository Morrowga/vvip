<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

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

        Gate::define('isNormal', function($user) {
            return $user->package == 'normal';
         });
        
        Gate::define('isStandard', function($user) {
             return $user->package == 'standard';
         });
       
        Gate::define('isLuxury', function($user) {
             return $user->package == 'luxury';
         });
    }
}
