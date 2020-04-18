@extends('client.layouts.layout')

@section('content')
    <!-- Section: Courses -->
    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="{{ asset('template/images/bg/bg1.jpg') }}">
            <div class="container pt-120 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-theme-colored2 font-36">Course List</h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li class="active">Current Page</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Course list -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-9 blog-pull-right">
                        <div class="row">
                            @foreach($courses as $course)
                            <div class="course-list-block clearfix mb-30">
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumb"> <img alt="featured project" src="{{ $course->course_avatar }}" class="img-fullwidth mt-5"></div>
                                </div>
                                <div class="col-sm-6 col-md-8">
                                    <h4 class="line-bottom mt-0 mb-15 mt-sm-20">{{ $course->course_name }}</h4>
                                    <ul class="mb-10">
                                        <li><h4 class="mt-0 mb-5">Học phí :<span class="text-theme-colored2"> {{ number_format($course->course_price, 0, '.', ',') }} k</span></h4></li>
                                        <li class="review-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </li>
                                    </ul>
                                    <p>{{ \Illuminate\Support\Str::limit($course->course_description, 160) }}</p>
                                    <a class="btn btn-default btn-sm text-uppercase mt-5" href="{{ route('client.course.show',$course->course_slug.'-'.$course->id) }}">Xem chi tiết</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="sidebar sidebar-left mt-sm-30">
                            <div class="widget">
                                <h5 class="widget-title line-bottom">Archives</h5>
                                <ul class="list list-divider list-border">
                                    <li><a href="#"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Vehicle Accidents</a></li>
                                    <li><a href="#"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Family Law</a></li>
                                    <li><a href="#"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Personal Injury</a></li>
                                    <li><a href="#"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Personal Injury</a></li>
                                    <li><a href="#"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Case Investigation</a></li>
                                    <li><a href="#"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Business Taxation</a></li>
                                </ul>
                            </div>
                            <div class="widget">
                                <h5 class="widget-title line-bottom">Twitter Feed</h5>
                                <div class="twitter-feed list-border clearfix" data-username="Envato" data-count="2"></div>
                            </div>
                            <div class="widget">
                                <h5 class="widget-title line-bottom">Image gallery with text</h5>
                                <div class="owl-carousel-1col">
                                    <div class="item">
                                        <img src="https://placehold.it/365x230" alt="">
                                        <h4 class="title">This is a Demo Title</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae illum amet illo.</p>
                                    </div>
                                    <div class="item">
                                        <img src="https://placehold.it/365x230" alt="">
                                        <h4 class="title">This is a Demo Title</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae illum amet illo.</p>
                                    </div>
                                    <div class="item">
                                        <img src="https://placehold.it/365x230" alt="">
                                        <h4 class="title">This is a Demo Title</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae illum amet illo.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="widget">
                                <h5 class="widget-title line-bottom">Tags</h5>
                                <div class="tags">
                                    <a href="#">travel</a>
                                    <a href="#">blog</a>
                                    <a href="#">lifestyle</a>
                                    <a href="#">feature</a>
                                    <a href="#">mountain</a>
                                    <a href="#">design</a>
                                    <a href="#">restaurant</a>
                                    <a href="#">journey</a>
                                    <a href="#">classic</a>
                                    <a href="#">sunset</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <nav>
                            <ul class="pagination theme-colored xs-pull-center m-0">
                                {{ $courses->links() }}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->
@endsection
