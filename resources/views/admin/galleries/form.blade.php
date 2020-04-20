@csrf
<div class="m-portlet__body">
        {{--Bengin--}}
    <div class="m-portlet__body">
        <div class="form-group m-form__group row">
            <div class="col-lg-12">
                <label class="">
                    Danh mục<span class="text-danger">&nbsp(*)</span>:
                </label>
                <select name="gallery_type" class="form-control m-input" id="exampleSelect1" required aria-required="true">
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
            <div class="col-sm-12 m-dropzone m-dropzone--default dz-clickable">
                <div class="m-dropzone__msg dz-message needsclick">
                    <div class="drag-icon-cph">
                        <i class="la la-hand-pointer-o"></i>
                    </div>
                    <h3 class="m-dropzone__msg-title">
                        Kéo thả file ảnh hoặc click để tải lên
                    </h3>
                    <span class="m-dropzone__msg-desc">
                        Hỗ trợ các file ảnh PNG, JPEG, JPG
                    </span>
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
         var createGallery = $('form#createGallery');
         createGallery.validate({
             rules: {
                 gallery_type: 'required'
             },
             messages: {
                 gallery_type: {
                     required: 'Hãy chọn danh mục xuất hiện ngoài trang chủ'
                 }
             }
         });
    </script>
    <script>
        var _token = $('meta[name="csrf-token"]').attr('content');
        Dropzone.options.createGallery = {
            paramName: "files[]", // The name that will be used to transfer the file
            maxFilesize: 10, // MB
            addRemoveLinks: true,
            acceptedFiles: '.jpg, .jpeg, .png, .gif',
            dictRemoveFile: 'Xoá',
            autoProcessQueue: false,
            init: function() {
                var submitButton =  $('#createBtn');
                var myDropzone = this;
                submitButton.click(function (e) {
                    e.preventDefault();
                    // myDropzone.processQueue();
                    if(createGallery.valid()){
                        myDropzone.processQueue();
                    }
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
                        text: "Cửa sổ sẽ tự động đóng sau 10s",
                        timer: 10000,
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
