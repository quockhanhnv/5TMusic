<div class="header-top bg-theme-colored2 sm-text-center" data-bg-color="#212331" style="background: rgb(33, 35, 49) !important;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="widget text-white">
                    <ul class="list-inline xs-text-center text-white">
                        <li class="m-0 pl-10 pr-10"> <a href="#" class="text-white"><i class="fa fa-phone text-white"></i> 0971.777.555</a> </li>
                        <li class="m-0 pl-10 pr-10">
                            <a href="#" class="text-white"><i class="fa fa-envelope-o text-white mr-5"></i> phambathanh5t@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 pr-0">
                <div class="widget">
                    <ul class="styled-icons icon-sm pull-right flip sm-pull-none sm-text-center mt-5">
                        <li><a href="https://www.facebook.com/Trungtamdaotaoamnhac5T"><i class="fa fa-facebook text-white"></i></a></li>
                        <li><a href="https://www.facebook.com/Trungtamdaotaoamnhac5T"><i class="fa fa-google-plus text-white"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCo93dK1TP5Xgw7ItJMuIaww"><i class="fa fa-youtube text-white"></i></a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <ul class="list-inline sm-pull-none sm-text-center text-right text-white mb-sm-20 mt-10">
                    @guest
                        <li class="m-0 pl-10"> <a href="{{ route('login') }}" style="color: white">Đăng nhập /</a> </li>
                        <li class="m-0 pl-0 pr-10">
                            <a href="{{ route('logout') }}" style="color: white">Đăng ký</a>
                        </li>
                    @endguest
                    @auth
                    <li class="m-0 pl-10"> <a href="" style="color: white">{{ auth()->user()->name }} /</a> </li>
                    <li class="m-0 pl-0 pr-10">
                        <a href="{{ route('logout') }}" style="color: white">Đăng xuất</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="header-middle p-0 bg-lightest xs-text-center">
    <div class="container pt-20 pb-20">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-2">
                <a class="" href="{{ route('home') }}"><img src="{{ asset('images/logos/image_header_logo.png') }}" alt=""></a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
                            <i class="pe-7s-headphones text-theme-colored2 font-48 mt-0 mr-15 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
                            <a href="#" class="font-12 text-gray text-uppercase">Liên hệ với chúng tôi</a>
                            <h5 class="font-13 text-black m-0"> 0971.777.555</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
                            <i class="pe-7s-mail-open text-theme-colored2 font-48 mt-0 mr-15 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
                            <a href="#" class="font-12 text-gray text-uppercase">FB CÁ NHÂN</a>
                            <h5 class="font-13 text-black m-0">Facebook.com/Thanh5T</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
                            <i class="pe-7s-map-marker text-theme-colored2 font-48 mt-0 mr-15 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
                            <a href="#" class="font-12 text-gray text-uppercase">Cơ sở chính</a>
                            <h5 class="font-13 text-black m-0"> DN5, KTX Mỹ Đình, HN</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header-nav">
    <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
            <nav id="menuzord" class="menuzord default menuzord-responsive">
                <ul class="menuzord-menu">
                    <li @if(\Request::route()->getName() === 'home') class="active" @endif><a href="{{ route('home') }}">Home</a></li>
                    <li @if(\Request::route()->getName() === 'client.product.index') class="active" @endif><a href="{{ route('client.product.index') }}">Sản Phẩm <span class="label label-danger">Hot</span></a></li>
                    <li @if(\Request::route()->getName() === 'client.course.index') class="active" @endif><a href="{{ route('client.course.index') }}">Khóa Học</a>
                        <ul class="dropdown">
                            <li><a href="page-course-gird.html">Course Gird</a></li>
                            <li><a href="page-course-list.html">Course List</a></li>
                            <li><a href="page-course-details.html">Course Details</a></li>
                        </ul>
                    </li>
                    <li @if(\Request::route()->getName() === 'client.post.index') class="active" @endif><a href="{{ route('client.post.index') }}">Tin Tức <span class="label label-danger">New</span></a>
                    </li>
                    <li><a href="#home">Sự Kiện</a></li>
                    <li @if(\Request::route()->getName() === 'client.shopping.list') class="active" @endif><a href="{{route('client.shopping.list')}}"><i class="icon_cart_alt" style="line-height: 14px"></i> <span class="label label-danger" id="itemCount">{{\Cart::count()}}</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
