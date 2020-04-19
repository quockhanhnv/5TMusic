<section id="courses" class="bg-silver-deep">
    <div class="container pb-40" id="books">
        <div class="section-title">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-uppercase title">KHÓA HỌC <span class="text-theme-colored2">PHỔ BIỂN</span></h2>
                    <p class="text-uppercase mb-0">Chọn khóa học bạn muốn</p>
                    <div class="double-line-bottom-theme-colored-2"></div>
                </div>
            </div>
        </div>

        {{--                Begin Course Slide--}}
        <div class="row mtli-row-clearfix">
            <div class="owl-carousel-3col" data-nav="true">
                @foreach($hotCourses as $hotCourse)
                    <div class="item">
                        <div class="course-single-item bg-white border-1px clearfix mb-30">
                            <div class="course-thumb">
                                <img class="img-fullwidth" alt="" src="{{ $hotCourse->course_avatar }}">
                                <div class="price-tag">{{ number_format($hotCourse->course_price, 0, '.', ',') }} k</div>
                            </div>
                            <div class="course-details clearfix p-20 pt-15">
                                <div class="course-top-part pull-left mr-40">
                                    <a href="{{ route('client.course.show',$hotCourse->course_slug.'-'.$hotCourse->id) }}"><h4 class="mt-0 mb-5">{{ $hotCourse->course_name }}</h4></a>
                                    <ul class="list-inline">
                                        <li class="review-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>25 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                                        <li>68 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                                    </ul>
                                </div>
                                <div class="author-thumb">
                                    <img src="{{ asset('template/images/course/xs1.jpg') }}" alt="" class="img-circle">
                                </div>
                                <div class="clearfix"></div>
                                <p class="course-description mt-20">{{ \Illuminate\Support\Str::limit($hotCourse->course_description, 123) }}</p>
                                <ul class="list-inline course-meta mt-15">
                                    <li>
                                        <h6>{{ $hotCourse->category->c_name }}</h6>
                                        <span>Trình độ</span>
                                    </li>
                                    <li>
                                        <h6>{{ $hotCourse->course_number_student }}</h6>
                                        <span>Số lượng</span>
                                    </li>
                                    <li>
                                        <h6><span class="course-time">{{ $hotCourse->course_duration }}</span></h6>
                                        <span>Thời gian</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{--                End Course Slide--}}
    </div>
</section>
