<div style="width: 100%;max-width: 600px;margin:0 auto">
    <div style="height: 55px;background: #f7f7f7 ;padding: 10px">
        <div style="width: 50%">
            <a href="">
                <img style="height: 55px" src="http://theme.hstatic.net/1000218340/1000279691/14/image_header_logo.png">
            </a>
        </div>
        <div style="width: 50%"></div>
    </div>
    <div style="background: white;padding: 15px;border:1px solid #dedede;">
        <h2 style="margin:10px 0;border-bottom: 1px solid #dedede;padding-bottom: 10px;">Danh sách sản phẩm bạn đã mua</h2>
        <div>
            @foreach($orders as $key => $item)
{{--                Thông tin này lấy trong giỏ hàng \Cart::content()--}}
                <div style="border-bottom: 1px solid #dedede;padding-bottom: 10px;padding-top: 10px;">
                    <div class="" style="width: 15%;float: left;">
                        <a href="">
                            <img style="max-width: 100%;width: 80px;height: 100px" src="http://product.hstatic.net/1000218340/product/img_1324__1__master.jpg">
                        </a>
                    </div>
                    <div style="width: 80%;float: right;">
                        <h4 style="margin:10px 0">{{ $item->name }}</h4>
                        <h4 style="margin:10px 0">Số lượng: {{ $item->qty }}</h4>
                        <p style="margin: 4px 0;font-size: 14px;">Giá <span>{{  number_format($item->price,0,',','.') }} đ</span></p>
                    </div>
                    <div style="clear: both;"></div>
                </div>
            @endforeach
            <h2>Tổng tiền : <b>{{ \Cart::subtotal(0) }}</b></h2>
        </div>
        <div>
            <p>Đây là email tự động xin vui không không trả lời vào email này</p>
            <p>Mời bạn <a href="">click vào đây</a> để cập nhật thông tin cá nhân</p>
        </div>
    </div>
    <div style="background: #f4f5f5;box-sizing: border-box;padding: 15px">
        <p style="margin:2px 0;color: #333">Email : quockhanhnv0209@gmail.com</p>
        <p style="margin:2px 0;color: #333">Phone : 0961574484</p>
        <p style="margin:2px 0;color: #333">Facebook : <a href="https://www.fb.com/quockhanh0209@gmail.com">Quốc Khánh</a></p>
    </div>
</div>
