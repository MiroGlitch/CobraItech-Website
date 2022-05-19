// Toggle the side navigation
window.addEventListener('DOMContentLoaded', event => {
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains(
                'sb-sidenav-toggled'));
        });
    }
});

$('.accept_confirm').on('click', function (e) {
    e.preventDefault();
    let form = $(this).closest("form");

    swal({
        title: "Are you sure?",
        text: "Do you want to accept this applicant?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willAccept) => {
            if (willAccept) {
                form.submit();
                swal({
                    title: "Accepted!",
                    text: "This applicant is already hired!",
                    icon: "success",
                });
            } else {
                swal("No changes were made!");
            }
        });
})