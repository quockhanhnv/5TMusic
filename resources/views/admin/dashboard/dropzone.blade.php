@extends('admin.layouts.layout')

@section('content')
    {{--Bengin--}}
    <div class="form-group m-form__group row">
        <div class="col-lg-4 ">
            <label class="form-control-label" for="logo">
                Logo
            </label>
            (<span class="label-required"></span>)
            <div class="m-dropzone dropzone m-dropzone--default dz-clickable" action="{{ route('upload') }}" id="myAwesomeDropzone">
                <div class="m-dropzone__msg dz-message needsclick">
                    <h3 class="m-dropzone__msg-title">
                        Kéo thả file ảnh hoặc click để tải lên
                    </h3>
                    <span class="m-dropzone__msg-desc">
                        Hỗ trợ các file ảnh PNG, JPEG, JPG
                    </span>
                </div>
            </div>
            <input name="file" type="hidden" class="logo" value="">
        </div>
    </div>
    {{--End--}}
@endsection

@section('js')
    <script>
        var _token = $('meta[name="csrf-token"]').attr('content');
        Dropzone.options.myAwesomeDropzone = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            addRemoveLinks: true,
            sending: function(file, xhr, formData) {
                formData.append('_token', _token);
            },
            removedfile: function(file) {
                let name = file.name;
                let previewTemplate;
                $.ajax({
                    url: '{{ route('delete-upload') }}',
                    method: 'POST',
                    data: {
                        fileName: name,
                        _token: '{{ csrf_token() }}',
                    },
                    dataType: 'JSON',
                    success: function(rp) {
                        console.log(rp);
                    },
                    error: function () {
                        console.log('error');
                    }
                });
                return (previewTemplate = file.previewElement) != null ? previewTemplate.parentNode.removeChild(file.previewElement) : void 0;
            },
        };
    </script>
@endsection
