<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from html.kodesolution.live/j/learnpro/v4.0/demo/form-quick-contact-style3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Nov 2019 03:17:02 GMT -->
<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="5T Guitar - Đệm hát chỉ với 999k" />
    <meta name="keywords" content="guitar,5t,5t-guitar,educational,learn,learning,teaching,workshop" />
    <meta name="author" content="quockhanhnv0209@gmail.com" />

    <!-- Page Title -->
    <title>5T Guitar</title>

    <!-- Stylesheet -->
    <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('template/css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('template/css/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('template/css/css-plugin-collections.css') }}" rel="stylesheet"/>
    <!-- CSS | menuzord megamenu skins -->
    <link href="{{ asset('template/css/menuzord-megamenu.css') }}" rel="stylesheet"/>
    <link id="menuzord-menu-skins" href="{{ asset('template/css/menuzord-skins/menuzord-boxed.css') }}" rel="stylesheet"/>
    <!-- CSS | Main style file -->
    <link href="{{ asset('template/css/style-main.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{{ asset('template/css/preloader.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{ asset('template/css/custom-bootstrap-margin-padding.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{ asset('template/css/responsive.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="{{ asset('template/css/style.css') }}" rel="stylesheet" type="text/css"> -->

    <!-- CSS | Theme Color -->
    <link href="{{ asset('template/css/colors/theme-skin-color-set1.css') }}" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="{{ asset('template/js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="{{ asset('template/js/jquery-plugin-collection.js') }}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">
    <!-- preloader -->
    <div id="preloader">
        <div id="spinner">
            <img alt="" src="images/preloaders/5.gif">
        </div>
        <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
    </div>

    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: home -->
        <section id="home" class="divider bg-lighter">
            <div class="display-table">
                <div class="display-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-push-3">
                                <div class="text-center mb-10"><a href="{{ route('home') }}" class=""><img alt="" src="{{ asset('images/logos/image_header_logo.png') }}"></a></div>
                                <div class="widget bg-lightest border-1px p-30">
                                    <div class="widget border-1px p-30">
                                        <h5 class="widget-title line-bottom">Đăng ký thành viên 5T Guitar</h5>
                                            <form method="POST" action="">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group mb-10">
                                                            <input name="name" class="form-control" value="{{ old('name') }}" type="text" placeholder="Tên của bạn">
                                                            @if(count($errors) > 0)
                                                                <span class="text-danger">{{$errors->first('name')}}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group mb-10">
                                                            <input name="email" class="form-control email" value="{{ old('email') }}" type="email" placeholder="Email của bạn">
                                                            @if(count($errors) > 0)
                                                                <span class="text-danger">{{$errors->first('email')}}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group mb-10">
                                                            <input name="phone" value="{{ old('phone') }}" class="form-control" type="text" placeholder="SĐT" >
                                                            @if(count($errors) > 0)
                                                                <span class="text-danger">{{$errors->first('phone')}}</span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <div class="form-group mb-10">
                                                            <input name="password" value="{{ old('password') }}" class="form-control" type="password" placeholder="Mật khẩu" >
                                                            @if(count($errors) > 0)
                                                                <span class="text-danger">{{$errors->first('password')}}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group mb-10">
                                                            <input name="confirmpassword" class="form-control" type="password" placeholder="Xác nhận mật khẩu" >
                                                            @if(count($errors) > 0)
                                                                <span class="text-danger">{{$errors->first('confirmpassword')}}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group mb-0 mt-20">
                                                    <button type="submit" class="btn btn-dark btn-theme-colored" data-loading-text="Please wait...">Đăng ký</button>
                                                    <div class="col m--align-right m-login__form-right"><br>
                                                        <a href="javascript:;" id="m_login_forget_password" class="m-link">
                                                            Quên mật khẩu ?
                                                        </a>
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
        </section>
    </div>
    <!-- end main-content -->

    <!-- Footer -->
    <footer id="footer" class="footer bg-black-111">
        <div class="container p-20">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0">Copyright &copy;2017 ThemeMascot. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{ asset('template/js/custom.js') }}"></script>

</body>

<!-- Mirrored from html.kodesolution.live/j/learnpro/v4.0/demo/form-quick-contact-style3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Nov 2019 03:17:02 GMT -->
</html>
