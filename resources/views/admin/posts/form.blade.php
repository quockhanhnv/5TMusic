@csrf
<div class="m-portlet__body">
    <div class="form-group m-form__group row">
        <div class="col-lg-8">
            <label>
                Tên bài viết<span class="text-danger">&nbsp(*)</span>:
            </label>
            <input type="text" name="post_name" value="{{  $post->post_name ?? old('post_name') }}" class="form-control m-input" placeholder="Enter post name">
            @if(count($errors) > 0)
                <span class="text-danger">{{$errors->first('post_name')}}</span>
            @endif
        </div>
    </div>

    <div class="form-group m-form__group row">
        <div class="col-lg-8">
            <label for="exampleTextarea">
                Mô tả ngắn:
            </label>
            <textarea name="post_description" class="form-control m-input m-input--solid" id="exampleTextarea" rows="9">{{  $post->post_description ?? old('post_description') }}</textarea>
            @if(count($errors) > 0)
                <span class="text-danger">{{$errors->first('post_description')}}</span>
            @endif
        </div>
        <div class="col-lg-4">
            <label for="post_avatar">
                Hình ảnh:
            </label>
            <input onchange="encodeImageFileAsURL(this)" type="file" name="post_avatar" value="{{  $post->post_avatar ?? old('post_avatar') }}" id="post_avatar" class="form-control m-input" placeholder="Enter category image">
            @if(count($errors) > 0)
                <span class="text-danger">{{$errors->first('post_avatar')}}</span>
            @endif
            <div class="preview-image">
                <img id="preview" src="{{ asset($post->post_avatar ?? '') ?? asset('images/default-image.jpg') }}" alt="" class="img-responsive" style="width: 305px;max-height: 123px;;overflow: hidden">
            </div>
        </div>
    </div>
    <div class="form-group m-form__group row">
        <div class="col-lg-12 {{ $errors->has('post_content') ? ' has-danger' : '' }}">
            <label class="form-control-label" for="post_content">
                Nội dung:
            </label>
            (<span class="label-required"></span>)
            <div class="post_content"></div>
            @if ($errors->has('post_content'))
                <div class="form-control-feedback">
                    {{ $errors->first('post_content') }}
                </div>
            @endif
            <textarea name="post_content" class="form-control m-input m-input--solid" id="post_content" rows="9">{{  $post->post_content ?? old('post_content') }}</textarea>

        </div>
    </div>

</div>
<div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
    <div class="m-form__actions m-form__actions--solid">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-8">
                <button type="submit" class="btn btn-primary">
                    {{ isset($post) ? "Cập nhật" : "Thêm mới" }}
                </button>
                <button type="reset" class="btn btn-secondary">
                    Hủy
                </button>
            </div>
        </div>
    </div>
</div>

@section('js')
    <script src="{{ asset('admin-assets\assets\plugin\ckeditor\ckeditor.js') }}"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>
    <script>

        CKEDITOR.replace( 'post_content', options);
    </script>
@endsection
