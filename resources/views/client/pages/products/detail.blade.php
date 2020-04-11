@extends('client.layouts.layout')

@section('content')
    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="images/bg/bg1.jpg">
            <div class="container pt-120 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-theme-colored2 font-36">Prouct Details</h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li class="active">Current Page</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                                        <li><a href="#tab3" data-toggle="tab">Đánh giá</a></li>
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
                                        <div class="tab-pane fade" id="tab3">
                                            <div class="reviews">
                                                <ol class="commentlist">
                                                    <li class="comment">
                                                        <div class="media"> <a href="#" class="media-left"><img class="thumb img-circle media-object" alt="" src="https://placehold.it/75x75" width="75"></a>
                                                            <div class="media-body">
                                                                <ul class="review_text list-inline mt-5">
                                                                    <li>
                                                                        <div title="Rated 5.00 out of 5" class="star-rating"><span  data-width="100%">5.00</span></div>
                                                                    </li>
                                                                    <li>
                                                                        <h5 class="media-heading meta"><span class="author">Tom Joe</span> – Mar 15, 2015:</h5>
                                                                    </li>
                                                                </ul>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat purus tempor sem molestie, sed blandit lacus posuere. Lorem ipsum dolor sit amet.</div>
                                                        </div>
                                                    </li>
                                                    <li class="comment">
                                                        <div class="media"> <a href="#" class="media-left"><img class="thumb img-circle media-object" alt="" src="https://placehold.it/75x75" width="75"></a>
                                                            <div class="media-body">
                                                                <ul class="review_text list-inline mt-5">
                                                                    <li>
                                                                        <div title="Rated 4.00 out of 5" class="star-rating"><span  data-width="80%">4.00</span></div>
                                                                    </li>
                                                                    <li>
                                                                        <h5 class="media-heading meta"><span class="author">Mark Doe</span> – Jan 23, 2015:</h5>
                                                                    </li>
                                                                </ul>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat purus tempor sem molestie, sed blandit lacus posuere. Lorem ipsum dolor sit amet.</div>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-30">
                            <h4>Related Products</h4>
                            <div class="products related owl-carousel-4col" data-nav="true">
                                <div class="item">
                                    <div class="product">
                                        <span class="tag-sale">Sale!</span>
                                        <div class="product-thumb"> <img alt="" src="https://placehold.it/260x194" class="img-responsive img-fullwidth">
                                            <div class="overlay"></div>
                                        </div>
                                        <div class="product-details text-center">
                                            <a href="#"><h5 class="product-title">Cordless Combi Drill</h5></a>
                                            <div class="star-rating" title="Rated 4.50 out of 5"><span data-width="90%">3.50</span></div>
                                            <div class="price"><del><span class="amount">$520.00</span></del><ins><span class="amount">$480.00</span></ins></div>
                                            <div class="btn-add-to-cart-wrapper">
                                                <a class="btn btn-default btn-xs btn-add-to-cart" href="#">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product">
                                        <div class="product-thumb"> <img alt="" src="https://placehold.it/260x194" class="img-responsive img-fullwidth">
                                            <div class="overlay"></div>
                                        </div>
                                        <div class="product-details text-center">
                                            <a href="#"><h5 class="product-title">Angle Grinders</h5></a>
                                            <div class="star-rating" title="Rated 5.00 out of 5"><span  data-width="100%">5.00</span></div>
                                            <div class="price"><del><span class="amount">$364.00</span></del><ins><span class="amount">$344.00</span></ins></div>
                                            <div class="btn-add-to-cart-wrapper">
                                                <a class="btn btn-default btn-xs btn-add-to-cart" href="#">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product">
                                        <span class="tag-sale">Hot!</span>
                                        <div class="product-thumb"> <img alt="" src="https://placehold.it/260x194" class="img-responsive img-fullwidth">
                                            <div class="overlay"></div>
                                        </div>
                                        <div class="product-details text-center">
                                            <a href="#"><h5 class="product-title">Planers</h5></a>
                                            <div class="star-rating" title="Rated 5.00 out of 5"><span  data-width="100%">3.90</span></div>
                                            <div class="price"><span class="amount">$245.00</span></div>
                                            <div class="btn-add-to-cart-wrapper">
                                                <a class="btn btn-default btn-xs btn-add-to-cart" href="#">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product">
                                        <div class="product-thumb"> <img alt="" src="https://placehold.it/260x194" class="img-responsive img-fullwidth">
                                            <div class="overlay"></div>
                                        </div>
                                        <div class="product-details text-center">
                                            <a href="#"><h5 class="product-title">Circular Saw</h5></a>
                                            <div class="star-rating" title="Rated 4.90 out of 5"><span  data-width="95%">4.60</span></div>
                                            <div class="price"><del><span class="amount">$490.00</span></del><ins><span class="amount">$475.00</span></ins></div>
                                            <div class="btn-add-to-cart-wrapper">
                                                <a class="btn btn-default btn-xs btn-add-to-cart" href="#">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product">
                                        <div class="product-thumb"> <img alt="" src="https://placehold.it/260x194" class="img-responsive img-fullwidth">
                                            <div class="overlay"></div>
                                        </div>
                                        <div class="product-details text-center">
                                            <a href="#"><h5 class="product-title">Angle Grinders</h5></a>
                                            <div class="star-rating" title="Rated 5.00 out of 5"><span  data-width="100%">5.00</span></div>
                                            <div class="price"><del><span class="amount">$364.00</span></del><ins><span class="amount">$344.00</span></ins></div>
                                            <div class="btn-add-to-cart-wrapper">
                                                <a class="btn btn-default btn-xs btn-add-to-cart" href="#">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product">
                                        <span class="tag-sale">Hot!</span>
                                        <div class="product-thumb"> <img alt="" src="https://placehold.it/260x194" class="img-responsive img-fullwidth">
                                            <div class="overlay"></div>
                                        </div>
                                        <div class="product-details text-center">
                                            <a href="#"><h5 class="product-title">Planers</h5></a>
                                            <div class="star-rating" title="Rated 5.00 out of 5"><span  data-width="100%">3.90</span></div>
                                            <div class="price"><span class="amount">$245.00</span></div>
                                            <div class="btn-add-to-cart-wrapper">
                                                <a class="btn btn-default btn-xs btn-add-to-cart" href="#">Add To Cart</a>
                                            </div>
                                        </div>
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
@endsection
