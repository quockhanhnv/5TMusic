<div class="header-top bg-theme-colored2 sm-text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="widget text-white">
                    <ul class="list-inline xs-text-center text-white">
                        <li class="m-0 pl-10 pr-10"> <a href="#" class="text-white"><i class="fa fa-phone text-white"></i> 123-456-789</a> </li>
                        <li class="m-0 pl-10 pr-10">
                            <a href="#" class="text-white"><i class="fa fa-envelope-o text-white mr-5"></i> phambathanh5t@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 pr-0">
                <div class="widget">
                    <ul class="styled-icons icon-sm pull-right flip sm-pull-none sm-text-center mt-5">
                        <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus text-white"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <ul class="list-inline sm-pull-none sm-text-center text-right text-white mb-sm-20 mt-10">
                    <li class="m-0 pl-10"> <a href="{{ asset('template/ajax-load/login-form.html') }}" class="text-white ajaxload-popup">Đăng nhập /</a> </li>
                    <li class="m-0 pl-0 pr-10">
                        <a href="{{ asset('template/ajax-load/register-form.html') }}" class="text-white ajaxload-popup">Đăng ký</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="header-middle p-0 bg-lightest xs-text-center">
    <div class="container pt-20 pb-20">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4">
                <a class="menuzord-brand pull-left flip sm-pull-center mb-15" href="{{ route('home') }}"><img src="{{ asset('template/images/logo-wide.png') }}" alt=""></a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8">
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
                            <a href="#" class="font-12 text-gray text-uppercase">EMAIL LIÊN HỆ</a>
                            <h5 class="font-13 text-black m-0"> abc5t@gmail.com</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
                            <i class="pe-7s-map-marker text-theme-colored2 font-48 mt-0 mr-15 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
                            <a href="#" class="font-12 text-gray text-uppercase">Cơ sở chính</a>
                            <h5 class="font-13 text-black m-0"> KTX Mỹ Đình, HN</h5>
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
                    <li class="active"><a href="{{ route('home') }}">Home</a>
                        <ul class="dropdown">
                            <li><a href="#">Multipage Layouts</a>
                                <ul class="dropdown">
                                    <li><a href="index-mp-layout1.html">Layout1</a></li>
                                    <li><a href="index-mp-layout2.html">Layout2</a></li>
                                    <li><a href="index-mp-layout3.html">Layout3</a></li>
                                    <li><a href="index-mp-layout4.html">Layout4</a></li>
                                    <li><a href="index-mp-layout5.html">Layout5</a></li>
                                    <li><a href="index-mp-layout6.html">Layout6</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Singlepage Layouts</a>
                                <ul class="dropdown">
                                    <li><a href="index-sp-layout1.html">Layout1</a></li>
                                    <li><a href="index-sp-layout2.html">Layout2</a></li>
                                    <li><a href="index-sp-layout3.html">Layout3</a></li>
                                    <li><a href="index-sp-layout4.html">Layout4</a></li>
                                    <li><a href="index-sp-layout5.html">Layout5</a></li>
                                    <li><a href="index-sp-layout6.html">Layout6</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Boxed Layouts</a>
                                <ul class="dropdown">
                                    <li><a href="index-boxed-mp-layout1.html">Multipage Layout1</a></li>
                                </ul>
                            </li>
                            <li><a href="#">RTL Layouts</a>
                                <ul class="dropdown">
                                    <li><a href="index-rtl-mp-layout1.html">Multipage Layout1</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Dark Layouts</a>
                                <ul class="dropdown">
                                    <li><a href="index-dark-mp-layout1.html">Multipage Layout1</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Home Variations</a>
                                <ul class="dropdown">
                                    <li><a href="#">Rev Slider</a>
                                        <ul class="dropdown">
                                            <li><a href="index-home-variation-revslider-style1.html">Layout1</a></li>
                                            <li><a href="index-home-variation-revslider-style2.html">Layout2</a></li>
                                            <li><a href="index-home-variation-revslider-style3.html">Layout3</a></li>
                                            <li><a href="index-home-variation-revslider-style4.html">Layout4</a></li>
                                            <li><a href="index-home-variation-revslider-style5.html">Layout5</a></li>
                                            <li><a href="index-home-variation-revslider-style6.html">Layout6</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Maximage Slider</a>
                                        <ul class="dropdown">
                                            <li><a href="index-home-variation-maximageslider-style1.html">Layout1</a></li>
                                            <li><a href="index-home-variation-maximageslider-style2.html">Layout2</a></li>
                                            <li><a href="index-home-variation-maximageslider-style3.html">Layout3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index-home-variation-owl-carousel.html">Owl Carousel</a></li>
                                    <li><a href="index-home-variation-owl-image-slider.html">Owl Image Slider</a></li>
                                    <li><a href="index-home-variation-typed-text.html">Typed Text Layout</a></li>
                                    <li><a href="index-home-variation-video-background.html">Youtube Background Video</a></li>
                                    <li><a href="index-home-variation-html5-video.html">Html5 Background Video</a></li>
                                    <li><a href="index-home-variation-bg-image-parallax.html">Bg Image Parallax Layout</a></li>
                                    <li><a href="index-home-variation-bg-static.html">Bg Static Layout</a></li>
                                    <li><a href="#">Home Appointment Form</a>
                                        <ul class="dropdown">
                                            <li><a href="index-home-variation-appointment-form-style1.html">Layout1</a></li>
                                            <li><a href="index-home-variation-appointment-form-style2.html">Layout2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{ route('client.product.index') }}">Sản Phẩm <span class="label label-danger">New</span></a>
                        <ul class="dropdown">
                            <li><a href="#">About</a>
                                <ul class="dropdown">
                                    <li><a href="page-about1.html">About Style 1</a></li>
                                    <li><a href="page-about2.html">About Style 2</a></li>
                                </ul>
                            </li>
                            <li><a href="#home">Teachers</a>
                                <ul class="dropdown">
                                    <li><a href="page-teachers-style1.html">Teachers style 1</a></li>
                                    <li><a href="page-teachers-style2.html">Teachers style 2</a></li>
                                    <li><a href="page-teacher-details.html">Teachers Details</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Profile</a>
                                <ul class="dropdown">
                                    <li><a href="page-account.html">Account</a></li>
                                    <li><a href="page-account-edit.html">Edit Account</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Gallery</a>
                                <ul class="dropdown">
                                    <li><a href="page-gallery-3col.html">3 Columns</a></li>
                                    <li><a href="page-gallery-4col.html">4 Columns</a></li>
                                    <li><a href="page-gallery-3col-only-image.html">3 Columns Only Image</a></li>
                                    <li><a href="page-gallery-4col-only-image.html">4 Columns Only Image</a></li>
                                    <li><a href="page-gallery-grid.html">Grids (2-10 Columns)</a></li>
                                    <li><a href="page-gallery-grid-animation.html">Grids with Animation (2-10 Columns)</a></li>
                                    <li><a href="page-gallery-masonry-tiles.html">Tiles (2-10 Columns)</a></li>
                                    <li><a href="page-gallery-masonry-tiles-animation.html">Tiles with Animation (2-10 Columns)</a></li>
                                    <li><a href="page-gallery-prettyphoto.html">Pretty Photo Gallery</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Pricing</a>
                                <ul class="dropdown">
                                    <li><a href="page-pricing-style1.html">Pricing style1</a></li>
                                    <li><a href="page-pricing-style2.html">Pricing style2</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Calender</a>
                                <ul class="dropdown">
                                    <li><a href="page-calendar1.html">Calendar Style1</a></li>
                                    <li><a href="page-calendar2.html">Calendar Style2</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Events</a>
                                <ul class="dropdown">
                                    <li><a href="#">Events Grid</a>
                                        <ul class="dropdown">
                                            <li><a href="events-grid-2column.html">Grid 2column</a></li>
                                            <li><a href="events-grid-3column.html">Grid 3column</a></li>
                                            <li><a href="events-grid-4column.html">Grid 4column</a></li>
                                            <li><a href="events-grid-left-sidebar.html">Grid Left Sidebar</a></li>
                                            <li><a href="events-grid-right-sidebar.html">Grid Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Events List</a>
                                        <ul class="dropdown">
                                            <li><a href="events-list-left-sidebar.html">List Left Sidebar</a></li>
                                            <li><a href="events-list-right-sidebar.html">List Right Sidebar</a></li>
                                            <li><a href="events-list-no-sidebar.html">List No Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Events Details</a>
                                        <ul class="dropdown">
                                            <li><a href="events-details-style1.html">Details Style1</a></li>
                                            <li><a href="events-details-style2.html">Details Style2</a></li>
                                            <li><a href="events-details-style3.html">Details Style3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="events-table.html">Events Table</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Job</a>
                                <ul class="dropdown">
                                    <li><a href="job-list.html">Job List</a></li>
                                    <li><a href="job-details-style1.html">Job Details Style1</a></li>
                                    <li><a href="job-details-style2.html">Job Details Style2</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Shop</a>
                                <ul class="dropdown">
                                    <li><a href="shop-category.html">Category</a></li>
                                    <li><a href="shop-category-sidebar.html">Category Sidebar</a></li>
                                    <li><a href="shop-product-details.html">Product Details</a></li>
                                    <li><a href="shop-cart.html">Cart</a></li>
                                    <li><a href="shop-checkout.html">Checkout</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Contact</a>
                                <ul class="dropdown">
                                    <li><a href="page-contact1.html">Contact style 1</a></li>
                                    <li><a href="page-contact2.html">Contact style 2</a></li>
                                    <li><a href="page-contact3.html">Contact style 3</a></li>
                                    <li><a href="page-contact4.html">Contact style 4</a></li>
                                    <li><a href="page-contact5-with-multiple-marker.html">Contact 5 - Multiple Marker</a></li>
                                    <li><a href="page-contact6-with-multiple-marker.html">Contact 6 - Multiple Marker</a></li>
                                    <li><a href="page-contact7-google-recaptcha.html">Contact 7 - reCAPTCHA</a></li>
                                </ul>
                            </li>
                            <li><a href="#">FAQ</a>
                                <ul class="dropdown">
                                    <li><a href="page-faq-style1.html">FAQ Style1</a></li>
                                    <li><a href="page-faq-style2.html">FAQ Style2</a></li>
                                    <li><a href="page-faq-style3.html">FAQ Style3</a></li>
                                    <li><a href="page-faq-style4.html">FAQ Style4</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Page 404</a>
                                <ul class="dropdown">
                                    <li><a href="page-404-style1.html">Style1</a></li>
                                    <li><a href="page-404-style2.html">Style2</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Coming Soon</a>
                                <ul class="dropdown">
                                    <li><a href="page-coming-soon-style1.html">style 1</a></li>
                                    <li><a href="page-coming-soon-style2.html">style 2</a></li>
                                    <li><a href="page-coming-soon-style3.html">style 3</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Under Construction</a>
                                <ul class="dropdown">
                                    <li><a href="page-under-construction-style1.html">Style1</a></li>
                                    <li><a href="page-under-construction-style2.html">Style2</a></li>
                                    <li><a href="page-under-construction-style3.html">Style3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#home">Khóa Học</a>
                        <ul class="dropdown">
                            <li><a href="page-course-gird.html">Course Gird</a></li>
                            <li><a href="page-course-list.html">Course List</a></li>
                            <li><a href="page-course-details.html">Course Details</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Tin Tức <span class="label label-danger">New</span></a>
                        <ul class="dropdown">
                            <li><a href="#">Blog Classic</a>
                                <ul class="dropdown dropdown-left">
                                    <li><a href="blog-classic-no-sidebar.html">Blog Classic No Sidebar</a></li>
                                    <li><a href="blog-classic-left-sidebar.html">Blog Classic Left Sidebar</a></li>
                                    <li><a href="blog-classic-right-sidebar.html">Blog Classic Right Sidebar</a></li>
                                    <li><a href="blog-classic-both-sidebar.html">Blog Classic Both Sidebar</a></li>
                                    <li><a href="blog-classic-left-thumbs.html">Blog Classic Left Thumbs</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Blog Grid</a>
                                <ul class="dropdown dropdown-left">
                                    <li><a href="blog-grid-2-column.html">Blog Grid 2 Column</a></li>
                                    <li><a href="blog-grid-3-column.html">Blog Grid 3 Column</a></li>
                                    <li><a href="blog-grid-4-column.html">Blog Grid 4 Column</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Blog Masonry</a>
                                <ul class="dropdown dropdown-left">
                                    <li><a href="blog-masonry-2-column.html">Blog Masonry 2 Column</a></li>
                                    <li><a href="blog-masonry-3-column.html">Blog Masonry 3 Column</a></li>
                                    <li><a href="blog-masonry-4-column.html">Blog Masonry 4 Column</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Blog Single</a>
                                <ul class="dropdown dropdown-left">
                                    <li><a href="blog-single-no-sidebar.html">Blog Single No Sidebar</a></li>
                                    <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                                    <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidebar</a></li>
                                    <li><a href="blog-single-both-sidebar.html">Blog Single Both Sidebar</a></li>
                                    <li><a href="blog-single-disqus-comments.html">Blog Single Discuss Comments</a></li>
                                    <li><a href="blog-single-facebook-comments.html">Blog Single Facebook Comments</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Blog Infinity Scroll</a>
                                <ul class="dropdown dropdown-left">
                                    <li><a href="blog-extra-infinity-scroll.html">Blog Infinity Scroll Default</a></li>
                                    <li><a href="blog-extra-infinity-scroll-lazyload.html">Blog Infinity Scroll Lazyload</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Blog Timeline</a>
                                <ul class="dropdown dropdown-left">
                                    <li><a href="blog-timeline.html">Blog Timeline Default</a></li>
                                    <li><a href="blog-timeline-masonry.html">Blog Timeline Masonry</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#home">Sự Kiện</a>
                        <ul class="dropdown">
                            <li><a href="page-course-gird.html">Course Gird</a></li>
                            <li><a href="page-course-list.html">Course List</a></li>
                            <li><a href="page-course-details.html">Course Details</a></li>
                        </ul>
                    </li>
                    <li @if(\Request::route()->getName() === 'client.shopping.list') class="active" @endif><a href="{{route('client.shopping.list')}}"><i class="icon_cart_alt" style="line-height: 14px"></i> <span class="label label-danger" id="itemCount">{{\Cart::count()}}</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
