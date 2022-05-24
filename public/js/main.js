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

//Sweet Alert validation for accepting applicant 
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
                $("#pageloader").fadeIn();
            } else {
                swal("No changes were made!");
            }
        });
});

$('#add-btn').on('click', function () {
    let name = $('#name').val();
    let email = $('#email').val();
    let password = $('#pwd').val();
    let cpassword = $('#cpwd').val();
  
    if (name == '' || email == '' || password == '' || cpassword == '') {
      swal('Error!', 'Please fill up the fields!', 'error');
      return false;
    } else if (password !== cpassword) {
        swal('Error!', 'Passwords do not match!', 'error');
        return false;
    }
});

$('#reply-btn').on('click', function () {
    let message = $('#reply').val();
  
    if (message == '') {
      swal('Error!', 'Please fill up the fields!', 'error');
      return false;
    } else {
        $("#pageloader").fadeIn();
    }
});