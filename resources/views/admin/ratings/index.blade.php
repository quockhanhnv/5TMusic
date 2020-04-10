@extends('admin.layouts.layout')

@section('css')
    <style>
        .ratings span i {
            color: #eff0f5;
        }
        .ratings span.active i {
            color: #faca51;
        }
    </style>
@endsection

@section('content')
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        <a href="{{ route('admin.rating.index') }}" class="btn btn-outline-accent m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--outline-2x m-btn--pill m-btn--air">
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
                                User
                            </th>
                            <th>
                                Khóa học
                            </th>
                            <th>
                                Số sao
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
                        @if ($ratings)
                            @foreach($ratings as $rating)
                                <tr>
                                    <td>{{ $rating->id }}</td>
                                    <td>{{ $rating->user->name ?? '' }}</td>
                                    <td>{{ $rating->course->course_name ?? '' }}</td>
                                    <td>
                                        <div class="ratings">
                                            @for($i = 1; $i <=5; $i++)
                                                <span class="{{ $i <= $rating->rating_star_number ? 'active' : '' }}"><i class="fa fa-star"></i></span>
                                            @endfor
                                        </div>
                                    </td>
                                    <td>{{ $rating->created_at }}</td>
                                    <td>
                                        <a href="javascript:;" onclick="confirmRemove('{{ route('admin.rating.delete', $rating->id) }}')" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill m-btn--delete" title="Xóa"><i class="la la-trash"></i></a>
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
                {{$ratings->links()}}
            </div>
        </div>
        <!-- End: Pagination -->
    </div>

@endsection

@section('js')
    <script src="{{ asset('js/common.js') }}"></script>
@endsection
