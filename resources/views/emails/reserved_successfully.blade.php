<div style="width: 100%;max-width: 600px;margin:0 auto">
    <div style="height: 55px;background: #f7f7f7 ;padding: 10px">
        <div style="width: 50%">
            <a href="">
                <img style="height: 55px" src="http://theme.hstatic.net/1000218340/1000279691/14/image_header_logo.png">
            </a>
        </div>
        <div style="width: 50%"></div>
    </div>
    <div style="background: #f4f5f5;box-sizing: border-box;padding: 15px;border-top:1px solid #dedede;border-bottom: 1px solid #dedede">
        <p>Học viên: <b>{{ $user['reservation_name'] }}</b></p>
        <p>SĐT: <b>{{ $user['reservation_phone'] }}</b></p>
        <p>Email: <b>{{ $user['reservation_email'] }}</b></p>
        <p>Đã đăng ký khóa học <b>{{ $courseName }}</b>, ngày bắt đầu <b>{{ $user['reservation_time'] }}</b></p>
        <p>Note: {{ $user['reservation_message'] }}</p>
    </div>
    <div style="background: #f4f5f5;box-sizing: border-box;padding: 15px">
        <p style="margin:2px 0;color: #333">Email : quockhanhnv0209@gmail.com</p>
        <p style="margin:2px 0;color: #333">Phone : 0961574484</p>
        <p style="margin:2px 0;color: #333">Facebook : <a href="https://www.fb.com/quockhanh02091997">Quốc Khánh</a></p>
    </div>
</div>
