@extends('admin.layouts.layout')

@section('content')
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                <span class="m-portlet__head-icon m--hide">
                    <i class="la la-gear"></i>
                </span>
                    <h3 class="m-portlet__head-text">
                        Tạo mới bài viết
                    </h3>
                </div>
            </div>
        </div>
        <!--begin::Form-->
        <form action="" method="POST" enctype="multipart/form-data" class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
            @include('admin.posts.form')
        </form>
        <!--end::Form-->
    </div>
@endsection
