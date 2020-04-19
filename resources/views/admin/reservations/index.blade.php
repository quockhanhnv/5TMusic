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
                            <div class="col-lg-3">
                                <select name="status" class="form-control m-input" id="exampleSelect1">
                                    <option value="">Chọn trạng thái</option>
                                    <option value="{{ UNACCEPTED_RESERVATION }}" {{ \Request::get('status') == UNACCEPTED_RESERVATION ? "selected" : '' }}>Chưa phản hồi</option>
                                    <option value="{{ ACCEPTED_RESERVATION }}" {{ \Request::get('status') == ACCEPTED_RESERVATION ? "selected" : '' }}>Đã phản hồi</option>
                                    <option value="{{ CANCELED_RESERVATION }}" {{ \Request::get('status') == CANCELED_RESERVATION ? "selected" : '' }}>Hủy</option>
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-info">
                                    Tìm  kiếm
                                </button>
                            </div>
                            <div class="col-lg-1">
                                <button type="reset" class="btn btn-success">
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
                    <table class="table table-responsive-lg">
                        <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                Tên
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                SĐT
                            </th>
                            <th>
                                Khóa học
                            </th>
                            <th>
                                Thời gian học
                            </th>
                            <th>
                                Ghi chú
                            </th>
                            <th>
                                Trạng thái
                            </th>
                            <th>
                                Thời gian
                            </th>
                            <th>
                                Hành động
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @if ($reservations)
                            @foreach($reservations as $reservation)
                                <tr>
                                    <td>{{ $reservation->id }}</td>
                                    <td>{{ $reservation->reservation_name }}</td>
                                    <td>{{ $reservation->reservation_email }}</td>
                                    <td>{{ $reservation->reservation_phone }}</td>
                                    <td>{{ $reservation->course->course_name }}</td>
                                    <td>{{ date('Y-m-d', strtotime($reservation->reservation_time)) }}</td>
                                    <td>{{ $reservation->reservation_message }}</td>
                                    <td>

                                        <div class="m-dropdown m-dropdown--inline m-dropdown--small m-dropdown--arrow m-dropdown--align-right" m-dropdown-toggle="hover">
                                            <a style="color: white" class="{{ $reservation->getStatus()['class'] ?? '' }}">{{ $reservation->getStatus()['name'] ?? '' }}</a>
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
                                                                    <a href="{{ route('admin.reservation.action', ['UNACCEPTED_RESERVATION', $reservation->id]) }}" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                                        <span class="m-nav__link-text">
                                                                        Chưa phản hồi
                                                                    </span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                <li class="m-nav__item">
                                                                    <a href="{{ route('admin.reservation.action', ['ACCEPTED_RESERVATION', $reservation->id]) }}" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                                        <span class="m-nav__link-text">
                                                                        Đã phản hồi
                                                                    </span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                <li class="m-nav__item">
                                                                    <a href="{{ route('admin.reservation.action', ['CANCEL_RESERVATION', $reservation->id]) }}" class="m-nav__link">
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
                                    <td>{{ $reservation->created_at }}</td>
                                    <td>
                                        <a href="javascript:;" onclick="confirmRemove('{{ route('admin.reservation.delete', $reservation->id) }}')" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill m-btn--delete" title="Xóa"><i class="la la-trash"></i></a>
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
        <!-- Begin: Pagination -->
        <br>
        <div class="form-group m-form__group row align-items-center">
            <div class="col-md-5"></div>
            <div class="col-md-5 text-center">
                {{$reservations->links()}}
            </div>
        </div>
        <!-- End: Pagination -->
    </div>

@endsection

@section('js')
    <script src="{{ asset('js/common.js') }}"></script>
@endsection
