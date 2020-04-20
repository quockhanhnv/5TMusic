@extends('client.layouts.layout')

@section('content')
    <div class="main-content">
        <!-- Section: home -->
        <section id="home">
            <div class="container-fluid p-0">

                <!-- Begin Slider -->
                @include('client.pages.home.includes.slide')
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
        <section>
            <div class="container pb-50">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="text-uppercase line-bottom-theme-colored-2 mt-0 line-height-1"><i class="fa fa-calendar mr-10"></i><span class="text-theme-colored2">SỰ KIỆN</span> NỔI BẬT </h3>
                            <article>
                                <div class="event-block">
                                    <div class="event-date text-center">
                                        <ul class="text-white font-18 font-weight-600">
                                            <li class="border-bottom">28</li>
                                            <li class="">Feb</li>
                                        </ul>
                                    </div>
                                    <div class="event-meta border-1px pl-40">
                                        <div class="event-content pull-left flip">
                                            <h4 class="event-title media-heading font-roboto-slab font-weight-700"><a href="#">Sales Đồng Loạt Guitar</a></h4>
                                            <span class="mb-10 text-gray-darkgray mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored2"></i> at 5.00 pm - 7.30 pm</span>
                                            <span class="text-gray-darkgray"><i class="fa fa-map-marker mr-5 text-theme-colored2"></i> 25 Newyork City</span>
                                            <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commod</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article>
                                <div class="event-block">
                                    <div class="event-date text-center">
                                        <ul class="text-white font-18 font-weight-600">
                                            <li class="border-bottom">28</li>
                                            <li class="">Feb</li>
                                        </ul>
                                    </div>
                                    <div class="event-meta border-1px pl-40">
                                        <div class="event-content pull-left flip">
                                            <h4 class="event-title media-heading font-roboto-slab font-weight-700"><a href="#">Ưu Đãi Học Phí Tháng 5</a></h4>
                                            <span class="mb-10 text-gray-darkgray mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored2"></i> at 5.00 pm - 7.30 pm</span>
                                            <span class="text-gray-darkgray"><i class="fa fa-map-marker mr-5 text-theme-colored2"></i> 25 Newyork City</span>
                                            <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commod</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article>
                                <div class="event-block">
                                    <div class="event-date text-center">
                                        <ul class="text-white font-18 font-weight-600">
                                            <li class="border-bottom">28</li>
                                            <li class="">Feb</li>
                                        </ul>
                                    </div>
                                    <div class="event-meta border-1px pl-40">
                                        <div class="event-content pull-left flip">
                                            <h4 class="event-title media-heading font-roboto-slab font-weight-700"><a href="#">Giao Lưu Với Học Viên 5T</a></h4>
                                            <span class="mb-10 text-gray-darkgray mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored2"></i> at 5.00 pm - 7.30 pm</span>
                                            <span class="text-gray-darkgray"><i class="fa fa-map-marker mr-5 text-theme-colored2"></i> 25 Newyork City</span>
                                            <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commod</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6">
                            <h3 class="text-uppercase line-bottom-theme-colored-2 line-height-1 mt-0 mt-sm-30"><i class="fa fa-question-circle-o mr-10"></i><span class="text-theme-colored2">Câu Hỏi</span>Thường Gặp </h3>
                            <div class="panel-group accordion-stylished-left-border accordion-icon-filled accordion-no-border accordion-icon-left accordion-icon-filled-theme-colored2" id="accordion6" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headin1">
                                        <h6 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion6" href="#collaps1" aria-expanded="true" aria-controls="collaps1">
                                                Tại Sao Chọn 5T
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collaps1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headin1">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading2">
                                        <h6 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                                Chế Độ Bảo Hành Của 5T Ra Sao ?
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading3">
                                        <h6 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                                Đầu Ra Học Viên Của 5T Có Tốt Không ?
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading4">
                                        <h6 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                                Đàn Ở 5T Sản Xuất Ở Đâu Và Chất Lượng Thế Nào ?
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading5">
                                        <h6 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                                Cơ Sở Vật Chất Ở 5T Sản Xuất Thế Nào ?
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Team -->
        <section id="team" class="bg-silver-deep">
            <div class="container pb-40">
                <div class="section-title">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-uppercase title">ĐỘI NGŨ <span class="text-theme-colored2">GIÁO VIÊN</span></h2>
                            <p class="text-uppercase mb-0">CHÚNG TÔI CÓ NHỮNG GIÁO VIÊN CHẤT LƯỢNG</p>
                            <div class="double-line-bottom-theme-colored-2"></div>
                        </div>
                    </div>
                </div>
                <div class="row mtli-row-clearfix">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
                            <div class="team-thumb">
                                <img class="img-fullwidth" alt="" src="{{ asset('template/images/team/1.jpg') }}">
                                <div class="team-overlay"></div>
                                <ul class="styled-icons team-social icon-sm">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-details">
                                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">PHẠM BÁ THÀNH</h4>
                                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">Người Sáng Lập</h6>
                                <p class="hidden-md">Lorem ipsum dolor sit ametcon secte adipis elit. Debitis magnam placeat dignissimos saperator ellium</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
                            <div class="team-thumb">
                                <img class="img-fullwidth" alt="" src="{{ asset('template/images/team/2.jpg') }}">
                                <div class="team-overlay"></div>
                                <ul class="styled-icons team-social icon-sm">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-details">
                                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">BÙI TIẾN DŨNG</h4>
                                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">Giáo Viên</h6>
                                <p class="hidden-md">Lorem ipsum dolor sit ametcon secte adipis elit. Debitis magnam placeat dignissimos saperator ellium</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
                            <div class="team-thumb">
                                <img class="img-fullwidth" alt="" src="{{ asset('template/images/team/3.jpg') }}">
                                <div class="team-overlay"></div>
                                <ul class="styled-icons team-social icon-sm">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-details">
                                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">NGUYỄN CÔNG PHƯỢNG</h4>
                                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">Trợ Giảng</h6>
                                <p class="hidden-md">Lorem ipsum dolor sit ametcon secte adipis elit. Debitis magnam placeat dignissimos saperator ellium</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
                            <div class="team-thumb">
                                <img class="img-fullwidth" alt="" src="{{ asset('template/images/team/4.jpg') }}">
                                <div class="team-overlay"></div>
                                <ul class="styled-icons team-social icon-sm">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-details">
                                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">ĐOÀN VĂN HẬU</h4>
                                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">Cộng Tác Viên</h6>
                                <p class="hidden-md">Lorem ipsum dolor sit ametcon secte adipis elit. Debitis magnam placeat dignissimos saperator ellium</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Gallery -->
        @include('client.pages.home.includes.gallery', ['galleryType' => $galleryTypes])

        <!-- Divider: Divider -->
        <section class="parallax divider layer-overlay overlay-theme-colored-9" data-bg-img="{{ asset('template/images/bg/bg4.jpg') }}" data-parallax-ratio="0.4">
            <div class="container pt-60 pb-90">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="text-white text-uppercase font-46 font-weight-700 mb-10">VIDEO GIỚI THIỆU<span class="text-theme-colored2"> 5T</span> MUSIC</h2>
                        <p class="font-16 text-white mb-20">Sang trọng và khác biệt hơn<br> Đam mê sáng tạo – Chắc chắn thành công! </p>
                        <a href="https://www.youtube.com/watch?v=513X3dBH8w0" data-lightbox-gallery="youtube-video"><i class="fa fa-play-circle text-theme-colored2 play-btn"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Divider: Testimonials -->
        <section class="bg-silver-deep">
            <div class="container pt-70 pb-30">
                <div class="section-title">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-uppercase title">NHẬN XÉT CỦA <span class="text-theme-colored2">HỌC VIÊN </span></h2>
                            <p class="text-uppercase mb-0">Student and Parents Opinion</p>
                            <div class="double-line-bottom-theme-colored-2"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-30">
                        <div class="owl-carousel-2col boxed" data-dots="true">
                            <div class="item">
                                <div class="testimonial pt-10">
                                    <div class="thumb pull-left mb-0 mr-0">
                                        <img class="img-thumbnail img-circle" alt="" src="{{ asset('template/images/testimonials/1.jpg') }}" width="110">
                                    </div>
                                    <div class="testimonial-content">
                                        <h4 class="mt-0 font-weight-300">Đến với 5T tôi cảm thấy mình tìm được cảm hứng về âm nhạc. Yêu đời hơn và có cái nhìn lạc quan về cuộc sống</h4>
                                        <h5 class="mt-10 font-16 mb-0">Nguyễn Quốc Khánh</h5>
                                        <h6 class="mt-5">Lập Trình Viên</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial pt-10">
                                    <div class="thumb pull-left mb-0 mr-0">
                                        <img class="img-thumbnail img-circle" alt="" src="{{ asset('template/images/testimonials/2.jpg') }}" width="110">
                                    </div>
                                    <div class="testimonial-content">
                                        <h4 class="mt-0 font-weight-300">Chất lượng giảng dạy ở đây cực kỳ tốt, cơ sở vật chất đầy đủ sang trọng, giáo viên còn nhiệt tình và đẹp trai nữa :))</h4>
                                        <h5 class="mt-10 font-16 mb-0">Mai Phương Thúy</h5>
                                        <h6 class="mt-5">SV ĐH Thương Mại</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial pt-10">
                                    <div class="thumb pull-left mb-0 mr-0">
                                        <img class="img-thumbnail img-circle" alt="" src="{{ asset('template/images/testimonials/3.jpg') }}" width="110">
                                    </div>
                                    <div class="testimonial-content">
                                        <h4 class="mt-0 font-weight-300">Đến với 5T tôi cảm thấy mình tìm được cảm hứng về âm nhạc. Yêu đời hơn và có cái nhìn lạc quan về cuộc sống</h4>
                                        <h5 class="mt-10 font-16 mb-0">Bills Gates</h5>
                                        <h6 class="mt-5">Tỷ Phú</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial pt-10">
                                    <div class="thumb pull-left mb-0 mr-0">
                                        <img class="img-thumbnail img-circle" alt="" src="{{ asset('template/images/testimonials/1.jpg') }}" width="110">
                                    </div>
                                    <div class="testimonial-content">
                                        <h4 class="mt-0 font-weight-300">Đến với 5T tôi cảm thấy mình tìm được cảm hứng về âm nhạc. Yêu đời hơn và có cái nhìn lạc quan về cuộc sống</h4>
                                        <h5 class="mt-10 font-16 mb-0">Hồ Ngọc Hà</h5>
                                        <h6 class="mt-5">Hoa Hậu</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: post -->
        @include('client.pages.home.includes.posts', ['hotPosts' => $hotPosts])

        <!-- Divider: Clients -->
        <section class="clients bg-theme-colored2">
            <div class="container pt-10 pb-10">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Section: Clients -->
                        <div class="owl-carousel-6col clients-logo transparent text-center">
                            <div class="item"> <a href="#"><img src="{{ asset('template/images/clients/w1.png') }}" alt=""></a></div>
                            <div class="item"> <a href="#"><img src="{{ asset('template/images/clients/w2.png') }}" alt=""></a></div>
                            <div class="item"> <a href="#"><img src="{{ asset('template/images/clients/w3.png') }}" alt=""></a></div>
                            <div class="item"> <a href="#"><img src="{{ asset('template/images/clients/w4.png') }}" alt=""></a></div>
                            <div class="item"> <a href="#"><img src="{{ asset('template/images/clients/w5.png') }}" alt=""></a></div>
                            <div class="item"> <a href="#"><img src="{{ asset('template/images/clients/w6.png') }}" alt=""></a></div>
                            <div class="item"> <a href="#"><img src="{{ asset('template/images/clients/w3.png') }}" alt=""></a></div>
                            <div class="item"> <a href="#"><img src="{{ asset('template/images/clients/w4.png') }}" alt=""></a></div>
                            <div class="item"> <a href="#"><img src="{{ asset('template/images/clients/w5.png') }}" alt=""></a></div>
                            <div class="item"> <a href="#"><img src="{{ asset('template/images/clients/w6.png') }}" alt=""></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end main-content -->
    </div>
@endsection
