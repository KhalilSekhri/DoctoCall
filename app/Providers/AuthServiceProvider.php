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
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // verifie si l'utilisateur à l'un des roles pour toutes les modification d'utilisateur
        Gate::define('manage-users', function ($user) {
            return $user->hasRole('admin');
        });
        
        //vrifie si l'user est admin pour l'edition d'utilisateur
        /*Gate::define('edit-settings', function ($user) {
            return $user->isAdmin();
        });

        // verifie si l'user est admin pour la suppression d'utilisateur
        Gate::define('delete-settings', function ($user) {
            return $user->isAdmin();
        });*/

    }
}
