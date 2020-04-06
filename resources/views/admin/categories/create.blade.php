@extends('admin.layouts.layout')

@section('content')
    <!--begin::Portlet-->
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <span class="m-portlet__head-icon m--hide">
                        <i class="la la-gear"></i>
                    </span>
                    <h3 class="m-portlet__head-text">
                        Thêm mới danh mục
                    </h3>
                </div>
            </div>
        </div>
        <!--begin::Form-->
        <form class="m-form"  action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="m-portlet__body">
                <div class="m-form__section m-form__section--first">
                    <div class="form-group m-form__group">
                        <label for="c_name">
                            Tên danh mục:
                        </label>
                        <input type="text" name="c_name" id="c_name" value="{{  $category->c_name ?? old('c_name') }}" class="form-control m-input" placeholder="Enter category">
                        @if(count($errors) > 0)
                            <span class="text-danger">{{$errors->first('c_name')}}</span>
                        @endif
                    </div>
                    <div class="form-group m-form__group">
                        <label>
                            Danh mục cha
                        </label>
                        <select name="c_parent_id" class="custom-select form-control">
                            <option value="0">__ROOT__</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">
                                    <?php $str = '' ;for($i = 0; $i < $category->level; $i ++){ echo $str; $str .= '-- '; }?>
                                    {{ $category->c_name }}
                                </option>
                            @endforeach
                        </select>
                        @if(count($errors) > 0)
                            <span class="text-danger">{{$errors->first('c_parent_id')}}</span>
                        @endif
                    </div>
                    <div class="form-group m-form__group">
                        <div class="form-group m-form__group">
                            <label for="c_avatar">
                                Hình ảnh:
                            </label>
                            <input onchange="encodeImageFileAsURL(this)" type="file" name="c_avatar" id="c_avatar" class="form-control m-input" placeholder="Enter category image">
                            @if(count($errors) > 0)
                                <span class="text-danger">{{$errors->first('c_avatar')}}</span>
                            @endif
                            <div class="preview-image">
                                <img id="preview" src="{{ asset('images/default-image.jpg') }}" alt="" class="img-responsive" style="width: 300px;max-height: 300px;overflow: hidden">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                    <button type="reset" class="btn btn-secondary">
                        Cancel
                    </button>
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
