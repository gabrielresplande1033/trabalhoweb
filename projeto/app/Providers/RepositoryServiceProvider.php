<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\ReservaRepository::class, \App\Repositories\ReservaRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\QuartoRepository::class, \App\Repositories\QuartoRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\HotelRepository::class, \App\Repositories\HotelRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\HotelImagemRepository::class, \App\Repositories\HotelImagemRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ImagemRepository::class, \App\Repositories\ImagemRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\UserRepository::class, \App\Repositories\UserRepositoryEloquent::class);
        //:end-bindings:
    }
}
