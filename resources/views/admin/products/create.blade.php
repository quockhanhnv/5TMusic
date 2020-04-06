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
                    Tạo mới sản phẩm
                </h3>
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form action="" method="POST" enctype="multipart/form-data" class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
        @csrf
        <div class="m-portlet__body">
            <div class="form-group m-form__group row">
                <div class="col-lg-4">
                    <label>
                        Tên sản phẩm<span class="text-danger">&nbsp(*)</span>:
                    </label>
                    <input type="text" name="pro_name" class="form-control m-input" placeholder="Enter course name">
                    @if(count($errors) > 0)
                        <span class="text-danger">{{$errors->first('pro_name')}}</span>
                    @endif
                </div>
                <div class="col-lg-4">
                    <label class="">
                        Giá<span class="text-danger">&nbsp(*)</span>::
                    </label>
                    <input type="text" name="pro_price" class="form-control m-input" placeholder="Enter email">
                    @if(count($errors) > 0)
                        <span class="text-danger">{{$errors->first('pro_price')}}</span>
                    @endif
                </div>
                <div class="col-lg-4">
                    <label>
                        Giảm giá<span class="text-danger">&nbsp(%)</span>:
                    </label>
                    <input type="text" name="pro_sale" class="form-control m-input" placeholder="">
                    @if(count($errors) > 0)
                        <span class="text-danger">{{$errors->first('pro_sale')}}</span>
                    @endif
                </div>
            </div>
            <div class="form-group m-form__group row">
                <div class="col-lg-4">
                    <label class="">
                        Danh mục<span class="text-danger">&nbsp(*)</span>:
                    </label>
                    <select name="pro_category_id" class="form-control m-input" id="exampleSelect1">
                        <option value="">__Click__</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ ($product->pro_category_id ?? 0) == $category->id ? "selected='selected'" : "" }}>
                                {{  $category->c_name }}
                            </option>
                        @endforeach
                    </select>
                    @if(count($errors) > 0)
                        <span class="text-danger">{{$errors->first('pro_category_id')}}</span>
                    @endif
                </div>
                <div class="col-lg-4">
                    <label class="">
                        Xuất xứ:
                    </label>
                    <select name="pro_country" class="form-control m-input">
                        <option value="">__Click__</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ ($product->pro_category_id ?? 0) == $category->id ? "selected='selected'" : "" }}>
                                {{  $category->c_name }}
                            </option>
                        @endforeach
                    </select>
                    @if(count($errors) > 0)
                        <span class="text-danger">{{$errors->first('pro_country')}}</span>
                    @endif
                </div>
                <div class="col-lg-4">
                    <label>
                        Kiểu dáng:
                    </label>
                    <input type="text" name="pro_style" class="form-control m-input" placeholder="Enter course name">
                    @if(count($errors) > 0)
                        <span class="text-danger">{{$errors->first('pro_style')}}</span>
                    @endif
                </div>
            </div>
            <div class="form-group m-form__group row">
                <div class="col-lg-4">
                    <label>
                        Loại đàn:
                    </label>
                    <input type="text" name="pro_type" class="form-control m-input" placeholder="Enter course name">
                    @if(count($errors) > 0)
                        <span class="text-danger">{{$errors->first('pro_type')}}</span>
                    @endif
                </div>
                <div class="col-lg-4">
                    <label>
                        Số dây:
                    </label>
                    <input type="text" name="pro_strings" class="form-control m-input" placeholder="Enter course name">
                    @if(count($errors) > 0)
                        <span class="text-danger">{{$errors->first('pro_strings')}}</span>
                    @endif
                </div>
                <div class="col-lg-4">
                    <label>
                        Số phím:
                    </label>
                    <input type="text" name="pro_button" class="form-control m-input" placeholder="Enter course name">
                    @if(count($errors) > 0)
                        <span class="text-danger">{{$errors->first('pro_button')}}</span>
                    @endif
                </div>
            </div>
            <div class="form-group m-form__group row">
                <div class="col-lg-4">
                    <label>
                        EQ & Pickup:
                    </label>
                    <input type="text" name="pro_eq_pickup" class="form-control m-input" placeholder="Enter course name">
                    @if(count($errors) > 0)
                        <span class="text-danger">{{$errors->first('pro_eq_pickup')}}</span>
                    @endif
                </div>
                <div class="col-lg-4">
                    <label>
                        Mặt đàn:
                    </label>
                    <input type="text" name="pro_body" class="form-control m-input" placeholder="Enter course name">
                    @if(count($errors) > 0)
                        <span class="text-danger">{{$errors->first('pro_body')}}</span>
                    @endif
                </div>
                <div class="col-lg-4">
                    <label>
                        Hông đàn:
                    </label>
                    <input type="text" name="pro_hip" class="form-control m-input" placeholder="Enter course name">
                    @if(count($errors) > 0)
                        <span class="text-danger">{{$errors->first('pro_hip')}}</span>
                    @endif
                </div>
            </div>
            <div class="form-group m-form__group row">
                <div class="col-lg-4">
                    <label>
                        Phím đàn:
                    </label>
                    <input type="text" name="pro_keyboard" class="form-control m-input" placeholder="Enter course name">
                    @if(count($errors) > 0)
                        <span class="text-danger">{{$errors->first('pro_keyboard')}}</span>
                    @endif
                </div>
                <div class="col-lg-4">
                    <label>
                        Cần đàn:
                    </label>
                    <input type="text" name="pro_neck" class="form-control m-input" placeholder="Enter course name">
                    @if(count($errors) > 0)
                        <span class="text-danger">{{$errors->first('pro_neck')}}</span>
                    @endif
                </div>
                <div class="col-lg-4">
                    <label>
                        Mặt phím:
                    </label>
                    <input type="text" name="pro_keyboard_face" class="form-control m-input" placeholder="Enter course name">
                    @if(count($errors) > 0)
                        <span class="text-danger">{{$errors->first('pro_keyboard_face')}}</span>
                    @endif
                </div>
            </div>
            <div class="form-group m-form__group row">
                <div class="col-lg-4">
                    <label>
                        Ngựa đàn:
                    </label>
                    <input type="text" name="pro_bridge" class="form-control m-input" placeholder="Enter course name">
                    @if(count($errors) > 0)
                        <span class="text-danger">{{$errors->first('pro_bridge')}}</span>
                    @endif
                </div>
                <div class="col-lg-4">
                    <label>
                        Lược đàn:
                    </label>
                    <input type="text" name="pro_comb" class="form-control m-input" placeholder="Enter course name">
                    @if(count($errors) > 0)
                        <span class="text-danger">{{$errors->first('pro_comb')}}</span>
                    @endif
                </div>
                <div class="col-lg-4">
                    <label>
                        Dây đàn:
                    </label>
                    <input type="text" name="pro_string_type" class="form-control m-input" placeholder="Enter course name">
                    @if(count($errors) > 0)
                        <span class="text-danger">{{$errors->first('pro_string_type')}}</span>
                    @endif
                </div>
            </div>
            <div class="form-group m-form__group row">
                <div class="col-lg-8">
                    <label for="exampleTextarea">
                        Mô tả ngắn:
                    </label>
                    <textarea name="pro_description" class="form-control m-input m-input--solid" id="exampleTextarea" rows="9"></textarea>
                </div>
                <div class="col-lg-4">
                    <label for="pro_avatar">
                        Hình ảnh:
                    </label>
                    <input onchange="encodeImageFileAsURL(this)" type="file" name="pro_avatar" id="pro_avatar" class="form-control m-input" placeholder="Enter category image">
                    @if(count($errors) > 0)
                        <span class="text-danger">{{$errors->first('pro_avatar')}}</span>
                    @endif
                    <div class="preview-image">
                        <img id="preview" src="{{ asset('images/default-image.jpg') }}" alt="" class="img-responsive" style="width: 305px;max-height: 123px;;overflow: hidden">
                    </div>
                </div>
            </div>
            <div class="form-group m-form__group row">
                <label for="exampleTextarea">
                   Nội dung:
                </label>
                <textarea name="pro_content" class="form-control m-input m-input--solid" id="exampleTextarea" rows="9"></textarea>
            </div>
        </div>
        <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
            <div class="m-form__actions m-form__actions--solid">
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-8">
                        <button type="submit" class="btn btn-primary">
                            Thêm mới
                        </button>
                        <button type="reset" class="btn btn-secondary">
                            Hủy
                        </button>
                    </div>
                </div>
            </div>
        </div>
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
