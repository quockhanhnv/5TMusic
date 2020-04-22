<?php

namespace App\Providers;

use App\Http\View\Composers\CourseListSidebarComposer;
use App\Http\View\Composers\ProductListSidebarComposer;
use App\Http\View\Composers\SidebarCourseDetailComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('client.pages.products.includes.sidebar', ProductListSidebarComposer::class);
        View::composer(['client.pages.courses.includes.sidebar', 'client.layouts.partials.footer'], SidebarCourseDetailComposer::class);
        View::composer(['client.pages.courses.includes.sidebar', 'client.pages.courses.index', 'client.pages.products.includes.related-products'],
            CourseListSidebarComposer::class);
    }
}
