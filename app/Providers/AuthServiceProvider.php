<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\URL;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('administrador', function ($user) {
            $user = $user->toArray();
            return in_array('administrador', $user['roles'] ?? []);
        });
        Gate::define('gerente', function ($user) {
            $user = $user->toArray();
            return in_array('gerente', $user['roles'] ?? []);
        });
        Gate::define('desenvolvedor', function ($user) {
            $user = $user->toArray();
            return in_array('desenvolvedor', $user['roles'] ?? []);
        });

        Gate::define('resource', function ($user) {
            $user = $user->toArray();
            $currentURL = URL::current();
            $currentURL = explode('/', $currentURL);
            $currentURL = $currentURL[count($currentURL)-1];
            return in_array($currentURL, $user['permissions'] ?? []);
        });
    }
}
