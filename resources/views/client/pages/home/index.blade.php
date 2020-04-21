@extends('client.layouts.layout')

@section('content')
    <div class="main-content">
        <!-- Section: home -->
        <section id="home">
            <div class="container-fluid p-0">

                <!-- Begin Slider -->
                @include('client.pages.home.includes.sliders')
                <!-- End Slider -->

            </div>
        </section>

        <!-- Begin Divider: Features, About -->
        @include('client.pages.home.includes.about-home')
        <!-- End Divider: Features, About -->

        <!-- Section: Courses -->
        @include('client.pages.home.includes.courses')

        <!-- Divider: Reservation Form -->
        @include('client.pages.home.includes.reservation', ['courses' => $courses])

        <!-- Section: Events -->
        @include('client.pages.home.includes.events')

        <!-- Section: Team -->
        @include('client.pages.home.includes.teams')

        <!-- Section: Gallery -->
        @include('client.pages.home.includes.gallery', ['galleryType' => $galleryTypes])

        <!-- Divider: Divider -->
        @include('client.pages.home.includes.dividers')

        <!-- Divider: Testimonials -->
    @include('client.pages.home.includes.testimonials')

        <!-- Section: post -->
        @include('client.pages.home.includes.posts', ['hotPosts' => $hotPosts])

        <!-- Divider: Clients -->
{{--        @include('client.pages.home.includes.clients')--}}
        <!-- end main-content -->
    </div>
@endsection
