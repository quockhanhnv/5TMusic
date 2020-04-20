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
                        Upload hình ảnh
                    </h3>
                </div>
            </div>
        </div>
        <!--begin::Form-->
        <form action="{{ route('admin.gallery.store') }}" method="POST" id="createGallery" class="dropzone" enctype="multipart/form-data">
            @include('admin.galleries.form')
        </form>
        <br>
        <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
            <div class="m-form__actions m-form__actions--solid">
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-8">
                        <button type="submit" class="btn btn-primary" id="createBtn">
                            Tạo mới
                        </button>
                        <button type="reset" class="btn btn-secondary">
                            Hủy
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!--end::Form-->
    </div>
@endsection
