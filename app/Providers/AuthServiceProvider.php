<?php

namespace App\Providers;

use App\Repositories\customers\customersRepository;
use App\Repositories\customers\customersRepositoryInterface;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
    public function register()
    {
        $this->app->singleton(
            customersRepositoryInterface::class,
            customersRepository::class
        );
    }
}
