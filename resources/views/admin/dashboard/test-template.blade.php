@extends('admin.layouts.layout')
@section('css')
    <style>
        .reviews {
            max-width: 750px;
            margin-bottom: 20px;
        }
        .reviews-title {
            font-size: 20px;
            margin-bottom: 10px;
        }
        .reviews .dashboards {
            display: flex;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            align-items: center;
            padding: 10px;
        }
        .reviews .dashboards_sum {
            flex: 0 0 15%;
            text-align: center;
        }
        .reviews .dashboards_sum span {
            font-size: 35px;
            color: #fd9727;
            font-weight: bold;
            line-height: 30px;
        }
        .reviews .dashboards_item {
            flex: 0 0 65%;
        }
        .reviews .dashboards_item .item_review {
            margin: 1px 0;
        }
        .reviews .dashboards_item .item_review-name {
            display: inline-block;
            color: #333;
            width: 10%;
        }
        .reviews .dashboards_item .item_review-process {
            display: inline-block;
            width: 65%;
        }
        .reviews .dashboards_item .item_review-process > div {
            height: 7px;
            background-color: #e9e9e9;
            border-radius: 5px;
        }
        .reviews .dashboards_item .item_review-process > div span {
            border-radius: 5px;
            display: inherit;
            background: #f57223;
            height: 100%;
        }
        .reviews .dashboards_item .item_review-count {
            display: inline-block;
            width: 20%;
            text-align: right;
            color: #288ad6;
        }
        .reviews .dashboards_btn {
            flex: 0 0 20%;
        }
        .reviews .dashboards_btn a {
            font-size: 14px;
            display: block;
            padding: 5px;
            color: #fff;
            background-color: #288ad6;
            border-radius: 5px;
            text-align: center;
            box-sizing: border-box;
        }
        .reviews .btn-load-rating {
            padding: 7px 20px;
            color: #288ad6;
            border: solid 1px #288ad6;
            border-radius: 3px;
            text-align: center;
            box-sizing: border-box;
            margin: 10px 0 10px;
            display: inline-block;
        }
        .reviews .block-reviews {
            border-top: 1px solid #dedede;
            background-color: white;
            padding: 10px;
            display: none;
        }
        .reviews .block-reviews span i {
            font-size: 18px;
            color: #eff0f5;
        }
        .reviews .block-reviews span i.active {
            color: #f57223;
        }
        .reviews .block-reviews #ratings i {
            cursor: pointer;
        }
        .reviews .block-reviews .reviews-text {
            display: inline-block;
            margin-left: 10px;
            position: relative;
            background: #52b858;
            color: #fff;
            padding: 2px 8px;
            box-sizing: border-box;
            font-size: 12px;
            border-radius: 2px;
        }
        .reviews .block-reviews .reviews-text:after {
            right: 100%;
            top: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-color: rgba(82, 184, 88, 0);
            border-right-color: #52b858;
            border-width: 6px;
            margin-top: -6px;
        }
        .reviews .block-reviews #rv_content {
            min-height: 60px;
            border-radius: 2px;
            display: block;
            font-size: 14px;
            box-sizing: border-box;
            padding: 8px;
            height: 38px;
            width: 100%;
            background: #fff;
            border: 2px solid #f2f2f2 !important;
        }
        .reviews .block-reviews button {
            background-color: #00a65a;
            border-color: #008d4c;
            color: white;
        }
        .reviews_list {
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            padding: 10px;
            background-color: white;
        }
        .reviews_list .item {
            cursor: pointer;
            padding: 5px;
            margin: 5px 0;
        }
        .reviews_list .item:hover {
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }
        .reviews_list .item_author {
            margin-bottom: 5px;
        }
        .reviews_list .item_author span:first-child {
            font-weight: bold;
        }
        .reviews_list .item_author span:last-child {
            color: #999;
        }
        .reviews_list .item_success {
            color: #2ba832 !important;
            font-size: 13px;
        }
        .reviews_list .item_review {
            color: #333;
            line-height: 18px;
        }
        .reviews_list .item_review i {
            color: #eff0f5;
        }
        .reviews_list .item_review i.active {
            color: #faca51;
        }
        .reviews_list .item_time {
            font-size: 13px;
            color: #999;
        }
        .reviews_list .item_time i {
            color: #999;
        }
        .reviews .filter {
            display: flex;
            align-items: center;
        }
        .reviews .filter ul {
            display: flex;
        }
        .reviews .filter ul li a {
            padding: 4px 5px;
            display: inline-block;
            color: #288ad6;
        }
        .reviews .filter ul li a.active {
            font-weight: bold;
        }

        @media only screen and (max-width: 700px) {
            .reviews .dashboards {
                display: -webkit-flex;
                /* Safari */
                -webkit-flex-wrap: wrap;
                /* Safari 6.1+ */
                flex-direction: row;
                flex-wrap: wrap;
            }
            .reviews .dashboards_sum {
                flex: 0 0 100%;
            }
            .reviews .dashboards_item {
                flex: 0 0 100%;
            }
            .reviews .dashboards_item .item_review-count {
                font-size: 11px;
            }
            .reviews .dashboards_btn {
                flex: 0 0 100%;
            }
            .reviews .dashboards_btn a {
                display: block;
            }
        }
    </style>
