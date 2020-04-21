<div class="col-sm-12 col-md-4">
    <div class="sidebar sidebar-left mt-sm-30 ml-30 ml-sm-0">
        <div class="widget border-1px bg-silver-deep p-15">
            <h4 class="widget-title line-bottom-theme-colored-2">Khóa Học Nổi Bật</h4>
            <div class="product-list">
            @foreach($courses as $course) <!-- from view composer-->
                <div class="media">
                    <a class="media-left pull-left flip" href="#">
                        <img class="media-object thumb" width="80" src="{{ $course->course_avatar }}" alt="">
                    </a>
                    <div class="media-body">
                        <h5 class="media-heading product-title mb-0"><a href="#">{{ $course->course_name }}</a></h5>
                        <div class="star-rating mt-5 mb-5 ml-0" title="Rated {{ $course->course_review_total ? round($course->course_review_star/$course->course_review_total, 2) : 0}} out of 5">
                            <span data-width="{{$course->course_review_total ? (($course->course_review_star/$course->course_review_total)/5)*100 : 0}}%">{{ $course->course_review_total ? round($course->course_review_star/$course->course_review_total, 2) : 0}}</span>
                        </div>
                        <span class="price">{{ number_format(getPriceSale($course->course_price, $course->course_sale), 0, '.', ',') }} k</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="widget border-1px bg-silver-deep p-15">
            <h4 class="widget-title line-bottom-theme-colored-2 mb-10">Sản Phẩm Mới Nhất</h4>
            <div class="categories">
                <ul class="list-border">
                    @foreach($products as $product)
                    <li>
                        <a href="{{ route('client.product.show', $product->pro_slug . '-' . $product->id) }}">
                            <i class="fa fa-hand-o-right"></i> &nbsp;{{ $product->pro_name }} &nbsp;<span class="label label-danger">New</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
