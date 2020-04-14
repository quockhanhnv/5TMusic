@extends('client.layouts.layout')

@section('content')
    <div class="main-content">
        <!-- Section: home -->
        <section id="home">
            <div class="container-fluid p-0">

                <!-- START REVOLUTION SLIDER 5.0.7 -->
                <div id="rev_slider_home_wrapper" class="rev_slider_wrapper" data-alias="news-gallery34" style="margin:0px auto; background-color:#ffffff; padding:0px; margin-top:0px; margin-bottom:0px;">
                    <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
                    <div id="rev_slider_home" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                        <ul>
                            <!-- SLIDE 1 -->
                            <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('template/images/bg/hoc-vien.jpg') }}" data-rotate="0"  data-fstransition="fade" data-saveperformance="off" data-title="Web Show" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('template/images/bg/hoc-vien.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0 bg-theme-colored-transparent-4"
                                     id="slide-1-layer-1"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                     data-width="full"
                                     data-height="full"
                                     data-whitespace="normal"
                                     data-transform_idle="o:1;"
                                     data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                     data-start="500"
                                     data-basealign="slide"
                                     data-responsive_offset="on"
                                     style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);">
                                </div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme rs-parallaxlevel-0 text-white text-uppercase font-roboto-slab font-weight-700"
                                     id="slide-1-layer-2"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['top','top','top','top']" data-voffset="['195','195','160','170']"
                                     data-fontsize="['58','48','42','36']"
                                     data-lineheight="['70','60','50','45']"
                                     data-fontweight="['800','700','700','700']"
                                     data-textalign="['center','center','center','center']"
                                     data-width="['700','650','600','420']"
                                     data-height="none"
                                     data-whitespace="normal"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                     data-start="600"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 5; white-space: nowrap; font-weight:700;"> <span class="text-theme-colored2">5T</span> Guitar
                                </div>
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"
                                     id="slide-1-layer-3"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['top','top','top','top']" data-voffset="['275','260','220','220']"
                                     data-fontsize="['16','16',18',16']"
                                     data-lineheight="['24','24','24','24']"
                                     data-fontweight="['400','400','400','400']"
                                     data-textalign="['center','center','center','center']"
                                     data-width="['800','650','600','460']"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                     data-start="700"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 5; white-space: nowrap;">Đệm Hát Trong Vòng <span class="text-theme-colored2"><b>8</b></span> Buổi<br> Chỉ Với <span class="label label-danger">999K</span> Cam Kết Đầu Ra Hỗ Trợ Trọn Đời
                                </div>
                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption rs-parallaxlevel-0"
                                     id="slide-1-layer-4"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['top','top','top','top']" data-voffset="['350','330','290','290']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                     data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                     data-mask_in="x:0px;y:0px;"
                                     data-mask_out="x:0;y:0;"
                                     data-start="800"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     data-responsive="off"
                                     style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-theme-colored2 btn-lg btn-flat text-white font-weight-600 pl-30 pr-30 mr-15" href="#">Thông Tin</a><a class="btn btn-default btn-transparent btn-bordered btn-lg btn-flat font-weight-600 pl-30 pr-30" href="#">Các Khóa Học</a>
                                </div>
                            </li>

                            <!-- SLIDE 2 -->
                            <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('template/images/bg/hoc-vien-2.jpg') }}" data-rotate="0"  data-fstransition="fade" data-saveperformance="off" data-title="Web Show" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('template/images/bg/hoc-vien-2.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0 bg-theme-colored-transparent-4"
                                     id="slide-2-layer-1"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                     data-width="full"
                                     data-height="full"
                                     data-whitespace="normal"
                                     data-transform_idle="o:1;"
                                     data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                     data-start="500"
                                     data-basealign="slide"
                                     data-responsive_offset="on"
                                     style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);">
                                </div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme rs-parallaxlevel-0 text-white text-uppercase font-roboto-slab font-weight-700"
                                     id="slide-2-layer-2"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['top','top','top','top']" data-voffset="['195','195','160','170']"
                                     data-fontsize="['58','48','42','36']"
                                     data-lineheight="['70','60','50','45']"
                                     data-fontweight="['800','700','700','700']"
                                     data-textalign="['center','center','center','center']"
                                     data-width="['700','650','600','420']"
                                     data-height="none"
                                     data-whitespace="normal"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                     data-start="600"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 5; white-space: nowrap; font-weight:700;">Welcome To<span class="text-theme-colored2"> 5T Music</span>
                                </div>
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"
                                     id="slide-2-layer-3"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['top','top','top','top']" data-voffset="['275','260','220','220']"
                                     data-fontsize="['16','16',18',16']"
                                     data-lineheight="['24','24','24','24']"
                                     data-fontweight="['400','400','400','400']"
                                     data-textalign="['center','center','center','center']"
                                     data-width="['800','650','600','460']"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                     data-start="700"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 5; white-space: nowrap;">Chúng tôi luôn cung cấp các dịch vụ giáo dục tốt nhất cho tất cả học sinh<br> và luôn cố gắng để đạt được sự tin tưởng và hài lòng của học viên
                                </div>
                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption rs-parallaxlevel-0"
                                     id="slide-2-layer-4"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['top','top','top','top']" data-voffset="['350','330','290','290']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                     data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                     data-mask_in="x:0px;y:0px;"
                                     data-mask_out="x:0;y:0;"
                                     data-start="800"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     data-responsive="off"
                                     style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-theme-colored2 btn-lg btn-flat text-white font-weight-600 pl-30 pr-30 mr-15" href="#">Thông Tin</a><a class="btn btn-default btn-transparent btn-bordered btn-lg btn-flat font-weight-600 pl-30 pr-30" href="#">Khóa Học</a>
                                </div>
                            </li>

                            <!-- SLIDE 3 -->
                            <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('template/images/bg/hoc-vien-5.jpg') }}" data-rotate="0"  data-fstransition="fade" data-saveperformance="off" data-title="Web Show" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('template/images/bg/hoc-vien-5.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0 bg-theme-colored-transparent-4"
                                     id="slide-3-layer-1"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                     data-width="full"
                                     data-height="full"
                                     data-whitespace="normal"
                                     data-transform_idle="o:1;"
                                     data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                     data-start="500"
                                     data-basealign="slide"
                                     data-responsive_offset="on"
                                     style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);">
                                </div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme rs-parallaxlevel-0 text-white text-uppercase font-roboto-slab font-weight-700"
                                     id="slide-3-layer-2"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['top','top','top','top']" data-voffset="['195','195','160','170']"
                                     data-fontsize="['58','48','42','36']"
                                     data-lineheight="['70','60','50','45']"
                                     data-fontweight="['800','700','700','700']"
                                     data-textalign="['center','center','center','center']"
                                     data-width="['700','650','600','420']"
                                     data-height="none"
                                     data-whitespace="normal"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                     data-start="600"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 5; white-space: nowrap; font-weight:700;">ƯU ĐÃI<span class="text-theme-colored2"> HỌC PHÍ</span>
                                </div>
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"
                                     id="slide-3-layer-3"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['top','top','top','top']" data-voffset="['275','260','220','220']"
                                     data-fontsize="['16','16',18',16']"
                                     data-lineheight="['24','24','24','24']"
                                     data-fontweight="['400','400','400','400']"
                                     data-textalign="['center','center','center','center']"
                                     data-width="['800','650','600','460']"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                     data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                     data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                     data-start="700"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     style="z-index: 5; white-space: nowrap;">5T Guitar Đơn vị Đào tạo Âm nhạc Top 1 Hà Nội, học viên đông nhất <br> với 6 cơ sở dạy đàn Guitar tại Hà Nội
                                </div>
                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption rs-parallaxlevel-0"
                                     id="slide-3-layer-4"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['top','top','top','top']" data-voffset="['350','330','290','290']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                                     data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                     data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                     data-mask_in="x:0px;y:0px;"
                                     data-mask_out="x:0;y:0;"
                                     data-start="800"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on"
                                     data-responsive="off"
                                     style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-theme-colored2 btn-lg btn-flat text-white font-weight-600 pl-30 pr-30 mr-15" href="#">Thông Tin</a><a class="btn btn-default btn-transparent btn-bordered btn-lg btn-flat font-weight-600 pl-30 pr-30" href="#">Khóa Học</a>
                                </div>
                            </li>
                        </ul>
                        <div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(255, 255, 255, 0.2);"></div>
                    </div>
                </div>

                <!-- END REVOLUTION SLIDER -->
                <script type="text/javascript">
                    var tpj=jQuery;
                    var revapi34;
                    tpj(document).ready(function() {
                        if(tpj("#rev_slider_home").revolution == undefined){
                            revslider_showDoubleJqueryError("#rev_slider_home");
                        }else{
                            revapi34 = tpj("#rev_slider_home").show().revolution({
                                sliderType:"standard",
                                jsFileLocation:"js/revolution-slider/js/",
                                sliderLayout:"fullwidth",
                                dottedOverlay:"none",
                                delay:5000,
                                navigation: {
                                    keyboardNavigation:"on",
                                    keyboard_direction: "horizontal",
                                    mouseScrollNavigation:"off",
                                    onHoverStop:"on",
                                    touch:{
                                        touchenabled:"on",
                                        swipe_threshold: 75,
                                        swipe_min_touches: 1,
                                        swipe_direction: "horizontal",
                                        drag_block_vertical: false
                                    }
                                    ,
                                    arrows: {
                                        style:"zeus",
                                        enable:true,
                                        hide_onmobile:true,
                                        hide_under:600,
                                        hide_onleave:true,
                                        hide_delay:200,
                                        hide_delay_mobile:1200,
                                        tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                                        left: {
                                            h_align:"left",
                                            v_align:"center",
                                            h_offset:30,
                                            v_offset:0
                                        },
                                        right: {
                                            h_align:"right",
                                            v_align:"center",
                                            h_offset:30,
                                            v_offset:0
                                        }
                                    },
                                    bullets: {
                                        enable:true,
                                        hide_onmobile:true,
                                        hide_under:600,
                                        style:"metis",
                                        hide_onleave:true,
                                        hide_delay:200,
                                        hide_delay_mobile:1200,
                                        direction:"horizontal",
                                        h_align:"center",
                                        v_align:"bottom",
                                        h_offset:0,
                                        v_offset:30,
                                        space:5,
                                        tmp:'<span class="tp-bullet-img-wrap"><span class="tp-bullet-image"></span></span>'
                                    }
                                },
                                viewPort: {
                                    enable:true,
                                    outof:"pause",
                                    visible_area:"80%"
                                },
                                responsiveLevels:[1240,1024,778,480],
                                gridwidth:[1240,1024,778,480],
                                gridheight:[600,550,500,450],
                                lazyType:"none",
                                parallax: {
                                    type:"scroll",
                                    origo:"enterpoint",
                                    speed:400,
                                    levels:[5,10,15,20,25,30,35,40,45,50],
                                },
                                shadow:0,
                                spinner:"off",
                                stopLoop:"off",
                                stopAfterLoops:-1,
                                stopAtSlide:-1,
                                shuffle:"off",
                                autoHeight:"off",
                                hideThumbsOnMobile:"off",
                                hideSliderAtLimit:0,
                                hideCaptionAtLimit:0,
                                hideAllCaptionAtLilmit:0,
                                debugMode:false,
                                fallbacks: {
                                    simplifyAll:"off",
                                    nextSlideOnWindowFocus:"off",
                                    disableFocusListener:false,
                                }
                            });
                        }
                    }); /*ready*/
                </script>
                <!-- END REVOLUTION SLIDER -->

            </div>
        </section>

        <!-- Divider: Features -->
        <section class="divider bg-silver-deep">
            <div class="container pt-50 pb-60">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 mb-sm-30">
                        <div class="feature-box text-center">
                            <div class="feature-icon">
                                <img src="{{ asset('template/images/icons/online.png') }}" alt="">
                            </div>
                            <div class="feature-title">
                                <h3>Đăng Ký Online</h3>
                                <a href="#" class="read-more font-roboto-slab text-theme-colored2">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 mb-sm-30">
                        <div class="feature-box text-center">
                            <div class="feature-icon">
                                <img src="{{ asset('template/images/icons/book.png') }}" alt="">
                            </div>
                            <div class="feature-title">
                                <h3>Giáo Trình Hiện Đại</h3>
                                <a href="#" class="read-more font-roboto-slab text-theme-colored2">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="feature-box text-center">
                            <div class="feature-icon">
                                <img src="{{ asset('template/images/icons/graduate.png') }}" alt="">
                            </div>
                            <div class="feature-title">
                                <h3>Hơn 20.000 Học Viên</h3>
                                <a href="#" class="read-more font-roboto-slab text-theme-colored2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: About -->
        <section>
            <div class="container pb-70">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-5">
                            <img class="img-fullwidth maxwidth500" src="{{ asset('template/images/about/1.png') }}" alt="">
                        </div>
                        <div class="col-md-4">
                            <h2 class="text-uppercasetext-theme-colored mt-0 mt-sm-30">Giới thiệu <span class="text-theme-colored2">5T Guitar</span></h2>
                            <div class="double-line-bottom-theme-colored-2"></div>
                            <p>Hệ thống Trung tâm dạy học Guitar 5T là hệ thống Trung tâm Giáo dục Âm nhạc cải cách theo hướng hiện đại, mở ra 1 cách học mới, cách tiếp cận âm nhạc mới cho người chơi. </p>
                            <p class="hidden-md">Là nơi duy nhất - đầu tiên của Việt Nam có 1 phương pháp Quốc tế kết hợp nắm bắt và thấu hiểu tâm lý người Việt để cho ra 1 bộ giáo trình, giúp các học viên có thể đệm đàn sau 4 buổi học từ người chưa biết gì.</p>
                            <a href="#" class="btn btn-colored btn-theme-colored2 text-white btn-lg pl-40 pr-40 mt-15">Read More</a>
                        </div>
                        <div class="col-md-3">
                            <div class="top-course-thumb mt-sm-30">
                                <img class="img-fullwidth" src="{{ asset('template/images/about/2.jpg') }}" alt="">
                                <div class="desc-box">
                                    <h4 class="title">Admission for Spring</h4>
                                    <h4 class="off">40% Off</h4>
                                    <a href="#" class="signup text-theme-colored-2">Signup Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Courses -->
        <section id="courses" class="bg-silver-deep">
            <div class="container pb-40">
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

        <!-- Divider: Reservation Form -->
        <section id="reservation" class="parallax layer-overlay overlay-theme-colored-9" data-bg-img="{{ asset('template/images/bg/hoc-vien.jpg') }}" data-parallax-ratio="0.4">
            <div class="container">
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
                            <form id="reservation_form" name="reservation_form" class="reservation-form mt-20" method="post" action="http://html.kodesolution.live/j/learnpro/v4.0/demo/includes/reservation.php" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <input placeholder="Enter Name" id="reservation_name" name="reservation_name" required="" class="form-control" aria-required="true" type="text">
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
                                                <select id="person_select" name="person_select" class="form-control" required="">
                                                    <option value="">Choose Subject</option>
                                                    <option value="1 Person">Software Engineering</option>
                                                    <option value="2 Person">Computer Science engineering</option>
                                                    <option value="3 Person">Accounting Technologies</option>
                                                    <option value="Family Pack">BACHELOR`S DEGREE</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-20">
                                            <input name="Date Of Birth" class="form-control required date-picker" placeholder="Date Of Birth" aria-required="true" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea placeholder="Enter Message" rows="3" class="form-control required" name="form_message" id="form_message" aria-required="true"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-0 mt-10">
                                            <input name="form_botcheck" class="form-control" value="" type="hidden">
                                            <button type="submit" class="btn btn-colored btn-theme-colored2 text-white btn-lg btn-block" data-loading-text="Please wait...">Đăng ký</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- Application Form End-->

                            <!-- Application Form Validation Start-->
                            <script type="text/javascript">
                                $("#reservation_form").validate({
                                    submitHandler: function(form) {
                                        var form_btn = $(form).find('button[type="submit"]');
                                        var form_result_div = '#form-result';
                                        $(form_result_div).remove();
                                        form_btn.before('&amp;lt;div id="form-result" class="alert alert-success" role="alert" style="display: none;"&amp;gt;&amp;lt;/div&amp;gt;');
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
                            <!-- Application Form Validation Start -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
        <section id="gallery">
            <div class="container">
                <div class="section-title">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-uppercase title">HÌNH ẢNH <span class="text-theme-colored2">HỌC VIÊN</span></h2>
                            <p class="text-uppercase mb-0">Học Viên Tại Hệ Thống 5T</p>
                            <div class="double-line-bottom-theme-colored-2"></div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Works Filter -->
                            <div class="portfolio-filter font-alt align-center">
                                <a href="#" class="active" data-filter="*">All</a>
                                <a href="#select1" class="" data-filter=".select1">Photos</a>
                                <a href="#select2" class="" data-filter=".select2">Campus</a>
                                <a href="#select3" class="" data-filter=".select3">Students</a>
                            </div>
                            <!-- End Works Filter -->

                            <!-- Portfolio Gallery Grid -->
                            <div id="grid" class="gallery-isotope default-animation-effect grid-4 gutter clearfix">

                                <!-- Portfolio Item Start -->
                                <div class="gallery-item select1">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{ asset('template/images/gallery/s1.jpg') }}" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-bordered icon-circled icon-theme-colored2">
                                                    <a data-lightbox="image" href="{{ asset('template/images/gallery/1.jpg') }}"><i class="fa fa-plus"></i></a>
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="hover-link" data-lightbox="image" href="{{ asset('template/images/gallery/1.jpg') }}">View more</a>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->

                                <!-- Portfolio Item Start -->
                                <div class="gallery-item select1">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{ asset('template/images/gallery/s2.jpg') }}" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-bordered icon-circled icon-theme-colored2">
                                                    <a data-lightbox="image" href="{{ asset('template/images/gallery/2.jpg') }}"><i class="fa fa-plus"></i></a>
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="hover-link" data-lightbox="image" href="{{ asset('template/images/gallery/2.jpg') }}">View more</a>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->

                                <!-- Portfolio Item Start -->
                                <div class="gallery-item select2">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{ asset('template/images/gallery/s3.jpg') }}" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-bordered icon-circled icon-theme-colored2">
                                                    <a data-lightbox="image" href="{{ asset('template/images/gallery/3.jpg') }}"><i class="fa fa-plus"></i></a>
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="hover-link" data-lightbox="image" href="{{ asset('template/images/gallery/3.jpg') }}">View more</a>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->

                                <!-- Portfolio Item Start -->
                                <div class="gallery-item select3">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{ asset('template/images/gallery/s4.jpg') }}" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-bordered icon-circled icon-theme-colored2">
                                                    <a data-lightbox="image" href="{{ asset('template/images/gallery/4.jpg') }}"><i class="fa fa-plus"></i></a>
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="hover-link" data-lightbox="image" href="{{ asset('template/images/gallery/4.jpg') }}">View more</a>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->

                                <!-- Portfolio Item Start -->
                                <div class="gallery-item select1" style="position: absolute; left: 0px; top: 165px;">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{ asset('template/images/gallery/s5.jpg') }}" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-bordered icon-circled icon-theme-colored2">
                                                    <a data-lightbox="image" href="{{ asset('template/images/gallery/5.jpg') }}"><i class="fa fa-plus"></i></a>
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="hover-link" data-lightbox="image" href="{{ asset('template/images/gallery/5.jpg') }}">View more</a>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->

                                <!-- Portfolio Item Start -->
                                <div class="gallery-item select3" style="position: absolute; left: 285px; top: 165px;">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{ asset('template/images/gallery/s6.jpg') }}" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-bordered icon-circled icon-theme-colored2">
                                                    <a data-lightbox="image" href="{{ asset('template/images/gallery/6.jpg') }}"><i class="fa fa-plus"></i></a>
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="hover-link" data-lightbox="image" href="{{ asset('template/images/gallery/6.jpg') }}">View more</a>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->

                                <!-- Portfolio Item Start -->
                                <div class="gallery-item select2" style="position: absolute; left: 570px; top: 165px;">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{ asset('template/images/gallery/s7.jpg') }}" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-bordered icon-circled icon-theme-colored2">
                                                    <a data-lightbox="image" href="{{ asset('template/images/gallery/7.jpg') }}"><i class="fa fa-plus"></i></a>
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="hover-link" data-lightbox="image" href="{{ asset('template/images/gallery/7.jpg') }}">View more</a>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->

                                <!-- Portfolio Item Start -->
                                <div class="gallery-item select3" style="position: absolute; left: 855px; top: 165px;">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{ asset('template/images/gallery/s8.jpg') }}" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-bordered icon-circled icon-theme-colored2">
                                                    <a data-lightbox="image" href="{{ asset('template/images/gallery/8.jpg') }}"><i class="fa fa-plus"></i></a>
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="hover-link" data-lightbox="image" href="{{ asset('template/images/gallery/8.jpg') }}">View more</a>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->

                                <!-- Portfolio Item Start -->
                                <div class="gallery-item select1" style="position: absolute; left: 0px; top: 330px;">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{ asset('template/images/gallery/s9.jpg') }}" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-bordered icon-circled icon-theme-colored2">
                                                    <a data-lightbox="image" href="{{ asset('template/images/gallery/9.jpg') }}"><i class="fa fa-plus"></i></a>
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="hover-link" data-lightbox="image" href="{{ asset('template/images/gallery/9.jpg') }}">View more</a>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->

                                <!-- Portfolio Item Start -->
                                <div class="gallery-item select2" style="position: absolute; left: 285px; top: 330px;">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{ asset('template/images/gallery/s10.jpg') }}" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-bordered icon-circled icon-theme-colored2">
                                                    <a data-lightbox="image" href="{{ asset('template/images/gallery/10.jpg') }}"><i class="fa fa-plus"></i></a>
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="hover-link" data-lightbox="image" href="{{ asset('template/images/gallery/10.jpg') }}">View more</a>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->

                                <!-- Portfolio Item Start -->
                                <div class="gallery-item select1" style="position: absolute; left: 570px; top: 330px;">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{ asset('template/images/gallery/s11.jpg') }}" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-bordered icon-circled icon-theme-colored2">
                                                    <a data-lightbox="image" href="{{ asset('template/images/gallery/11.jpg') }}"><i class="fa fa-plus"></i></a>
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="hover-link" data-lightbox="image" href="{{ asset('template/images/gallery/11.jpg') }}">View more</a>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->

                                <!-- Portfolio Item Start -->
                                <div class="gallery-item select3" style="position: absolute; left: 855px; top: 330px;">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="{{ asset('template/images/gallery/s12.jpg') }}" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-bordered icon-circled icon-theme-colored2">
                                                    <a data-lightbox="image" href="{{ asset('template/images/gallery/12.jpg') }}"><i class="fa fa-plus"></i></a>
                                                    <a href="#"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="hover-link" data-lightbox="image" href="{{ asset('template/images/gallery/12.jpg') }}">View more</a>
                                    </div>
                                </div>
                                <!-- Portfolio Item End -->

                            </div>
                            <!-- End Portfolio Gallery Grid -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Divider: Divider -->
        <section class="parallax divider layer-overlay overlay-theme-colored-9" data-bg-img="{{ asset('template/images/bg/bg4.jpg') }}" data-parallax-ratio="0.4">
            <div class="container pt-60 pb-90">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="text-white text-uppercase font-46 font-weight-700 mb-10">VIDEO GIỚI THIỆU<span class="text-theme-colored2"> 5T</span> MUSIC</h2>
                        <p class="font-16 text-white mb-20">Sang trọng và khác biệt hơn<br> Đam mê sáng tạo – Chắc chắn thành công! </p>
                        <a href="https://www.youtube.com/watch?v=kt-4lJs_8fE" data-lightbox-gallery="youtube-video"><i class="fa fa-play-circle text-theme-colored2 play-btn"></i></a>
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

        <!-- Section: blog -->
        <section id="blog">
            <div class="container pb-40">
                <div class="section-title">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-uppercase title"><span class="text-theme-colored2">TIN TỨC </span>Mới Nhất </h2>
                            <p class="text-uppercase mb-0">BẢNG TIN CỦA 5T</p>
                            <div class="double-line-bottom-theme-colored-2"></div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="owl-carousel-3col owl-nav-top" data-nav="true">
                                <div class="item">
                                    <article class="post clearfix mb-30">
                                        <div class="entry-header">
                                            <div class="post-thumb thumb">
                                                <img src="{{ asset('template/images/blog/1.jpg') }}" alt="" class="img-responsive img-fullwidth">
                                            </div>
                                            <div class="entry-date media-left text-center flip bg-theme-colored border-top-theme-colored2-3px pt-5 pr-15 pb-5 pl-15">
                                                <ul>
                                                    <li class="font-16 text-white font-weight-600">28</li>
                                                    <li class="font-12 text-white text-uppercase">Feb</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="entry-content p-15">
                                            <div class="entry-meta media no-bg no-border mt-0 mb-10">
                                                <div class="media-body pl-0">
                                                    <div class="event-content pull-left flip">
                                                        <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a href="blog-single-left-sidebar.html">Post title here</a></h4>
                                                        <ul class="list-inline">
                                                            <li><i class="fa fa-user-o mr-5 text-theme-colored2"></i>By Author</li>
                                                            <li><i class="fa fa-thumbs-o-up mr-5 text-theme-colored2"></i>Likes</li>
                                                            <li><i class="fa fa-share-alt mr-5 text-theme-colored2"></i> 895 Likes</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti</p>
                                            <a class="btn btn-default btn-flat font-12 mt-10 ml-5" href="blog-single-left-sidebar.html"> View Details</a>
                                        </div>
                                    </article>
                                </div>
                                <div class="item">
                                    <article class="post clearfix mb-30">
                                        <div class="entry-header">
                                            <div class="post-thumb thumb">
                                                <img src="{{ asset('template/images/blog/2.jpg') }}" alt="" class="img-responsive img-fullwidth">
                                            </div>
                                            <div class="entry-date media-left text-center flip bg-theme-colored border-top-theme-colored2-3px pt-5 pr-15 pb-5 pl-15">
                                                <ul>
                                                    <li class="font-16 text-white font-weight-600">28</li>
                                                    <li class="font-12 text-white text-uppercase">Feb</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="entry-content p-15">
                                            <div class="entry-meta media no-bg no-border mt-0 mb-10">
                                                <div class="media-body pl-0">
                                                    <div class="event-content pull-left flip">
                                                        <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a href="blog-single-left-sidebar.html">CƠ SỞ MỚI 5T</a></h4>
                                                        <ul class="list-inline">
                                                            <li><i class="fa fa-user-o mr-5 text-theme-colored2"></i>By Author</li>
                                                            <li><i class="fa fa-thumbs-o-up mr-5 text-theme-colored2"></i>Likes</li>
                                                            <li><i class="fa fa-share-alt mr-5 text-theme-colored2"></i> 895 Likes</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti</p>
                                            <a class="btn btn-default btn-flat font-12 mt-10 ml-5" href="blog-single-left-sidebar.html"> View Details</a>
                                        </div>
                                    </article>
                                </div>
                                <div class="item">
                                    <article class="post clearfix mb-30">
                                        <div class="entry-header">
                                            <div class="post-thumb thumb">
                                                <img src="{{ asset('template/images/blog/3.jpg') }}" alt="" class="img-responsive img-fullwidth">
                                            </div>
                                            <div class="entry-date media-left text-center flip bg-theme-colored border-top-theme-colored2-3px pt-5 pr-15 pb-5 pl-15">
                                                <ul>
                                                    <li class="font-16 text-white font-weight-600">28</li>
                                                    <li class="font-12 text-white text-uppercase">Feb</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="entry-content p-15">
                                            <div class="entry-meta media no-bg no-border mt-0 mb-10">
                                                <div class="media-body pl-0">
                                                    <div class="event-content pull-left flip">
                                                        <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a href="blog-single-left-sidebar.html">SIÊU PHẨM 5T-AD </a></h4>
                                                        <ul class="list-inline">
                                                            <li><i class="fa fa-user-o mr-5 text-theme-colored2"></i>By Author</li>
                                                            <li><i class="fa fa-thumbs-o-up mr-5 text-theme-colored2"></i>Likes</li>
                                                            <li><i class="fa fa-share-alt mr-5 text-theme-colored2"></i> 895 Likes</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti</p>
                                            <a class="btn btn-default btn-flat font-12 mt-10 ml-5" href="blog-single-left-sidebar.html"> View Details</a>
                                        </div>
                                    </article>
                                </div>
                                <div class="item">
                                    <article class="post clearfix mb-30">
                                        <div class="entry-header">
                                            <div class="post-thumb thumb">
                                                <img src="{{ asset('template/images/blog/4.jpg') }}" alt="" class="img-responsive img-fullwidth">
                                            </div>
                                            <div class="entry-date media-left text-center flip bg-theme-colored border-top-theme-colored2-3px pt-5 pr-15 pb-5 pl-15">
                                                <ul>
                                                    <li class="font-16 text-white font-weight-600">28</li>
                                                    <li class="font-12 text-white text-uppercase">Feb</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="entry-content p-15">
                                            <div class="entry-meta media no-bg no-border mt-0 mb-10">
                                                <div class="media-body pl-0">
                                                    <div class="event-content pull-left flip">
                                                        <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a href="blog-single-left-sidebar.html">BẢO QUẢN ĐÀN ĐÚNG CÁCH</a></h4>
                                                        <ul class="list-inline">
                                                            <li><i class="fa fa-user-o mr-5 text-theme-colored2"></i>By Author</li>
                                                            <li><i class="fa fa-thumbs-o-up mr-5 text-theme-colored2"></i>Likes</li>
                                                            <li><i class="fa fa-share-alt mr-5 text-theme-colored2"></i> 895 Likes</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti</p>
                                            <a class="btn btn-default btn-flat font-12 mt-10 ml-5" href="blog-single-left-sidebar.html"> View Details</a>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
