function successMessage(message) {
    Swal.fire({
        title: 'Başarılı!',
        text: message,
        icon: 'success',
        confirmButtonText: 'Tamam',
        confirmButtonColor: '#3085d6',
        padding: '2em'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.reload();
        }
    });
}

function errorMessage(message) {
    Swal.fire({
        title: 'Başarısız!',
        text: message,
        icon: 'warning',
        confirmButtonText: 'Tamam',
        confirmButtonColor: '#3085d6',
        padding: '2em'
    }).then((result) => {
        if (result.isConfirmed) {
        }
    });
}
