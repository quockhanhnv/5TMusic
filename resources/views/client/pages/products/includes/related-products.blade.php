<div class="col-md-12 mt-30">
    <h4>Sản phẩm liên quan</h4>
    <div class="products related owl-carousel-4col" data-nav="true">
        @foreach($products as $product) <!-- from composer -->
        <div class="item">
            <div class="product">
                <span class="tag-sale">Sale!</span>
                <div class="product-thumb"> <img alt="" src="{{ $product->pro_avatar }}" class="img-responsive img-fullwidth">
                    <div class="overlay"></div>
                </div>
                <div class="product-details text-center">
                    <a href="#"><h5 class="product-title">{{ $product->pro_name }}</h5></a>
                    <div class="star-rating" title="Rated 5 out of 5"><span data-width="100%">5</span></div>
                    <div class="price"><del><span class="amount">{{ number_format($product->pro_price, 0, '.', ',') }}</span></del><ins><span class="amount">{{ number_format(getPriceSale($product->pro_price, $product->pro_sale), 0, '.', ',') }}</span></ins></div>
                    <div class="btn-add-to-cart-wrapper">
                        <a class="btn btn-default btn-xs btn-add-to-cart" href="{{ route('client.shopping.add', ['id' => $product->id]) }}">Thêm vào giỏ hàng</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
