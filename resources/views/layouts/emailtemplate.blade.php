<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>
</head>

<body style="background-color: #F5F8FA; font-family:Arial, Helvetica, sans-serif; margin:0; padding:0; color: #343a40;">

    <header>
        <div class="logo" style="padding: 20px">
            <img src="{{ $message->embed('assets/img/logo-name.png') }}" alt="logo" srcset="" width="350"
                style="  display: block; margin-left: auto; margin-right: auto;">
        </div>
    </header>

    <div style="padding:0px 30px 30px;">

        <div class="card-body" style="max-width: 550px; margin-right:auto; margin-left:auto;">

            @yield('content')

        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
