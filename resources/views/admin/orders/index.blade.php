@extends('admin.layouts.layout')

@section('content')
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <br>
                    <form action="" method="GET">
                        <div class="form-group m-form__group row">
                            <div class="col-lg-3">
                                <input type="text" name="name" value="{{ \Request::get('name') }}" class="form-control m-input" placeholder="Tên khách hàng">
                        </div>
                            <div class="col-lg-3">
                                <input type="text" name="email" value="{{ \Request::get('email') }}" class="form-control m-input" placeholder="Email khách hàng">
                            </div>
                            <div class="col-lg-2">
                                <select name="user_type" class="form-control m-input" id="exampleSelect1">
                                    <option value="0">Phân loại KH</option>
                                    <option value="1" {{ \Request::get('type') == 1 ? "selected" : '' }}>Thành viên</option>
                                    <option value="2" {{ \Request::get('type') == 2 ? "selected" : '' }}>Khách</option>
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <select name="status" class="form-control m-input" id="exampleSelect1">
                                    <option value="">Trạng thái</option>
                                    <option value="1" {{ \Request::get('status') == 1 ? "selected" : '' }}>Tiếp nhận</option>
                                    <option value="2" {{ \Request::get('status') == 2 ? "selected" : '' }}>Vận chuyển</option>
                                    <option value="3" {{ \Request::get('status') == 3 ? "selected" : '' }}>Thành công</option>
                                    <option value="-1" {{ \Request::get('status') == -1 ? "selected" : '' }}>Hủy</option>
                                </select>
                            </div>
                            <div class="col-lg-1">
                                <button type="submit" class="btn btn-info">
                                    Tìm  kiếm
                                </button>
                            </div>
                            <div class="col-lg-1">
                                <button type="reset" class="btn btn-secondary">
                                    Excel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">
            <!--begin::Section-->
            <div class="m-section">
                <div class="m-section__content">
                    <table class="table table-responsive-lg table-bordered">
                        <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                Thông tin khách hàng
                            </th>
                            <th>
                                Tổng tiền
                            </th>
                            <th>
                                Tài khoản
                            </th>
                            <th>
                                Trạng thái
                            </th>
                            <th>
                                Thời gian
                            </th>
                            <th>
                                Thanh toán
                            </th>
                            <th>
                                Hành động
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @if ($orders)
                            @foreach($orders as $order)
                                <tr id="{{$order->id}}">
                                    <td>{{ $order->id }}</td>
                                    <td>
                                        <div class="m-list-timeline" style="width: 300px">
                                            <div class="m-list-timeline__items">
                                                <div class="m-list-timeline__item">
                                                    <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
                                                    <span class="m-list-timeline__icon flaticon-user"></span>
                                                    <span class="m-list-timeline__text">
                                                        {{ $order->order_name }}
                                                    </span>
                                                </div>
                                                <div class="m-list-timeline__item">
                                                    <span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
                                                    <span class="m-list-timeline__icon flaticon-interface-7"></span>
                                                    <span class="m-list-timeline__text">
                                                        {{ $order->order_email }}

                                                    </span>
                                                </div>
                                                <div class="m-list-timeline__item">
                                                    <span class="m-list-timeline__badge m-list-timeline__badge--warning"></span>
                                                    <span class="m-list-timeline__icon flaticon-placeholder"></span>
                                                    <span class="m-list-timeline__text">
                                                        {{ $order->order_address }}
                                                    </span>
                                                </div>
                                                <div class="m-list-timeline__item">
                                                    <span class="m-list-timeline__badge m-list-timeline__badge--primary"></span>
                                                    <span class="m-list-timeline__icon flaticon-share"></span>
                                                    <span class="m-list-timeline__text">
                                                    	{{ $order->order_phone }}
                                                    </span>
                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span id="data-total-{{$order->id}}" class="m-badge m-badge--primary m-badge--wide">{{ number_format($order->order_total_money, 0, '.', ',') }}</span>
                                    </td>

                                    <td>
                                        {!!   $order->order_user_id > 0 ? '<span class="m--font-success">Thành Viên</span>' : 'Khách' !!}
                                    </td>
                                    <td>
                                        <div class="m-dropdown m-dropdown--inline m-dropdown--small m-dropdown--arrow m-dropdown--align-right" m-dropdown-toggle="hover">
                                            <a style="color: white" class="{{ $order->getStatus()['class'] }}">{{ $order->getStatus()['name'] }}</a>
                                            <div class="m-dropdown__wrapper">
                                                <span class="m-dropdown__arrow m-dropdown__arrow--right"></span>
                                                <div class="m-dropdown__inner">
                                                    <div class="m-dropdown__body">
                                                        <div class="m-dropdown__content">
                                                            <ul class="m-nav">
                                                                <li class="m-nav__section m-nav__section--first">
                                                                <span class="m-nav__section-text">
                                                                    Trạng thái
                                                                </span>
                                                                </li>
                                                                <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                <li class="m-nav__item">
                                                                    <a href="{{ route('admin.order.action', ['received', $order->id]) }}" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                                        <span class="m-nav__link-text">
                                                                        Tiếp nhận
                                                                    </span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                <li class="m-nav__item">
                                                                    <a href="{{ route('admin.order.action', ['process', $order->id]) }}" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                                        <span class="m-nav__link-text">
                                                                        Vận chuyển
                                                                    </span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                <li class="m-nav__item">
                                                                    <a href="{{ route('admin.order.action', ['success', $order->id]) }}" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                        <span class="m-nav__link-text">
                                                                            Hoàn thành
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                <li class="m-nav__item">
                                                                    <a href="{{ route('admin.order.action', ['cancel', $order->id]) }}" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-info"></i>
                                                                        <span class="m-nav__link-text">
                                                                            Hủy
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        {{ $order->created_at }}
                                    </td>
                                    <td>
                                        {{ $order->order_type == 1 ? "COD" : "ONLINE" }}
                                    </td>
                                    <td>
                                        <a href="{{ route('ajax.admin.order.detail', ['id' => $order->id]) }}" data-total="{{ number_format($order->order_total_money, 0, '.', ',') }}" data-id="{{ $order->id }}" data-toggle="modal" data-target="#m_modal_1_2" class="js-preview-order-details m-portlet__nav-link btn m-btn m-btn--hover-info m-btn--icon m-btn--icon-only m-btn--pill" title="Xem chi tiết"><i class="la la-eye"></i></a>
                                        <a href="javascript:;" onclick="confirmRemove('{{ route('admin.order.delete', $order->id) }}')" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill m-btn--delete" title="Xóa"><i class="la la-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <!--end::Section-->
        </div>
        <!--end::Form-->

        <!--begin::Modal-->
        <div class="modal fade" id="m_modal_1_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Chi tiết đơn hàng # <b id="order-id"></b>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                &times;
                            </span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-responsive-lg table-bordered">
                            <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Tên sản phẩm
                                </th>
                                <th>
                                    Hình ảnh
                                </th>
                                <th>
                                    Giá
                                </th>
                                <th>
                                    Sổ lượng
                                </th>
                                <th>
                                    Tổng tiền
                                </th>
                                <th>
                                    Hành động
                                </th>
                            </tr>
                            </thead>
                            <tbody class="content">
{{--   content order detals admin.orders.includes.order-detail and check AdminOrdercontroller@getOrderDetails send by ajax  video 71 series--}}

                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">
                            Đóng
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Modal-->

        <!-- Begin: Pagination -->
        <br>
        <div class="form-group m-form__group row align-items-center">
            <div class="col-md-5"></div>
            <div class="col-md-5 text-center">
                {{$orders->appends($query)->links()}}
            </div>
        </div>
        <!-- End: Pagination -->
    </div>

