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
                        <label for="example_input_full_name">
                            Tên danh mục:
                        </label>
                        <input type="text" name="c_name" class="form-control m-input" value="{{  $category->c_name ?? old('c_name') }}" placeholder="Enter category">

                    </div>
                    <div class="form-group m-form__group">
                        <label>
                            Danh mục cha
                        </label>
                        <select name="c_parent_id" class="custom-select form-control">
                            <option value="0">__ROOT__</option>
                            @foreach($categories as $item)
                                <option value="{{ $item->id }}" {{ $item->id == $category->c_parent_id ? "selected='selected'" : "" }}>
                                    <?php $str = '' ;for($i = 0; $i < $item->level; $i ++){ echo $str; $str .= '-- '; }?>
                                    {{ $item->c_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group m-form__group">
                        <div class="form-group m-form__group">
                            <label for="c_avatar">
                                Hình ảnh:
                            </label>
                            <input type="file" name="c_avatar" id="c_avatar" value="{{ asset($category->c_avatar) ?? old('c_avatar') }}" class="form-control m-input" placeholder="Enter category image">
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
