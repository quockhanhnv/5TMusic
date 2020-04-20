@csrf
<div class="m-portlet__body">
        {{--Bengin--}}
    <div class="m-portlet__body">
        <div class="form-group m-form__group row">
            <div class="col-lg-12">
                <label class="">
                    Danh mục<span class="text-danger">&nbsp(*)</span>:
                </label>
                <select name="gallery_type" class="form-control m-input" id="exampleSelect1">
                    <option value="">__Chọn danh mục__</option>
                    @foreach($types as $key => $type)
                        <option value="{{ $key }}">
                            {{  $type }}
                        </option>
                    @endforeach
                </select>
                @if(count($errors) > 0)
                    <span class="text-danger">{{$errors->first('gallery_type')}}</span>
                @endif
            </div>
        </div>
        <div class="form-group m-form__group row">
            <div class="col-sm-12 ">
                <div class="dz-message">
                    <div class="drag-icon-cph">
                        <i class="material-icons">touch_app</i>
                    </div>
                    <h3>Kéo thả hoặc click để chọn ảnh</h3>
                    <em>(Chọn ảnh dạng jpeg,jpg,png,gif)</em>
                </div>
                <div class="fallback">
                    <input name="files[]" type="file"/>
                </div>
            </div>
        </div>
    </div>
        {{--End--}}
</div>

@section('js')
    <script>
         var urlGalleryIndex = "{{ route('admin.gallery.index') }}";
    </script>
    <script>
        var _token = $('meta[name="csrf-token"]').attr('content');
        Dropzone.options.createGallery = {
            paramName: "files[]", // The name that will be used to transfer the file
            maxFilesize: 5, // MB
            addRemoveLinks: true,
            acceptedFiles: '.jpg, .jpeg, .png, .gif',
            dictRemoveFile: 'Xoá file',
            autoProcessQueue: false,
            init: function() {
                var submitButton =  $('#createBtn');
                var myDropzone = this;
                submitButton.click(function (e) {
                    e.preventDefault();
                    myDropzone.processQueue();
                });
                this.on('sending', function (file, xhr, formData) {
                    var data = $('form#createGallery').serializeArray();
                    $.each(data, function (key, el) {
                        formData.append(el.name, el.value);
                    });
                });

                this.on('success', function () {
                    swal({
                        title: "Tạo mới hình ảnh thành công!",
                        text: "Cửa sổ sẽ tự động đóng sau 2s",
                        timer: 2000,
                        showConfirmButton: false
                    });
                    window.location.href=urlGalleryIndex;
                });

                this.on('maxfilesexceeded', function(file) {
                    myDropzone.removeFile(file);
                })
            },
        };
    </script>
@endsection
