<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Service;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{

    public function register():void
    {
        //
    }

    public function boot():void
    {
        Paginator::defaultView('pagination::default');

        Gate::define('destroy-service', function ($user, Service $service) {
            return $user->is_admin === true;
        });

        Gate::define('edit-service', function ($user, Service $service) {
            return $user->is_admin === true;
        });


    }
}

