$(document).ready(function() {
    // $logout = $('.logout');
    // console.log($logout);
    $('.logout-href').on('click', function(e) {
        e.preventDefault();
        const href = $(this).attr('href');
        console.log(href);
        Swal.fire({
            title: 'Apakah anda yakin ingin logout?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Logout!',
            cancelButtonText: 'batal'
            }).then((result) => {
                if (result.isConfirmed) {
                document.location.href = href;
                }
        })
    });
});