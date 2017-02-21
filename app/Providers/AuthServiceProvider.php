<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
		\Gate::define('quarx', function ($user) {
			return ($user->roles->first()->name === 'admin');
		});
		\Gate::define('admin', function ($user) {
			return ($user->roles->first()->name === 'admin');
		});
		\Gate::define('quarx', function ($user) {
			return ($user->roles->first()->name === 'admin');
		});
		\Gate::define('admin', function ($user) {
			return ($user->roles->first()->name === 'admin');
		});
		\Gate::define('quarx', function ($user) {
			return ($user->roles->first()->name === 'admin');
		});
		\Gate::define('admin', function ($user) {
			return ($user->roles->first()->name === 'admin');
		});
		\Gate::define('quarx', function ($user) {
			return ($user->roles->first()->name === 'admin');
		});
		\Gate::define('admin', function ($user) {
			return ($user->roles->first()->name === 'admin');
		});

        //
    }
}
