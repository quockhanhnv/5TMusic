@extends('client.layouts.layout')

@section('content')
    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
{{--        <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="images/bg/bg1.jpg">--}}
{{--            <div class="container pt-120 pb-60">--}}
{{--                <!-- Section Content -->--}}
{{--                <div class="section-content">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-6">--}}
{{--                            <h2 class="text-theme-colored2 font-36">Prouct Details</h2>--}}
{{--                            <ol class="breadcrumb text-left mt-10 white">--}}
{{--                                <li><a href="#">Home</a></li>--}}
{{--                                <li><a href="#">Pages</a></li>--}}
{{--                                <li class="active">Current Page</li>--}}
{{--                            </ol>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

        <section>
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="product">
                                <div class="col-md-3">
                                <div class="product-image">
                                    <ul class="owl-carousel-1col" data-nav="true">
                                        <li data-thumb=""><a href="" data-lightbox="single-product"><img src="{{ $product->pro_avatar }}" alt=""></a></li>
                                        <li data-thumb=""><a href="" data-lightbox="single-product"><img src="{{ $product->pro_avatar }}" alt=""></a></li>
                                        <li data-thumb=""><a href="" data-lightbox="single-product"><img src="{{ $product->pro_avatar }}" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="product-summary">
                                    <h2 class="product-title">{{ $product->pro_name }}</h2>
                                    <div class="product_review">
                                        <ul class="review_text list-inline">
                                            <li>
                                                <div title="Rated 4.50 out of 5" class="star-rating"><span data-width="90%">4.50</span></div>
                                            </li>
                                            <li><a href="#"><span>2</span>Reviews</a></li>
                                            <li><a href="#">Add reviews</a></li>
                                        </ul>
                                    </div>
                                    <div class="price"> <del><span class="amount">{{ number_format($product->pro_price, 0, '.', ',') }}</span></del> <ins><span class="amount">{{ number_format(getPriceSale($product->pro_price, $product->pro_sale), 0, '.', ',') }}</span></ins> </div>
                                    <div class="short-description">
                                        <p>{{ $product->pro_description }}.</p>
                                    </div>
                                    <div class="category"><strong>Danh mục:</strong> <a href="#">{{ $product->category->c_name }}</div>
                                    <div class="tags"><strong>Tags:</strong> <a href="#">Clothes</a>, <a href="#">Leather</a></div>
                                    <div class="cart-form-wrapper mt-30">
                                        <form action="{{ route('client.shopping.add', ['id' => $product->id]) }} }}" enctype="multipart/form-data" method="get" class="cart">
                                            @csrf
                                            <input type="hidden" value="productID" name="add-to-cart">
                                            <table class="table variations no-border">
                                                <tbody>
                                                <tr>
                                                    <td class="name">Số lượng</td>
                                                    <td class="value">
                                                        <div class="quantity buttons_added">
                                                            <input type="button" class="minus" value="-">
                                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="qty" min="1" step="1">
                                                            <input type="button" class="plus" value="+">
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <button class="single_add_to_cart_button btn btn-default" type="submit">Thêm vào giỏ hàng</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="horizontal-tab product-tab">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab1" data-toggle="tab">Chi tiết</a></li>
                                        <li><a href="#tab2" data-toggle="tab">Thông số kỹ thuật</a></li>
                                        <li><a href="#tab3" data-toggle="tab">Bình luận</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab1">
                                            <h3>Chi tiết về sản phẩm</h3>
                                            <p>{{ $product->pro_content }}</p>
                                        </div>
                                        <div class="tab-pane fade" id="tab2">
                                            <table class="table table-striped">
                                                <tbody>
                                                <tr>
                                                    <th>Kiểu dáng</th>
                                                    <td><p>{{ $product->pro_style }}</p></td>
                                                    <th>Mặt đàn</th>
                                                    <td><p>{{ $product->pro_body }}</p></td>
                                                </tr>
                                                <tr>
                                                    <th>Loại đàn</th>
                                                    <td><p>{{ $product->pro_type }}</p></td>
                                                    <th>Lưng đàn</th>
                                                    <td><p>{{ $product->pro_back }}</p></td>
                                                </tr>
                                                <tr>
                                                    <th>Số dây</th>
                                                    <td><p>{{ $product->pro_strings }}</p></td>
                                                    <th>Hông đàn</th>
                                                    <td><p>{{ $product->pro_hip }}</p></td>
                                                </tr>
                                                <tr>
                                                    <th>Số phím</th>
                                                    <td>{{ $product->pro_button }}</td>
                                                    <th>Phím đàn</th>
                                                    <td><p>{{ $product->pro_keyboard }}</p></td>
                                                </tr>
                                                <tr>
                                                    <th>EQ & Pickup</th>
                                                    <td>
                                                        @if($product->pro_eq_pickup == 1) Có
                                                        @else Không
                                                        @endif
                                                    </td>
                                                    <th>Cần đàn</th>
                                                    <td><p>{{ $product->pro_neck }}</p></td>
                                                </tr>
                                                <tr>
                                                    <th>Mặt phím</th>
                                                    <td><p>{{ $product->pro_keyboard_face }}</p></td>
                                                    <th>Ngựa đàn</th>
                                                    <td><p>{{ $product->pro_bridge }}</p></td>
                                                </tr>
                                                <tr>
                                                    <th>Lược đàn</th>
                                                    <td><p>{{ $product->pro_comb }}</p></td>
                                                    <th>Ngựa đàn</th>
                                                    <td><p>{{ $product->pro_string_type }}</p></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- Comments-->
                                        <div class="tab-pane fade" id="tab3">
                                            <h4 class="line-bottom-theme-colored-2 mb-0">Bình luận</h4>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="blog-posts single-post">
                                                        @if(isset($comments))
                                                            @include('client.pages.products.includes.comment-list', ['comments' => $comments])
                                                        @endif
                                                        @include('client.pages.products.includes.comment-form')
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- End Comments-->

                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('client.pages.products.includes.related-products')
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->
@endsection

@section('js')
    <script>
        $(document).ready(function(){
            $("#comment-form").validate({
                messages: {
                    commentable_name: "Vui lòng nhập tên của bạn",
                    commentable_content: "Vui lòng nhập nội dung bình luận",
                },
                submitHandler: function(form) {
                    var form_btn = $(form).find('button[type="submit"]');
                    var form_result_div = '#form-result';
                    $(form_result_div).remove();
                    var form_btn_old_msg = form_btn.html();
                    form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                    $(form).ajaxSubmit({
                        url: '{{ route('client.comment.add.product.cmt') }}',
                        method: 'POST',
                        dataType:  'json',
                        data: {
                            _token: '{{ csrf_token() }}',
                            commentable_id: "{{ $product->id }}"
                        },
                        success: function(data) {
                            if( data.status == 200 ) {
                                $(form).find('.form-control').val('');
                            }
                            form_btn.prop('disabled', false).html(form_btn_old_msg);
                            $(form_result_div).html(data.message).fadeIn('slow');
                            setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                            // console.log(data.html);
                            if(data.html) {
                                console.log('vào');
                                $('.comment-list li').last().remove(); // xóa cmt cuối
                                $('.comment-list').prepend(data.html); // hiện cmt vừa cmt lên đầu
                            }
                            toastr[data.type](data.message);
                        }
                    });
                }
            });

            // phân trang bằng ajax
            $("body").on("click", ".pagination a", function(e){
                e.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                // console.log(page);
                getPaginateComments(page);
            });

            function getPaginateComments(page)
            {
                $.ajax({
                    type: "GET",
                    url: '?page='+ page
                })
                    .success(function(response) {
                        $('.comment-list').html(response.html)
                        console.log(response.html);
                        // $('body').html(response);
                    });
            }
        });

    </script>
@endsection
