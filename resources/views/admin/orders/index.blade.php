@extends('admin.layouts.layout')

@section('content')
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        <a href="{{ route('admin.course.create') }}" class="btn btn-outline-accent m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--outline-2x m-btn--pill m-btn--air">
                            <i class="fa flaticon-edit"></i>
                        </a>
                        <span>
                            Tạo mới
                        </span>
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">
            <!--begin::Section-->
            <div class="m-section">
                <div class="m-section__content">
                    <table class="table table-responsive table-bordered">
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
                                        <span class="m-badge m-badge--primary m-badge--wide">{{ number_format($order->order_total_money, 0, '.', ',') }}</span>
                                    </td>

                                    <td>
                                        {!!   $order->order_user_id > 0 ? '<span class="m--font-success">Thành Viên</span>' : 'Khách' !!}
                                    </td>
                                    <td>
                                        <a class="btn btn-warning">{{ $order->getStatus()['name'] }}</a>
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
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary">
                            Save changes
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
                {{$orders->links()}}
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
                        if(response.code == 200) {
                            debugger;
                            $this.parents('tr').remove();
                        }
                        if(response.flag_delete == true) { // xóa order
                            debugger;
                            let orderId = response.orderId
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
