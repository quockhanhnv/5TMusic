<?php

namespace App\Providers;

use App\Repositories\Category\CategoryRepository;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Course\CourseRepository;
use App\Repositories\Course\CourseRepositoryInterface;
use App\Repositories\Product\ProductRepository;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\Rate\RatingRepository;
use App\Repositories\Rate\RatingRepositoryInterface;
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
                     CourseRepositoryInterface::class => CourseRepository::class,
                     RatingRepositoryInterface::class => RatingRepository::class,
                 ] as $interface => $concrete) {

            app()->bind($interface, $concrete);
        }
    }
}
