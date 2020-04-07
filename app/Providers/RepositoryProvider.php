<?php

namespace App\Providers;

use App\Repositories\Category\CategoryRepository;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Product\ProductRepository;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        foreach ([
                     CategoryRepositoryInterface::class => CategoryRepository::class,
                     UserRepositoryInterface::class => UserRepository::class,
                     ProductRepositoryInterface::class => ProductRepository::class,
                 ] as $interface => $concrete) {

            app()->bind($interface, $concrete);
        }
    }
}
