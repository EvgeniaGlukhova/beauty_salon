<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Регистрация сервисов.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Запуск всех сервисов.
     *
     * @return void
     */
    public function boot()
    {
        // Здесь не нужно вызывать registerPolicies
    }

    public function registerPolicies()
    {
        Gate::define('delete-service', function ($user, Service $service) {
            return $user->id === $service->cosmetologist_id;
        });
    }

}
