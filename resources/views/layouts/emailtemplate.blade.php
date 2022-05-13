<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <title></title>
</head>

<body style="background-color: #F5F8FA;">

    <header>
        <div class="d-flex justify-content-center">
            <div class="logo">
                <img src="{{ asset('assets/img/logo-name.png') }}" alt="logo" srcset="" class="img-fluid"
                    height="350" width="350">
            </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-center p-4 header-email-bg">
            <h1 class="text-white text-uppercase">@yield('title')</h1>
        </div>
    </header>

    <div class="container px-5 mb-5 " style="margin-top:-15px">
        <div class="card p-3">
            <div class="card-body">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
