<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Oops, something lost</title>

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .card-body {
            text-align: center;
        }

        .card-body h1 {
            font-weight: 700;
            font-size: 10rem;
            color: #12519e;
        }

        .card-body .sub-heading {
            font-weight: 600;
            font-size: 2rem;
        }

        .card-body .sub-heading2 {
            font-weight: 400;
            font-size: 1.5rem;
        }

    </style>
</head>

<body>

    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('assets/img/404.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-md-6">
                <div class="card border-0">
                    <div class="card-body">
                        <h1>404</h1>
                        <p class="sub-heading">Sorry, Page not found</p>
                        <p class="sub-heading2">We can't seem to find the page you're looking for. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
