<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

     Template Main CSS File
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
 -->
    <title></title>
</head>

<body style="background-color: #F5F8FA;">

    <header>

        <div class=" logo" style="">
            <img src="{{ asset('assets/img/logo-name.png') }}" alt="logo" srcset="" width="350"
                style="  display: block; margin-left: auto; margin-right: auto;">
        </div>

        <div
            style="margin-right:auto; margin-left:auto; padding:1.5rem; background-image: linear-gradient(rgb(18, 81, 158, 0.8), rgb(84, 161, 207), rgb(150, 206, 223));">
            <div style="color:#fff; text-transform:uppercase; font-size:2.5rem; font-weight:500; text-align:center">
                @yield('title')</div>
        </div>
    </header>

    <div style="padding:48px; margin-bottom: 48px; width: 60%; margin-right:auto; margin-left:auto">
        <div class="card p-3"
            style=" padding: 1.5rem; border: 1px solid rgba(0,0,0,.125);background-color: #fff;border-radius: 0.25rem;">
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
