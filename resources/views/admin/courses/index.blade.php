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
                    <table class="table">
                        <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                Tên
                            </th>
                            <th>
                                Danh mục cha
                            </th>
                            <th>
                                Hình ảnh
                            </th>
                            <th>
                                Giá
                            </th>
                            <th>
                                Trạng thái
                            </th>
                            <th>
                                Nổi bật
                            </th>
                            <th>
                                Hành động
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @if ($courses)
                            @foreach($courses as $course)
                                <tr>
                                    <td>{{ $course->id }}</td>
                                    <td>{{ $course->course_name }}</td>
                                    <td>
                                        <span class="m-badge m-badge--primary m-badge--wide">{{ $course->category->c_name }}</span>
                                    </td>
                                    <td>
                                        <div class="m-widget4__item">
                                            <img class="" src="{{ asset($course->course_avatar)}}" style="width: 50px;height: 50px" title="">
                                        </div>
                                    </td>
                                    <td>
                                        <span>{{ number_format(getPriceSale($course->course_price, $course->course_sale), 0, '.', ',') }}</span><br><br>
                                        <span style="text-decoration: line-through;color: red">{{ number_format($course->course_price, 0, '.', ',') }}</span>
                                    </td>
                                    <td>
                                        @if ($course->course_active == 1)
                                            <a href="{{ route('admin.course.active', $course->id) }}" class="label label-info"><span class="m-badge m-badge--success m-badge--wide">Hoạt động</span></a>
                                        @else
                                            <a href="{{ route('admin.course.active', $course->id) }}" class="label label-default"><span class="m-badge m-badge--metal m-badge--wide">Ẩn</span></a>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($course->course_hot == 1)
                                            <a href="{{ route('admin.course.hot', $course->id) }}" class="label label-info"><span class="m-badge m-badge--danger m-badge--wide">Có</span></a>
                                        @else
                                            <a href="{{ route('admin.course.hot', $course->id) }}" class="label label-default"><span class="m-badge m-badge--metal m-badge--wide">Không</span></a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.course.update', $course->id) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-info m-btn--icon m-btn--icon-only m-btn--pill" title="Cập nhật"><i class="la la-edit"></i></a>
                                        <a href="javascript:;" onclick="confirmRemove('{{ route('admin.course.delete', $course->id) }}')" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill m-btn--delete" title="Xóa"><i class="la la-trash"></i></a>
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
                {{$courses->links()}}
            </div>
        </div>
        <!-- End: Pagination -->
    </div>

@endsection

@section('js')
    <script src="{{ asset('js/common.js') }}"></script>
@endsection
