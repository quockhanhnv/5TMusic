@extends('admin.layouts.layout')

@section('content')
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        <a href="{{ route('admin.gallery.create') }}" class="btn btn-outline-accent m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--outline-2x m-btn--pill m-btn--air">
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
                                Ảnh
                            </th>
                            <th>
                                Phân loại
                            </th>
                            <th>
                                Người upload
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
                        @if ($galleries)
                            @foreach($galleries as $galerry)
                                <tr>
                                    <td>{{ $galerry->id }}</td>
                                    <td>
                                        <div class="m-widget4__item">
                                            <img class="" src="{{ asset($galerry->gallery_file_path)}}" style="width: 50px;height: 50px" title="">
                                        </div>
                                    </td>
                                    </td>
                                    <td>{{ $galerry->getType() }}</td>
                                    <th> {{ $galerry->user->name }}</th>
                                    <td>{{ $galerry->created_at }}</td>
                                    <td>
                                        <a href="javascript:;" onclick="confirmRemove('{{ route('admin.gallery.delete', $galerry->id) }}')" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill m-btn--delete" title="Xóa"><i class="la la-trash"></i></a>
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
                {{$galleries->links()}}
            </div>
        </div>
        <!-- End: Pagination -->
    </div>

@endsection

@section('js')
    <script src="{{ asset('js/common.js') }}"></script>
@endsection
