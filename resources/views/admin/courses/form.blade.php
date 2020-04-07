@csrf
<div class="m-portlet__body">
    <div class="form-group m-form__group row">
        <div class="col-lg-4">
            <label>
                Tên khóa học<span class="text-danger">&nbsp(*)</span>:
            </label>
            <input type="text" name="course_name" value="{{  $course->course_name ?? old('course_name') }}" class="form-control m-input" placeholder="Enter course name">
            @if(count($errors) > 0)
                <span class="text-danger">{{$errors->first('course_name')}}</span>
            @endif
        </div>
        <div class="col-lg-4">
            <label class="">
                Giá<span class="text-danger">&nbsp(*)</span>::
            </label>
            <input type="text" name="course_price" value="{{  $course->course_price ?? old('course_price') }}" class="form-control m-input" placeholder="Enter price">
            @if(count($errors) > 0)
                <span class="text-danger">{{$errors->first('course_price')}}</span>
            @endif
        </div>
        <div class="col-lg-4">
            <label>
                Giảm giá<span class="text-danger">&nbsp(%)</span>:
            </label>
            <input type="text" name="course_sale" value="{{  $course->course_sale ?? old('course_sale') }}" class="form-control m-input" placeholder="">
            @if(count($errors) > 0)
                <span class="text-danger">{{$errors->first('course_sale')}}</span>
            @endif
        </div>
    </div>
    <div class="form-group m-form__group row">
        <div class="col-lg-4">
            <label class="">
                Danh mục<span class="text-danger">&nbsp(*)</span>:
            </label>
            <select name="course_category_id" class="form-control m-input" id="exampleSelect1">
                <option value="">__Click__</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ ($course->course_category_id ?? 0) == $category->id ? "selected='selected'" : "" }}>
                        {{  $category->c_name }}
                    </option>
                @endforeach
            </select>
            @if(count($errors) > 0)
                <span class="text-danger">{{$errors->first('course_category_id')}}</span>
            @endif
        </div>
        <div class="col-lg-4">
            <label>
                Thời gian:
            </label>
            <input type="text" name="course_duration" value="{{  $course->course_duration ?? old('course_duration') }}" class="form-control m-input" placeholder="">
            @if(count($errors) > 0)
                <span class="text-danger">{{$errors->first('course_duration')}}</span>
            @endif
        </div>
        <div class="col-lg-4">
            <label>
                Giáo viên:
            </label>
            <input type="text" name="course_user_id" value="{{  $course->course_user_id ?? old('course_user_id') }}" class="form-control m-input" placeholder="Enter course name">
            @if(count($errors) > 0)
                <span class="text-danger">{{$errors->first('course_user_id')}}</span>
            @endif
        </div>
    </div>
    <div class="form-group m-form__group row">
        <div class="col-lg-4">
            <label>
                Số buổi:
            </label>
            <input type="text" name="course_number_lesson" value="{{  $course->course_number_lesson ?? old('course_number_lesson') }}" class="form-control m-input" placeholder="Enter course name">
            @if(count($errors) > 0)
                <span class="text-danger">{{$errors->first('course_number_lesson')}}</span>
            @endif
        </div>
        <div class="col-lg-4">
            <label>
                Số học viên:
            </label>
            <input type="text" name="course_number_student" value="{{  $course->course_number_student ?? old('course_number_student') }}" class="form-control m-input" placeholder="Enter course name">
            @if(count($errors) > 0)
                <span class="text-danger">{{$errors->first('course_number_student')}}</span>
            @endif
        </div>
        <div class="col-lg-4">
            <label>
                Lịch học:
            </label>
            <input type="text" name="course_class_schedule" value="{{  $course->course_class_schedule ?? old('course_class_schedule') }}" class="form-control m-input" placeholder="Enter course name">
            @if(count($errors) > 0)
                <span class="text-danger">{{$errors->first('course_class_schedule')}}</span>
            @endif
        </div>
    </div>
    <div class="form-group m-form__group row">
        <div class="col-lg-8">
            <label for="exampleTextarea">
                Mô tả ngắn:
            </label>
            <textarea name="course_description" class="form-control m-input m-input--solid" id="exampleTextarea" rows="9">{{  $course->course_description ?? old('course_description') }}</textarea>
        </div>
        <div class="col-lg-4">
            <label for="course_avatar">
                Hình ảnh:
            </label>
            <input onchange="encodeImageFileAsURL(this)" type="file" name="course_avatar" value="{{  $course->course_avatar ?? old('course_avatar') }}" id="course_avatar" class="form-control m-input" placeholder="Enter category image">
            @if(count($errors) > 0)
                <span class="text-danger">{{$errors->first('course_avatar')}}</span>
            @endif
            <div class="preview-image">
                <img id="preview" src="{{ asset($course->course_avatar ?? '') ?? asset('images/default-image.jpg') }}" alt="" class="img-responsive" style="width: 305px;max-height: 123px;;overflow: hidden">
            </div>
        </div>
    </div>
    <div class="form-group m-form__group row">
        <label for="exampleTextarea">
            Nội dung:
        </label>
        <textarea name="course_content" class="form-control m-input m-input--solid" id="exampleTextarea" rows="9">{{  $course->course_content ?? old('course_content') }}</textarea>
    </div>
</div>
<div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
    <div class="m-form__actions m-form__actions--solid">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-8">
                <button type="submit" class="btn btn-primary">
                    {{ isset($course) ? "Cập nhật" : "Thêm mới" }}
                </button>
                <button type="reset" class="btn btn-secondary">
                    Hủy
                </button>
            </div>
        </div>
    </div>
</div>
