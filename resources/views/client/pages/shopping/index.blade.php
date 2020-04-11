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
                                            <td class="product-remove"><a title="Remove this item" class="remove" href="{{ route('client.shopping.delete', ['id' => $key]) }}"><i class="fa fa-close"></i></a></td>
                                            <td class="product-thumbnail"><a href="{{ route('client.product.show', ['slug' => \Illuminate\Support\Str::slug($item->name) .'-' . $item->id]) }}"><img alt="image" src="https://placehold.it/255x194"></a></td>
                                            <td class="product-name"><a href="{{ route('client.product.show', ['slug' => \Illuminate\Support\Str::slug($item->name) .'-' . $item->id]) }}">{{ $item->name }}</a>
                                            <td class="product-price"><span class="amount">{{ number_format($item->price, 0, '.', ',') }}</span></td>
                                            <td class="product-quantity"><div class="quantity buttons_added">
                                                    <input type="button" class="minus" value="-">
                                                    <input type="number" size="4" class="input-text qty text" title="Qty" value="{{ $item->qty }}" name="quantity" min="1" step="1">
                                                    <input type="button" class="plus" value="+">
                                                </div></td>
                                            <td class="product-subtotal"><span class="amount">{{ number_format($item->price * $item->qty, 0, '.', ',') }}đ</span></td>
                                        </tr>
                                    @endforeach
                                    @endif
                                    <tr class="cart_item">
                                        <td colspan="3"><div class="coupon">
                                                <label for="cart-coupon">Khuyến mãi: &nbsp</label>
                                                <input id="cart-coupon" type="text" placeholder="Nhập voucher" value="" name="">
                                                <button type="button" class="btn">Áp dụng</button>
                                            </div></td>
                                        <td colspan="2"><span class="text-theme-colored2">Tổng tiền</span>: {{ \Cart::subtotal(0) }}</td>
                                        <td><button type="button" class="btn btn-success">Cập nhật</button></td>
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