@endsection
@section('content')
    <!--begin:: Widgets/Stats-->
    <div class="reviews content_text">
        <h4 class="reviews-title"><b> $product->pro_review_total</b> đánh giá  $product->pro_name </h4>
        <div class="dashboards">
            <div class="item dashboards_sum">
                @php
                    // $age = age_review_product($product->pro_review_star, $product->pro_review_total);
                    $age = 2;
                @endphp
                <span> {{ $age }} <i class="la la-star"></i></span>
            </div>
            <div class="item dashboards_item">
                @for($i = 1 ; $i <= 5 ; $i ++)
                    <div class="item_review">
                        <span class="item_review-name">{{ $i }} <i class="la la-star"></i></span>
                        <div class="item_review-process">
                            <div>
                                <span style="width: {{ rand(40, 100) }}%;"></span>
                            </div>
                        </div>
                        <span class="item_review-count"><b>{{ rand(1,10) }}</b> đánh giá</span>
                    </div>
                @endfor
            </div>
            <div class="item dashboards_btn">
                <a href="javascript:;void(0)" title="Gửi đánh giá"
                   class="btn btn-success js-review">Gửi đánh giá</a>
            </div>
        </div>
        <div class="block-reviews" id="block-review">
            <form action="" id="form-review" method="POST">
                @csrf
                <div>
                    <p style="margin-bottom: 0">
                        <span>Chọn đánh giá của bạn</span>
                        <span id="ratings">
                        @for ($i =1 ; $i <= 5 ; $i ++)
                                <i class="la la-star active" data-i="{{ $i }}"></i>
                            @endfor
                    </span>
                        <span class="reviews-text" id="reviews-text">Tuyệt vời</span>
                    </p>
                    <span style="color: red;margin-bottom: 10px;display: block">(Click vào ngôi sao để đánh giá)</span>
                </div>
                <div>
                    <textarea name="content_review"  id="rv_content" cols="30" rows="5" placeholder="Nhập đánh giá sản phẩm (Tối thiểu 80 ký tự )"></textarea>
                    <input type="hidden" name="review" id="review_value" value="5">
                </div>
                <button type="submit" style="font-size: 14px;margin-top: 10px" class="btn btn-success js-process-review">Gửi đánh giá</button>
            </form>
        </div>

    </div>
@endsection

@section('js')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(function(){

            //Thêm sản phẩm yêu thích

            // Show form review
            $(".js-review").click( function (event) {
                event.preventDefault();
                let $this = $(this);
                if ($this.hasClass('js-check-login')) {
                    toastr.warning("Đăng nhập để thực hiện chức năng này");
                    return false;
                }
                if ($(this).hasClass('active')) {
                    $(this).text("Gửi đánh giá").addClass('btn-success').removeClass('btn-default active')
                }else {
                    $(this).text("Đóng lại").addClass('btn-default active').removeClass('btn-success');
                }
                $("#block-review").slideToggle();
            })

            // Hover icon thay đổi số sao dánh giá
            let $item = $("#ratings i");
            let arrTextRating = {
                1 : "Không thích",
                2 : "Tạm được",
                3 : "Bình thường",
                4 : "Rất tốt",
                5 : "Tuyệt vời"
            }

            $item.mouseover( function () {
                let $this = $(this);
                let $i    = $this.attr('data-i');
                $("#review_value").val($i);
                $item.removeClass('active');
                $item.each( function (key, value) {
                    if (key + 1 <= $i) {
                        $(this).addClass('active')
                    }
                })
                $("#reviews-text").text(arrTextRating[$i]);
            })

            $(".js-process-review").click(function(event) {
                event.preventDefault();

                let URL = $(this).parents('form').attr('action');
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url : URL,
                    method : "POST",
                    data: $('#form-review').serialize(),
                }).done(function( results ) {
                    $('#form-review')[0].reset();
                    $(".js-review").trigger('click');
                    if (results.html) {
                        $(".reviews_list .item").last().remove();
                        $(".reviews_list").prepend(results.html);
                    }
                    toastr.success(results.messages);
                });
            })


        })
    </script>
@endsection
