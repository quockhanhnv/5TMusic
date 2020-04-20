<?php

namespace App\Providers;

use App\Repositories\Category\CategoryRepository;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Course\CourseRepository;
use App\Repositories\Course\CourseRepositoryInterface;
use App\Repositories\Gallery\GalleryRepository;
use App\Repositories\Gallery\GalleryRepositoryInterface;
use App\Repositories\Order\OrderRepository;
use App\Repositories\Order\OrderRepositoryInterface;
use App\Repositories\OrderDetail\OrderDetailRepository;
use App\Repositories\OrderDetail\OrderDetailRepositoryInterface;
use App\Repositories\Post\PostRepository;
use App\Repositories\Post\PostRepositoryInterface;
use App\Repositories\Product\ProductRepository;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\Rate\RatingRepository;
use App\Repositories\Rate\RatingRepositoryInterface;
use App\Repositories\Reservation\ReservationRepository;
use App\Repositories\Reservation\ReservationRepositoryInterface;
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
        foreach ([
                     CategoryRepositoryInterface::class => CategoryRepository::class,
                     UserRepositoryInterface::class => UserRepository::class,
                     ProductRepositoryInterface::class => ProductRepository::class,
                     CourseRepositoryInterface::class => CourseRepository::class,
                     RatingRepositoryInterface::class => RatingRepository::class,
                     OrderRepositoryInterface::class => OrderRepository::class,
                     OrderDetailRepositoryInterface::class => OrderDetailRepository::class,
                     PostRepositoryInterface::class => PostRepository::class,
                     ReservationRepositoryInterface::class => ReservationRepository::class,
                     GalleryRepositoryInterface::class => GalleryRepository::class,

                 ] as $interface => $concrete) {

            app()->bind($interface, $concrete);
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
