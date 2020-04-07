<script src="{{ asset('admin-assets/assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin-assets/assets/demo/demo12/base/scripts.bundle.js') }}" type="text/javascript"></script>
<!--end::Base Scripts -->
<!--begin::Page Vendors -->
<script src="{{ asset('admin-assets/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>
<!--end::Page Vendors -->
<!--begin::Page Snippets -->
<script src="{{ asset('admin-assets/assets/app/js/dashboard.js') }}" type="text/javascript"></script>
<!--end::Page Snippets -->
<script src="{{ asset('admin-assets\assets\demo\demo12\custom\components\base\sweetalert2.js') }}" type="text/javascript"></script>
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
