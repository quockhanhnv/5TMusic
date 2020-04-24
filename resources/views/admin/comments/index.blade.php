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
                                <input type="text" name="content_cmt" value="{{ \Request::get('content_cmt') }}" class="form-control m-input" placeholder="Nội dung bình luận">
                            </div>
                            <div class="col-lg-2">
                                <select name="model" class="form-control m-input" id="exampleSelect1">
                                    <option value="0">Danh mục</option>
                                    <option value="{{ COURSE }}" {{ \Request::get('model') == COURSE ? "selected" : '' }}>Khóa học</option>
                                    <option value="{{ PRODUCT }}" {{ \Request::get('model') == PRODUCT ? "selected" : '' }}>Sản phẩm</option>
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <select name="user_type" class="form-control m-input" id="exampleSelect1">
                                    <option value="0">Phân loại KH</option>
                                    <option value="1" {{ \Request::get('user_type') == 1 ? "selected" : '' }}>Thành viên</option>
                                    <option value="2" {{ \Request::get('user_type') == 2 ? "selected" : '' }}>Khách</option>
                                </select>
                            </div>
                            <div class="col-lg-1">
                                <button type="submit" class="btn btn-info">
                                    Tìm  kiếm
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
                                Danh mục
                            </th>
                            <th>
                                Nội dung
                            </th>
                            <th>
                                Phân loại
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
                        @if ($comments)
                            @foreach($comments as $comment)
                                <tr>
                                    <td>{{ $comment->id }}</td>
                                    <td>{{ $comment->commentable_name }}</td>
                                    <td>{{ $comment->getModelType() }}</td>
                                    <td>{{ $comment->commentable_content }}</td>
                                    <td>{!!   $comment->commentable_user_id > 0 ? '<span class="m--font-success">Thành Viên</span>' : 'Khách' !!}</td>
                                    <td>{{ $comment->created_at }}</td>
                                    <td>
                                        <a href="javascript:;" onclick="confirmRemove('{{ route('admin.comment.delete', $comment->id) }}')" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill m-btn--delete" title="Xóa"><i class="la la-trash"></i></a>
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
                {{$comments->links()}}
            </div>
        </div>
        <!-- End: Pagination -->
    </div>

@endsection

@section('js')
    <script src="{{ asset('js/common.js') }}"></script>
@endsection