@endsection

@section('js')
    <script src="{{ asset('js/common.js') }}"></script>
    <script>

        $( document ).ready(function() {

            $('.js-preview-order-details').click(function (event) {
                event.preventDefault();
                let $this =$(this);
                let URL = $this.attr('href');
                let ID = $this.attr('data-id');

                $("#order-id").html(ID);
                $.ajax({
                    url: URL,
                    method: 'GET', // gửi ajax theo get đã có id truyền lên ở query string rồi nên không phải gửi data id đi nữa
                    data: {

                    },
                    dataType: 'JSON',
                    success: function (response) {
                        $(".modal-body .content").html(response.html)
                    },
                    error: function () {
                        console.log('Something went wrong when sending ajax');
                    }
                });
            });

            // khi bấm vào delete order details (order detals admin.orders.includes.order-detail)
            $('body').on("click", '.js-delete-order-details', function (event) {
                event.preventDefault();
                let $this =$(this);
                let URL = $this.attr('href');
                $.ajax({
                    url: URL,
                    method: 'GET', // gửi ajax theo get đã có id truyền lên ở query string rồi nên không phải gửi data id đi nữa
                    data: {
                    },
                    dataType: 'JSON',
                    success: function (response) {
                        let orderId = response.orderId;
                        if(response.code == 200) {
                            // cập nhật lại giá khi xóa 1 order detail
                            let currentTotal = $('#data-total-'+orderId).text();
                            currentTotal = currentTotal.split(",").join(""); // parse to number
                            // (141800000).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,').split(".00").join("")
                            let updateTotal = currentTotal - response.decrementMoney;
                            updateTotal = updateTotal.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,').split(".00").join("");
                            $('#data-total-'+orderId).text(updateTotal);
                            // xóa order detail thì xóa luôn dòng đáy bằng ajax
                            $this.parents('tr').remove();

                        }
                        if(response.flag_delete == true) { // xóa order
                            $('#data-total-'+orderId).innerHTML =
                            $('#'+orderId).remove();
                        }
                    },
                    error: function () {
                        console.log('Something went wrong when sending ajax');
                    }
                });
            });
        });

    </script>
@endsection
