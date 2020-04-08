
function confirmRemove(url)
{
    console.log(url);
    Swal.fire({
        title: 'Xóa dữ liệu',
        text: "Dữ liệu không thể khôi phục!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ok',
        cancelButtonText: 'Đóng'
    }).then((result) => {
        if (result.value) {
            window.location.href = url;
        }
    })
}

