<section id="reservation" class="parallax layer-overlay overlay-theme-colored-9" data-bg-img="{{ asset('template/images/bg/hoc-vien.jpg') }}" data-parallax-ratio="0.4">
    <div class="container" id="register">
        <div class="row">
            <div class="col-md-8 sm-text-center">
                <h3 class="text-white mt-30 mb-0">Nhận đăng ký trực tuyến miễn phí</h3>
                <h2 class="text-theme-colored2 font-54 mt-0">Đăng Ký Ngay!</h2>
                <p class="text-gray-darkgray font-15 pr-90 pr-sm-0 mb-sm-60">5T luôn khẳng định là Đơn vị Đào tạo Âm nhạc Top 1 Hà Nội về số lượng học viên đông nhất, phòng học lớn, tiện nghi sang trọng nhất, với 6 cơ sở dạy đàn Guitar tại Linh Đàm, Pháp Vân, Cầu Giấy, Mỹ Đình, ĐH Bách Khoa và Hà Đông. Học viên của 5T có thể biểu diễn ở nhiều sân khấu lớn, nhỏ sau khi khoá học kết thúc và các bạn đã thay đổi được nhận thức về cách sống thông qua âm nhạc.</p>
                <div class="row mt-30 sm-text-center">
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact">
                            <i class="pe-7s-smile mb-20 text-theme-colored2"></i>
                            <h2 data-animation-duration="2000" data-value="20.000" class="animate-number text-white font-38 font-weight-400 mt-0 mb-15">0</h2>
                            <h5 class="text-white text-uppercase">HỌC VIÊN</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact">
                            <i class="pe-7s-notebook mb-20 text-theme-colored2"></i>
                            <h2 data-animation-duration="2000" data-value="10" class="animate-number text-white font-38 font-weight-400 mt-0 mb-15">0</h2>
                            <h5 class="text-white text-uppercase">KHÓA HỌC</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact">
                            <i class="pe-7s-users mb-20 text-theme-colored2"></i>
                            <h2 data-animation-duration="2000" data-value="20" class="animate-number text-white font-38 font-weight-400 mt-0 mb-15">0</h2>
                            <h5 class="text-white text-uppercase">GIÁO VIÊN</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact">
                            <i class="pe-7s-study mb-20 text-theme-colored2"></i>
                            <h2 data-animation-duration="2000" data-value="15" class="animate-number text-white font-38 font-weight-400 mt-0 mb-15">0</h2>
                            <h5 class="text-white text-uppercase">ĐỐI TÁC</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-30 mt-0 bg-dark-transparent-2">
                    <h3 class="title-pattern mt-0"><span class="text-white">Đăng ký <span class="text-theme-colored2">Thông Tin</span></span></h3>
                    <!-- Appilication Form Start-->
                    <form id="reservation_form" action="" name="reservation_form" class="reservation-form mt-20" method="post" novalidate="novalidate">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group mb-20">
                                    <input placeholder="Tên của bạn" id="reservation_name" name="reservation_name" required="" class="form-control" aria-required="true" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-20">
                                    <input placeholder="Email" id="reservation_email" name="reservation_email" class="form-control" required="" aria-required="true" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-20">
                                    <input placeholder="Phone" id="reservation_phone" name="reservation_phone" class="form-control" required="" aria-required="true" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-20">
                                    <div class="styled-select">
                                        <select id="reservation_course_id" name="reservation_course_id" class="form-control" required="">
                                            <option value="">Chọn khóa học</option>
                                            @foreach($courses as $course)
                                            <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-20">
                                    <input name="reservation_time" class="form-control required date-picker" placeholder="Thời gian học" aria-required="true" type="text">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea placeholder="Tin nhắn" rows="3" class="form-control required" name="reservation_message" id="form_message" aria-required="true"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group mb-0 mt-10">
                                    <button type="submit" class="btn btn-colored btn-theme-colored2 text-white btn-lg btn-block" data-loading-text="Please wait...">Đăng ký</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Application Form End-->

                    <!-- Application Form Validation Start-->
                    <script type="text/javascript">
                        $("#reservation_form").validate({
                            messages: {
                                reservation_name: "Nhập tên của bạn",
                                reservation_email: "Nhập email",
                                reservation_phone: "Nhập SĐT",
                                reservation_course_id: "Chọn khóa học",
                                reservation_time: "Nhập thời gian nhập học",
                                reservation_message: "Nhập tin nhắn của bạn",
                            },
                            submitHandler: function(form) {
                                var form_btn = $(form).find('button[type="submit"]');
                                var form_result_div = '#form-result';
                                $(form_result_div).remove();
                                var form_btn_old_msg = form_btn.html();
                                form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                $(form).ajaxSubmit({
                                    url: '{{ route('reservation') }}',
                                    method: 'POST',
                                    dataType:  'json',
                                    data: {
                                        _token: '{{ csrf_token() }}',
                                    },
                                    success: function(data) {
                                        if( data.status == 200 ) {
                                            $(form).find('.form-control').val('');
                                        }
                                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                                        $(form_result_div).html(data.message).fadeIn('slow');
                                        setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                                        toastr[data.type](data.message);
                                    }
                                });
                            }
                        });
                    </script>
                    <!-- Application Form Validation Start -->
                </div>
            </div>
        </div>
    </div>
</section>
