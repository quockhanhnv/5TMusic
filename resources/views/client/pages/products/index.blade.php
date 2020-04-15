@extends('client.layouts.layout')

@section('content')
    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
{{--        <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="{{ asset('template/images/bg/bg1.jpg') }}">--}}
{{--            <div class="container pt-120 pb-60">--}}
{{--                <!-- Section Content -->--}}
{{--                <div class="section-content">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-6">--}}
{{--                            <h2 class="text-theme-colored2 font-36">Shop With Sidebar</h2>--}}
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

        <section class="">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="products">
                                <div class="row multi-row-clearfix">
                                    @foreach($hotProducts as $product)
                                    <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                                        <div class="product">
                                            <span class="tag-sale">- {{ $product->pro_sale ?? 0 }}%</span>
                                            <div class="product-thumb"> <img alt="" src="{{ $product->pro_avatar }}" class="img-responsive img-fullwidth">
                                                <div class="overlay"></div>
                                            </div>
                                            <div class="product-details text-center">
                                                <a href="{{ route('client.product.show', ['slug' => \Illuminate\Support\Str::slug($product->pro_name) . '-' . $product->id]) }}"><h5 class="product-title">{{ $product->pro_name }}</h5></a>
                                                <div class="star-rating" title="Rated 4.50 out of 5"><span data-width="90%">3.50</span></div>
                                                <div class="price"><del><span class="amount">{{ number_format($product->pro_price, 0, '.', ',') }}</span></del><ins><span class="amount">{{ number_format(getPriceSale($product->pro_price, $product->pro_sale), 0, '.', ',') }}</span></ins></div>
                                                <div class="btn-add-to-cart-wrapper">
                                                    <a class="btn btn-default btn-xs btn-add-to-cart" href="{{ route('client.shopping.add', ['id' => $product->id]) }}">Thêm vào giỏ hàng</a>
                                                </div>NSX: {{ $product->getProvider() }}
                                            </div>
                                        </div>
                                    </div>
                                   @endforeach
                                </div>

                                {{-- ==================Begin Pagination==================--}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <nav>
                                            <ul class="pagination theme-colored">
                                               {{ $hotProducts->appends($query)->links() }}
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                {{-- ==================End Pagination==================--}}
                            </div>
                        </div>

                        {{-- ============= Begin Sidebar ======================--}}
                        @include('client.pages.products.includes.sidebar')
                        {{-- ============= End Sidebar ======================--}}
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->
@endsection
