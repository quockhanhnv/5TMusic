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
                        <a href="#" class="active" data-filter="*">Tất cả</a>
                        @foreach($galleryTypes as $type => $galleryType)
                            <a href="#{{$type}}" class="" data-filter=".{{$type}}">{{ $galleryType }}</a>
                        @endforeach
                    </div>
                    <!-- End Works Filter -->

                    <!-- Portfolio Gallery Grid -->
                    <div id="grid" class="gallery-isotope default-animation-effect grid-4 gutter clearfix">

                        <!-- Portfolio Item Start -->
                        @foreach($gallerImages as $gallerImage)
                        <div class="gallery-item {{$gallerImage->gallery_type}}">
                            <div class="thumb">
                                <img class="img-fullwidth" src="{{ $gallerImage->gallery_file_path }}" alt="project">
                                <div class="overlay-shade"></div>
                                <div class="icons-holder">
                                    <div class="icons-holder-inner">
                                        <div class="styled-icons icon-sm icon-bordered icon-circled icon-theme-colored2">
                                            <a data-lightbox="image" href="{{ $gallerImage->gallery_file_path }}"><i class="fa fa-plus"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a class="hover-link" data-lightbox="image" href="{{ $gallerImage->gallery_file_path }}">Xem thêm</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- End Portfolio Gallery Grid -->
                </div>
            </div>
        </div>
    </div>
</section>
