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
                                <h5 class="widget-title line-bottom">Sản Phẩm Mới Nhất</h5>
                                <ul class="list list-divider list-border">
                                    @foreach($products as $product)
                                        <li>
                                            <a href="{{ route('client.product.show', $product->pro_slug . '-' . $product->id) }}">
                                                <i class="fa fa-hand-o-right"></i> &nbsp;{{ $product->pro_name }} &nbsp;<span class="label label-danger">New</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="widget">
                                <h5 class="widget-title line-bottom">Tags</h5>
                                <div class="tags">
                                    <a href="#">Khóa học</a>
                                    <a href="#">Guitar</a>
                                    <a href="#">5TGuitar</a>
                                    <a href="#">5T-AD</a>
                                    <a href="#">Classic</a>
                                    <a href="#">Acoustic</a>
                                    <a href="#">Music</a>
                                    <a href="#">5T-Music</a>
                                    <a href="#">Học đàn</a>
                                    <a href="#">Tập đàn</a>
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
