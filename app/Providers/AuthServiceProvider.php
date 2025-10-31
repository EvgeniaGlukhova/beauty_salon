<?php
namespace App\Providers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Nette\Utils\Paginator;

use App\Models\User;
use App\Models\Service;


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
        //$this->registerPolicies();
        Paginator::defaultView('pagination::bootstrap-4');

        Gate::define('destroy-item', function(User $user, Item $item) {
            return $user->is_admin OR $item->price < 1000;
    });

        Gate::define('create-service', function (User $user) {
            return true;
        });

        Gate::define('delete-service', function ($user, Service $service) {
            return $user->id === $service->cosmetologist_id;
        });



    }

//    public function registerPolicies()
//    {
//        Gate::define('delete-service', function ($user, Service $service) {
//            return $user->id === $service->cosmetologist_id;
//        });
//    }

}
