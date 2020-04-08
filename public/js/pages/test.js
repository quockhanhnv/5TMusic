// $('.summernote').summernote(summernoteConfig('#description'));
//
// function summernoteConfig(itemId) {
//     return {
//         height: 150,
//         callbacks: {
//             onImageUpload: function(files, editor, welEditable) {
//                 for (var i = 0; i < files.length; i++) {
//                     var file = files[i];
//                     if (summernoteValidate(file, this)) {
//                         uploadSummernoteFile(file, this, welEditable);
//                     }
//                 }
//             },
//             onChange: function(contents) {
//                 clearErrorMessage(this);
//                 $(itemId).val(contents);
//             }
//         }
//     };
// }
// var _maxImageFilesize = 2; // MB
// var _imageFileType = 'image/png, image/jpeg, image/jpg';
// var _dictFileTooBig = 'File quá lớn ({{filesize}}MB), chỉ cho phép tải lên file không quá {{maxFilesize}}MB';
// var _dictInvalidImageFileType = 'Bạn không thể tải lên các tệp thuộc loại này. Tập tin hỗ trợ bao gồm: PNG, JPEG, JPG';
//
// function summernoteValidate(file, editor) {
//     var isValid = true;
//     var error_message = '';
//     var size = file.size;
//     var type = file.type;
//     if (_maxImageFilesize * 1024 * 1024 < size) {
//         isValid = false;
//         error_message = _dictFileTooBig.replace('{{filesize}}', (size/1024/1024).toFixed(2)).replace('{{maxFilesize}}', _maxImageFilesize);
//     } else if (!_imageFileType.replace(/ /g, '').split(',').includes(type)) {
//         isValid = false;
//         error_message = _dictInvalidImageFileType;
//     }
//
//     if (!isValid) {
//         var parent = $(editor).parent();
//         var errorItem = parent.find('.summernote-validate-error');
//         if (errorItem.length == 0) {
//             parent.append('<div class="m--font-danger summernote-validate-error">' + error_message + '</div>');
//         } else {
//             $(errorItem[0]).html(error_message);
//         }
//     }
//
//     return isValid;
// }
//
//
// function uploadSummernoteFile(file, editor, welEditable) {
//     data = new FormData();
//     data.append("file", file);
//     data.append("_token", _token);
//     $.ajax({
//         data: data,
//         type: "POST",
//         url: _upload,
//         cache: false,
//         contentType: false,
//         processData: false,
//         success: function (filename) {
//             filename = $.parseJSON( filename );
//             if (filename == '') {
//                 return;
//             }
//             url = filename;
//             if (url && !url.includes('/storage/')) {
//                 url =  '/storage/' + url;
//             }
//
//             var image = $('<img>').attr('src', url);
//             $(editor).summernote("insertNode", image[0]);
//         }
//     });
// }
//
// function clearErrorMessage(editor) {
//     var errorItem = $(editor).parent().find('.summernote-validate-error');
//     if (errorItem.length > 0) {
//         errorItem[0].remove();
//     }
// }
