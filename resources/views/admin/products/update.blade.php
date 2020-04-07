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
                        Cập nhật sản phẩm
                    </h3>
                </div>
            </div>
        </div>
        <!--begin::Form-->
        <form action="" method="POST" enctype="multipart/form-data" class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
            @include('admin.products.form')
        </form>
        <!--end::Form-->
    </div>
@endsection

@section('js')
    <script>
        // get image base 64
        function encodeImageFileAsURL(element) {
            var file = element.files[0];
            if(file == undefined)
            {
                $('#preview').attr('src', '{{ asset('images/defaults/default-image.jpg') }}');
                return false;
            }
            var reader = new FileReader();
            reader.onloadend = function() {
                console.log('RESULT', reader.result)
                $('#preview').attr('src', reader.result);
            }
            reader.readAsDataURL(file);
        }
    </script>
@endsection
