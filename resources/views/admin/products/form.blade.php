@csrf
<div class="m-portlet__body">
    <div class="form-group m-form__group row">
        <div class="col-lg-4">
            <label>
                Tên sản phẩm<span class="text-danger">&nbsp(*)</span>:
            </label>
            <input type="text" name="pro_name" value="{{  $product->pro_name ?? old('pro_name') }}" class="form-control m-input" placeholder="Enter course name">
            @if(count($errors) > 0)
                <span class="text-danger">{{$errors->first('pro_name')}}</span>
            @endif
        </div>
        <div class="col-lg-4">
            <label class="">
                Giá<span class="text-danger">&nbsp(*)</span>::
            </label>
            <input type="text" name="pro_price" value="{{  $product->pro_price ?? old('pro_price') }}" class="form-control m-input" placeholder="Enter price">
            @if(count($errors) > 0)
                <span class="text-danger">{{$errors->first('pro_price')}}</span>
            @endif
        </div>
        <div class="col-lg-4">
            <label>
                Giảm giá<span class="text-danger">&nbsp(%)</span>:
            </label>
            <input type="text" name="pro_sale" value="{{  $product->pro_sale ?? old('pro_sale') }}" class="form-control m-input" placeholder="">
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
            <label>
                Lưng đàn:
            </label>
            <input type="text" name="pro_back" value="{{  $product->pro_back ?? old('pro_back') }}" class="form-control m-input" placeholder="">
            @if(count($errors) > 0)
                <span class="text-danger">{{$errors->first('pro_back')}}</span>
            @endif
        </div>
        <div class="col-lg-4">
            <label>
                Kiểu dáng:
            </label>
            <input type="text" name="pro_style" value="{{  $product->pro_style ?? old('pro_style') }}" class="form-control m-input" placeholder="Enter course name">
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
            <input type="text" name="pro_type" value="{{  $product->pro_type ?? old('pro_type') }}" class="form-control m-input" placeholder="Enter course name">
            @if(count($errors) > 0)
                <span class="text-danger">{{$errors->first('pro_type')}}</span>
            @endif
        </div>
        <div class="col-lg-4">
            <label>
                Số dây:
            </label>
            <input type="text" name="pro_strings" value="{{  $product->pro_strings ?? old('pro_strings') }}" class="form-control m-input" placeholder="Enter course name">
            @if(count($errors) > 0)
                <span class="text-danger">{{$errors->first('pro_strings')}}</span>
            @endif
        </div>
        <div class="col-lg-4">
            <label>
                Số phím:
            </label>
            <input type="text" name="pro_button" value="{{  $product->pro_price ?? old('pro_button') }}" class="form-control m-input" placeholder="Enter course name">
            @if(count($errors) > 0)
                <span class="text-danger">{{$errors->first('pro_button')}}</span>
            @endif
        </div>
    </div>
    <div class="form-group m-form__group row">
        <div class="col-lg-4">
            <label>
                Dây đàn:
            </label>
            <input type="text" name="pro_string_type" value="{{  $product->pro_string_type ?? old('pro_string_type') }}" class="form-control m-input" placeholder="Enter course name">
            @if(count($errors) > 0)
                <span class="text-danger">{{$errors->first('pro_string_type')}}</span>
            @endif
        </div>
        <div class="col-lg-4">
            <label>
                Mặt đàn:
            </label>
            <input type="text" name="pro_body" value="{{  $product->pro_body ?? old('pro_body') }}" class="form-control m-input" placeholder="Enter course name">
            @if(count($errors) > 0)
                <span class="text-danger">{{$errors->first('pro_body')}}</span>
            @endif
        </div>
        <div class="col-lg-4">
            <label>
                Hông đàn:
            </label>
            <input type="text" name="pro_hip" value="{{  $product->pro_hip ?? old('pro_hip') }}" class="form-control m-input" placeholder="Enter course name">
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
            <input type="text" name="pro_keyboard" value="{{  $product->pro_keyboard ?? old('pro_keyboard') }}" class="form-control m-input" placeholder="Enter course name">
            @if(count($errors) > 0)
                <span class="text-danger">{{$errors->first('pro_keyboard')}}</span>
            @endif
        </div>
        <div class="col-lg-4">
            <label>
                Cần đàn:
            </label>
            <input type="text" name="pro_neck" value="{{  $product->pro_neck ?? old('pro_neck') }}" class="form-control m-input" placeholder="Enter course name">
            @if(count($errors) > 0)
                <span class="text-danger">{{$errors->first('pro_neck')}}</span>
            @endif
        </div>
        <div class="col-lg-4">
            <label>
                Mặt phím:
            </label>
            <input type="text" name="pro_keyboard_face" value="{{  $product->pro_keyboard_face ?? old('pro_keyboard_face') }}" class="form-control m-input" placeholder="Enter course name">
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
            <input type="text" name="pro_bridge" value="{{  $product->pro_bridge ?? old('pro_bridge') }}" class="form-control m-input" placeholder="Enter course name">
            @if(count($errors) > 0)
                <span class="text-danger">{{$errors->first('pro_bridge')}}</span>
            @endif
        </div>
        <div class="col-lg-4">
            <label>
                Lược đàn:
            </label>
            <input type="text" name="pro_comb" value="{{  $product->pro_comb ?? old('pro_comb') }}" class="form-control m-input" placeholder="Enter course name">
            @if(count($errors) > 0)
                <span class="text-danger">{{$errors->first('pro_comb')}}</span>
            @endif
        </div>
        <div class="col-lg-4">
            <div class="row">
                <label class="col-4 col-form-label">
                    EQ & Pickup:
                </label>
                <div class="col-8">
                    <span class="m-switch m-switch--icon m-switch--success">
                        <label>
                            <input type="checkbox" name="pro_eq_pickup" {{ ($product->pro_eq_pickup ?? old('pro_eq_pickup')) ?? "checked" }}>
                            <span></span>
                        </label>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group m-form__group row">
        <div class="col-lg-8">
            <label for="exampleTextarea">
                Mô tả ngắn:
            </label>
            <textarea name="pro_description" class="form-control m-input m-input--solid" id="exampleTextarea" rows="9">{{  $product->pro_description ?? old('pro_description') }}</textarea>
        </div>
        <div class="col-lg-4">
            <label for="pro_avatar">
                Hình ảnh:
            </label>
            <input onchange="encodeImageFileAsURL(this)" type="file" name="pro_avatar" value="{{  $product->pro_avatar ?? old('pro_avatar') }}" id="pro_avatar" class="form-control m-input" placeholder="Enter category image">
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
        <textarea name="pro_content" class="form-control m-input m-input--solid" id="exampleTextarea" rows="9">{{  $product->pro_content ?? old('pro_content') }}</textarea>
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
