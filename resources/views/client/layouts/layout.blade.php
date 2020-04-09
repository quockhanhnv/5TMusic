<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from html.kodesolution.live/j/learnpro/v4.0/demo/index-mp-layout1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Nov 2019 03:10:09 GMT -->
<head>
    <!-- Meta Tags -->
    @include('client.includes.meta')
    <!-- Page Title -->
    <title>5TMusic-Education</title>
    <!-- Page Css -->
    @include('client.includes.head-css')
    @yield('css')
    <!-- external javascripts -->
    @include('client.includes.head-js')
</head>

<body class="">
<div id="wrapper" class="clearfix">
    <!-- preloader -->
    <div id="preloader">
        <div id="spinner">
            <img alt="" src="{{ asset('template/images/preloaders/5.gif') }}">
        </div>
        <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
    </div>

    <!-- Header -->
    <header id="header" class="header">
        @include('client.layouts.partials.header-top')
        @yield('header')
    </header>

    <!-- Start main-content -->
    @yield('content')

    <!-- Footer -->
    @include('client.layouts.partials.footer')

</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
    @include('client.includes.script')
    @yield('js')
</body>

<!-- Mirrored from html.kodesolution.live/j/learnpro/v4.0/demo/index-mp-layout1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Nov 2019 03:13:31 GMT -->
</html>
