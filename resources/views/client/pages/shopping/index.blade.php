@extends('client.layouts.layout')

@section('content')
    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section>
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table table-bordered m-table m-table--border-success table-responsive">
                                <table class="table table-striped table-bordered tbl-shopping-cart">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Hình ảnh</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Giá</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(isset($cartItems))
                                    @foreach($cartItems as $key => $item)
                                        <tr class="cart_item">
                                            <td class="product-remove"><a title="Remove this item" class="remove" href="{{ route('client.shopping.delete', ['id' => $key]) }}"><span class="label label-danger">Xóa</span></a></td>
                                            <td class="product-thumbnail"><a href="{{ route('client.product.show', ['slug' => \Illuminate\Support\Str::slug($item->name) .'-' . $item->id]) }}"><img alt="image" src="{{ $item->options->image }}"></a></td>
                                            <td class="product-name"><a href="{{ route('client.product.show', ['slug' => \Illuminate\Support\Str::slug($item->name) .'-' . $item->id]) }}">{{ $item->name }}</a>
                                            <td class="product-price"><span class="amount" id="data-price-item-{{$key}}">{{ number_format($item->price, 0, '.', ',') }}</span></td>
                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">
                                                    <input type="button" class="minus" value="-">
                                                    <input id="qty-{{$key}}" type="number" size="4" class="input-text qty text" title="Qty" value="{{ $item->qty }}" name="quantity" min="1" step="1">
                                                    <input type="button" class="plus" value="+">
                                                </div>
                                                <a data-id="{{ $key }}" data-product-id="{{ $item->id }}" class="js-update-cart-item" href="{{ route('client.shopping.update', $key) }}"><span class="label label-info">Cập nhật</span></a>
                                            </td>
                                            <td class="product-subtotal"><span class="amount" id="data-new-price-{{$key}}">{{ number_format($item->price * $item->qty, 0, '.', ',') }}đ</span></td>
                                        </tr>
                                    @endforeach
                                    @endif
                                    <tr class="cart_item">
                                        <td colspan="3"><div class="coupon">
                                                <label for="cart-coupon">Khuyến mãi: &nbsp</label>
                                                <input id="cart-coupon" type="text" placeholder="Nhập voucher" value="" name="">
                                                <button type="button" class="btn">Áp dụng</button>
                                            </div></td>
                                        <td colspan="2"></td>
                                        <td><span class="text-theme-colored2">Tổng tiền</span>: <span id="data-cart-sub-total">{{ \Cart::subtotal(0) }}đ</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <form class="from_cart_register" action="{{ route('client.shopping.pay') }}" method="post">
                            @csrf
                            <div class="col-md-8 mt-30">
                                <div class="row">
                                    <div class="form-group m-form__group row">
                                        <div class="col-lg-6">
                                            <input type="text" name="order_name" value="{{ \Auth::user()->name ?? old('order_name') }}" class="form-control m-input" placeholder="Họ tên">
                                            @if(count($errors) > 0)
                                                <span class="text-danger">{{$errors->first('order_name')}}</span>
                                            @endif
                                            <br>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" name="order_phone" value="{{  \Auth::user()->phone ?? old('phone') }}" class="form-control m-input" placeholder="Điện thoại">
                                            @if(count($errors) > 0)
                                                <span class="text-danger">{{$errors->first('order_phone')}}</span>
                                            @endif
                                            <br>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" name="order_email" value="{{  \Auth::user()->email ?? old('order_email') }}" class="form-control m-input" placeholder="Email">
                                            @if(count($errors) > 0)
                                                <span class="text-danger">{{$errors->first('order_email')}}</span>
                                            @endif
                                            <br>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" name="order_address" value="{{  \Auth::user()->address ?? old('order_address') }}" class="form-control m-input" placeholder="Địa chỉ">
                                            @if(count($errors) > 0)
                                                <span class="text-danger">{{$errors->first('order_address')}}</span>
                                            @endif
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-30">
                                <div class="row">
                                    <div class="form-group m-form__group row">
                                        <div class="col-lg-3">

                                        </div>
                                        <div class="col-lg-9">
                                            @if(count($errors) > 0)
                                                <span class="text-danger">&nbsp {{$errors->first('order_note')}}</span>
                                            @endif
                                            <textarea name="order_note" class="form-control m-input m-input--solid" placeholder="Ghi chú" rows="5">{{  \Auth::user()->address ?? old('order_note') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-8">
                                    <button type="submit" name="order_type" value="1" class="btn btn-primary">
                                        Thanh toán (COD)
                                    </button>
                                    <button type="" name="order_type" value="2" class="btn btn-secondary">
                                        Thanh toán online
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->
@endsection

@section('js')
    <script>
        $('.js-update-cart-item').click(function (event) {
            event.preventDefault();
            let $this = $(this)
            let key = $this.attr('data-id'); // update theo key của giỏ hàng nên phải lấy key gỏi hàng ra
            let url = $this.attr('href'); // lấy url gửi ajax
            let qty = $('#qty-'+key).val(); // lấy số lượng update từ input
            if(qty <= 0) {
                toastr["warning"]('Vui lòng xóa sản phẩm khỏi giỏ hàng');
                return false;
            }
            let productId = $this.attr('data-product-id'); // lấy id của product để check xem trường hợp còn đủ sổ lượng trong db nữa k
            let itemPrice = $('#data-price-item-'+key).text(); // Lấy giá của 1 sản phẩm để cập nhật lại tổng tiền khi bấm cập nhật
            itemPrice = itemPrice.split(",").join("");
            let newTotalPrice = itemPrice * qty; // giá mới
            newTotalPrice = newTotalPrice.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,').split(".00").join("");
            $('#data-new-price-'+key).text(newTotalPrice + 'đ');
            // cập nhật lại tổng tiền ở response success lấy giá trị ở controller response về new cartSubtotal
            $.ajax({
                url: url,
                method: 'GET',
                data: {
                    _token: '{{ csrf_token() }}',
                    qty: qty,
                    productId: productId,
                    cartId : key
                },
                dataType: 'JSON',
                success: function (response) {
                   let newSubCartTotal = response.newCartSubTotal;
                    $('#data-cart-sub-total').html(newSubCartTotal + 'đ')
                    toastr["success"](response.message)
                },
                error: function () {
                    console.log('Something went wrong when sending ajax');
                }
            });
        })
    </script>
@endsection
