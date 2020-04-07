@extends('admin.layouts.layout')

@section('content')
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        <a href="{{ route('admin.category.create') }}" class="btn btn-outline-accent m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--outline-2x m-btn--pill m-btn--air">
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
                                Hình ảnh
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
                        @if ($categories)
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->c_name }}</td>
                                    <td>
                                        <div class="m-widget4__item">
                                            <img class="" src="{{ asset($category->c_avatar)}}" style="width: 50px;height: 50px" title="">
                                        </div>


                                    </td>
                                    <td>
                                        @if ($category->c_status == 1)
                                            <a href="{{ route('admin.category.active', $category->id) }}" class="label label-info"><span class="m-badge m-badge--success m-badge--wide">Hoạt động</span></a>
                                        @else
                                            <a href="{{ route('admin.category.active', $category->id) }}" class="label label-default"><span class="m-badge m-badge--metal m-badge--wide">Ẩn</span></a>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($category->c_hot == 1)
                                            <a href="{{ route('admin.category.hot', $category->id) }}" class="label label-info"><span class="m-badge m-badge--success m-badge--wide">Có</span></a>
                                        @else
                                            <a href="{{ route('admin.category.hot', $category->id) }}" class="label label-default"><span class="m-badge m-badge--metal m-badge--wide">Không</span></a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.category.update', $category->id) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-info m-btn--icon m-btn--icon-only m-btn--pill" title="Cập nhật"><i class="la la-edit"></i></a>
                                        <a href="javascript:;" onclick="confirmRemove('{{ route('admin.category.delete', $category->id) }}')" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill m-btn--delete" title="Xóa"><i class="la la-trash"></i></a>
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
                {{$categories->links()}}
            </div>
        </div>
        <!-- End: Pagination -->
    </div>

@endsection

@section('js')
    <script type="text/javascript">
            function confirmRemove(url)
            {
                console.log(url);
                Swal.fire({
                    title: 'Xóa dữ liệu',
                    text: "Dữ liệu không thể khôi phục!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ok',
                    cancelButtonText: 'Đóng'
                }).then((result) => {
                    if (result.value) {
                        window.location.href = url;
                    }
                })
            }
    </script>
@endsection
