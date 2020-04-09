@extends('client.layouts.layout')

@section('content')
    <div class="main-content">
        <!-- Start main-content -->
        <div class="main-content">
            <!-- Section: inner-header -->
            <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="{{asset('template/images/bg/bg1.jpg')}}">
                <div class="container pt-120 pb-60">
                    <!-- Section Content -->
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="text-theme-colored2 font-36">Course Details</h2>
                                <ol class="breadcrumb text-left mt-10 white">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Pages</a></li>
                                    <li class="active">Course Details</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Services Details -->
            <section>
                <div class="container mt-30 mb-30 pt-30 pb-30">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="single-service">
                                <ul class="list-inline mb-15">
                                    <li>
                                        <i class="pe-7s-user text-theme-colored2 font-48"></i>
                                        <div class="pull-right ml-5">
                                            <span>Giáo viên</span>
                                            <h5 class="mt-0">Phạm Bá Thành</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="pe-7s-ribbon text-theme-colored2 font-48"></i>
                                        <div class="pull-right ml-5">
                                            <span>Trình độ</span>
                                            <h5 class="mt-0">{{ $course->category->c_name }}</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="pe-7s-cash text-theme-colored2 font-48"></i>
                                        <div class="pull-right ml-10">
                                            <span>Học phí</span>
                                            <h5 class="mt-0">{{ number_format(getPriceSale($course->course_price, $course->course_sale), 0, '.', ',') }}đ</h5>
                                        </div>
                                    </li>
                                </ul>
                                <img src="{{ $course->course_avatar }}" alt="">
                                <h3 class="text-uppercase mt-30 mb-10">{{ $course->course_name }}</h3>
                                <div class="double-line-bottom-theme-colored-2 mt-10"></div>
                               <p>{{ $course->course_description }}</p>
                                <ul id="myTab" class="nav nav-tabs mt-30">
                                    <li class="active"><a href="#tab1" data-toggle="tab">Nội dung</a></li>
                                    <li><a href="#tab2" data-toggle="tab">Thông tin</a></li>
                                    <li><a href="#tab3" data-toggle="tab">Giáo viên</a></li>
                                    <li><a href="#tab4" data-toggle="tab">Đánh giá</a></li>
                                    <li><a href="#tab5" data-toggle="tab">Bình luận</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1">
                                        {!! $course->course_content !!}
                                    </div>
                                    <div class="tab-pane fade" id="tab2">
                                        <h4 class="line-bottom-theme-colored-2 mb-15">Thông tin khóa học</h4>
                                        <ul class="course-info-list font-14 mt-20">
                                            <li>
                      <span class="course-info-title">
                      <i class="pe-7s-date font-26 vertical-align-middle text-theme-colored2 mr-10"></i>Lịch học:</span>
                                                <span class="course-info-details">{{ $course->course_class_schedule }}</span>
                                            </li>
                                            <li>
                      <span class="course-info-title">
                      <i class="pe-7s-timer font-26 vertical-align-middle text-theme-colored2 mr-10"></i>Thời gian:</span>
                                                <span class="course-info-details">{{ $course->course_duration }}</span>
                                            </li>
                                            <li>
                      <span class="course-info-title">
                      <i class="pe-7s-diamond font-26 vertical-align-middle text-theme-colored2 mr-10"></i>Số buổi:</span>
                                                <span class="course-info-details">{{ $course->course_number_lesson }} cố định (đi học thêm tất cả các buổi tối miễn phí)</span>
                                            </li>
                                            <li>
                      <span class="course-info-title">
                      <i class="pe-7s-umbrella font-26 vertical-align-middle text-theme-colored2 mr-10"></i>Số lượng học viên:</span>
                                                <span class="course-info-details">Tối đa {{ $course->course_number_student }} học viên</span>
                                            </li>
                                            <li>
                      <span class="course-info-title">
                      <i class="pe-7s-users font-26 vertical-align-middle text-theme-colored2 mr-10"></i>Giáo viên:</span>
                                                <span class="course-info-details">03</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="tab3">
                                        <h4 class="line-bottom-theme-colored-2 mb-20">Giáo viên</h4>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img src="{{ asset('template/images/team/md1.jpg') }}" alt="" class="img-fullwidth">
                                                <h5 class="mb-0">Phạm Bá Thành</h5>
                                                CSE Faculty
                                            </div>
                                            <div class="col-md-3">
                                                <img src="{{ asset('template/images/team/md2.jpg') }}" alt="" class="img-fullwidth">
                                                <h5 class="mb-0">Trợ giảng</h5>
                                                EEE Faculty
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab4">
                                        <h4 class="line-bottom-theme-colored-2 mb-20">
                                            Đánh giá khóa học
                                        </h4>
                                        <div class="course-reviews">
                                            <h4 class="mb-0">Trung bình:<span class="text-theme-colored2 vertical-align-middle font-30 ml-20">4.6</span></h4>
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="star-rating filled mt-5 mb-5 ml-0">
                                                        <span data-width="87%"></span>
                                                    </div>
                                                    <div class="course-progress-area">
                                                        <div class="progress-item style3">
                                                            <div class="progress-title">
                                                                <h5>5 Sao<span class="pull-right">24</span></h5>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar" data-percent="100"></div>
                                                            </div>
                                                        </div>
                                                        <div class="progress-item style3">
                                                            <div class="progress-title">
                                                                <h5>4 Sao<span class="pull-right">5</span></h5>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar" data-percent="75"></div>
                                                            </div>
                                                        </div>
                                                        <div class="progress-item style3">
                                                            <div class="progress-title">
                                                                <h5>3 Sao<span class="pull-right">2</span></h5>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar" data-percent="60"></div>
                                                            </div>
                                                        </div>
                                                        <div class="progress-item style3">
                                                            <div class="progress-title">
                                                                <h5>2 Sao<span class="pull-right">0</span></h5>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar" data-percent="35"></div>
                                                            </div>
                                                        </div>
                                                        <div class="progress-item style3">
                                                            <div class="progress-title">
                                                                <h5>1 Sao<span class="pull-right">0</span></h5>
                                                            </div>
                                                            <div class="progress">
                                                                <div class="progress-bar" data-percent="15"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab5">
                                        <h4 class="line-bottom-theme-colored-2 mb-0">Comments</h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="blog-posts single-post">
                                                    <div class="comments-area">
                                                        <ul class="comment-list">
                                                            <li>
                                                                <div class="media comment-author"> <a class="media-left pull-left flip" href="#"><img class="img-thumbnail" src="{{ asset('template/images/blog/comment1.jpg') }}" alt=""></a>
                                                                    <div class="media-body">
                                                                        <h5 class="media-heading comment-heading">John Doe says:</h5>
                                                                        <div class="comment-date">23/06/2014</div>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ea commodo consequat...</p>
                                                                        <a class="replay-icon pull-right text-theme-colored2" href="#"> <i class="fa fa-commenting-o text-theme-colored2"></i> Replay</a> </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="media comment-author"> <a class="media-left pull-left flip" href="#"><img class="img-thumbnail" src="{{ asset('template/images/blog/comment2.jpg') }}" alt=""></a>
                                                                    <div class="media-body">
                                                                        <h5 class="media-heading comment-heading">John Doe says:</h5>
                                                                        <div class="comment-date">23/06/2014</div>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ea commodo consequat...</p>
                                                                        <a class="replay-icon pull-right text-theme-colored2" href="#"> <i class="fa fa-commenting-o text-theme-colored2"></i> Replay</a>
                                                                        <div class="clearfix"></div>
                                                                        <div class="media comment-author nested-comment"> <a href="#" class="media-left pull-left flip pt-20"><img alt="" src="{{ asset('template/images/blog/comment3.jpg') }}" class="img-thumbnail"></a>
                                                                            <div class="media-body p-20 bg-lighter">
                                                                                <h5 class="media-heading comment-heading">John Doe says:</h5>
                                                                                <div class="comment-date">23/06/2014</div>
                                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ea commodo consequat...</p>
                                                                                <a class="replay-icon pull-right text-theme-colored2" href="#"> <i class="fa fa-commenting-o text-theme-colored2"></i> Replay</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="media comment-author nested-comment"> <a href="#" class="media-left pull-left flip pt-20"><img alt="" src="{{ asset('template/images/blog/comment2.jpg') }}" class="img-thumbnail"></a>
                                                                            <div class="media-body p-20 bg-lighter">
                                                                                <h5 class="media-heading comment-heading">John Doe says:</h5>
                                                                                <div class="comment-date">23/06/2014</div>
                                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ea commodo consequat...</p>
                                                                                <a class="replay-icon pull-right text-theme-colored2" href="#"> <i class="fa fa-commenting-o text-theme-colored2"></i> Replay</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="media comment-author"> <a class="media-left pull-left flip" href="#"><img class="img-thumbnail" src="{{ asset('template/images/blog/comment2.jpg') }}" alt=""></a>
                                                                    <div class="media-body">
                                                                        <h5 class="media-heading comment-heading">John Doe says:</h5>
                                                                        <div class="comment-date">23/06/2014</div>
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ea commodo consequat...</p>
                                                                        <a class="replay-icon pull-right text-theme-colored2" href="#"> <i class="fa fa-commenting-o text-theme-colored2"></i> Replay</a> </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="comment-box">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <h5>Leave a Comment</h5>
                                                                <div class="row">
                                                                    <form role="form" id="comment-form">
                                                                        <div class="col-sm-6 pt-0 pb-0">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" required name="contact_name" id="contact_name" placeholder="Enter Name">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <input type="text" required class="form-control" name="contact_email2" id="contact_email2" placeholder="Enter Email">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <input type="text" placeholder="Enter Website" required class="form-control" name="subject">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <textarea class="form-control" required name="contact_message2" id="contact_message2"  placeholder="Enter Message" rows="7"></textarea>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <button type="submit" class="btn btn-dark btn-flat pull-right m-0" data-loading-text="Please wait...">Submit</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div><a class="btn btn-xl btn-theme-colored2 mt-30 pr-40 pl-40" href="shop-product-details.html">Order Now</a></div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="sidebar sidebar-left mt-sm-30 ml-30 ml-sm-0">
                                <div class="widget border-1px bg-silver-deep p-15">
                                    <h4 class="widget-title line-bottom-theme-colored-2">Search box</h4>
                                    <div class="search-form">
                                        <form>
                                            <div class="input-group">
                                                <input type="text" placeholder="Click to Search" class="form-control search-input">
                                                <span class="input-group-btn">
                      <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                      </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="widget border-1px bg-silver-deep p-15">
                                    <h4 class="widget-title line-bottom-theme-colored-2 mb-10">Categories</h4>
                                    <div class="categories">
                                        <ul class="list-border">
                                            <li><a href="#">Web Development<span>(19)</span></a></li>
                                            <li><a href="#">Php Learning<span>(21)</span></a></li>
                                            <li><a href="#">Database Design<span>(15)</span></a></li>
                                            <li><a href="#">Graphics Design<span>(35)</span></a></li>
                                            <li><a href="#">UI/UX Design<span>(16)</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget border-1px bg-silver-deep p-15">
                                    <h4 class="widget-title line-bottom-theme-colored-2">Featured Courses</h4>
                                    <div class="product-list">
                                        <div class="media">
                                            <a class="media-left pull-left flip" href="#">
                                                <img class="media-object thumb" width="80" src="{{ asset('template/images/course/f-course1.jpg') }}" alt="">
                                            </a>
                                            <div class="media-body">
                                                <h5 class="media-heading product-title mb-0"><a href="#">Machine Learning</a></h5>
                                                <div class="star-rating mt-5 mb-5 ml-0" title="Rated 4.50 out of 5">
                                                    <span data-width="90%">4.50</span>
                                                </div>
                                                <span class="price">$37.00</span>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <a class="media-left pull-left flip" href="#">
                                                <img class="media-object thumb" width="80" src="{{ asset('template/images/course/f-course2.jpg') }}" alt="">
                                            </a>
                                            <div class="media-body">
                                                <h5 class="media-heading product-title mb-0"><a href="#">Organizational Analysis</a></h5>
                                                <div class="star-rating mt-5 mb-5 ml-0" title="Rated 4.50 out of 5">
                                                    <span data-width="60%">4.50</span>
                                                </div>
                                                <span class="price">$37.00</span>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <a class="media-left pull-left flip" href="#">
                                                <img class="media-object thumb" width="80" src="{{ asset('template/images/course/f-course3.jpg') }}" alt="">
                                            </a>
                                            <div class="media-body">
                                                <h5 class="media-heading product-title mb-0"><a href="#">Programming Methodology</a></h5>
                                                <div class="star-rating mt-5 mb-5 ml-0" title="Rated 4.50 out of 5">
                                                    <span  data-width="75%">4.50</span>
                                                </div>
                                                <span class="price">$37.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget border-1px bg-silver-deep p-15">
                                    <h4 class="widget-title line-bottom-theme-colored-2">Quick Contact</h4>
                                    <form id="quick_contact_form_sidebar" name="footer_quick_contact_form" class="quick-contact-form" action="http://html.kodesolution.live/j/learnpro/v4.0/demo/includes/quickcontact.php" method="post">
                                        <div class="form-group">
                                            <input name="form_email" class="form-control" type="text" required="" placeholder="Enter Email">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="form_message" class="form-control" required="" placeholder="Enter Message" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input name="form_botcheck" class="form-control" type="hidden" value="" />
                                            <button type="submit" class="btn btn-default btn-flat btn-xs btn-quick-contact text-gray pt-5 pb-5" data-loading-text="Please wait...">Send Message</button>
                                        </div>
                                    </form>

                                    <!-- Quick Contact Form Validation-->
                                    <script type="text/javascript">
                                        $("#quick_contact_form_sidebar").validate({
                                            submitHandler: function(form) {
                                                var form_btn = $(form).find('button[type="submit"]');
                                                var form_result_div = '#form-result';
                                                $(form_result_div).remove();
                                                form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                                                var form_btn_old_msg = form_btn.html();
                                                form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                                $(form).ajaxSubmit({
                                                    dataType:  'json',
                                                    success: function(data) {
                                                        if( data.status == 'true' ) {
                                                            $(form).find('.form-control').val('');
                                                        }
                                                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                                                        $(form_result_div).html(data.message).fadeIn('slow');
                                                        setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                                                    }
                                                });
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- end main-content -->
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function(){
            console.log('a');
            /* 1. Visualizing things on Hover - See next part for action on click */
            $('#stars li').on('mouseover', function(){
                var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

                // Now highlight all the stars that's not after the current hovered star
                $(this).parent().children('li.star').each(function(e){
                    if (e < onStar) {
                        $(this).addClass('hover');
                    }
                    else {
                        $(this).removeClass('hover');
                    }
                });

            }).on('mouseout', function(){
                $(this).parent().children('li.star').each(function(e){
                    $(this).removeClass('hover');
                });
            });


            /* 2. Action to perform on click */
            $('#stars li').on('click', function(){
                var onStar = parseInt($(this).data('value'), 10); // The star currently selected
                var stars = $(this).parent().children('li.star');

                for (i = 0; i < stars.length; i++) {
                    $(stars[i]).removeClass('selected');
                }

                for (i = 0; i < onStar; i++) {
                    $(stars[i]).addClass('selected');
                }

                // JUST RESPONSE (Not needed)
                var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
                var msg = "";
                if (ratingValue > 1) {
                    msg = "Thanks! You rated this " + ratingValue + " stars.";
                }
                else {
                    msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
                }
                responseMessage(msg);

            });


        });

        function responseMessage(msg) {
            $('.success-box').fadeIn(200);
            $('.success-box div.text-message').html("<span>" + msg + "</span>");
        }
    </script>
@endsection
