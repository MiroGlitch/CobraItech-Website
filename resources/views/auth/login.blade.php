<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Login | Cobra Itech Services Corporation</title>

    <style>
        .login-card {
            width: 500px;
            padding: 2rem 3rem;
            box-shadow: rgba(17, 17, 26, 0.05) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;
        }

        .input-form {
            position: relative;
            display: inline-block;
        }


        .input-form input {
            border: 0;
            border-bottom: 1px solid #dedede;
            background-color: transparent;
            box-shadow: none !important;
        }

        .input-form i {
            position: absolute;
            font-size: 20px;
            color: #dedede;
            margin: 7px 0px 7px 20px;
        }

        .input-form input:focus {
            border-color: #12519e;
            border-width: 2px;
            box-shadow: none !important;
        }

        .input-form input:focus+i {
            color: #12519e;
        }

        .box-input-form {
            padding-left: 50px !important;
        }

        .pw-link {
            text-align: end;
            color: #12519e;
            text-decoration: none;
            font-weight: 500;
        }

    </style>

</head>

<body style="background-color: #F5F8FA;">

    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card border-0 login-card">
            <div class="card-body">
                <img src="{{ asset('assets/img/favicon.png') }}" alt="" class="img-fluid mx-auto d-block" width="50">
                <div class="row d-flex justify-content-center">
                    <div class="login-header">
                        <h1 class="page-heading text-center">Welcome! </h1>
                        <p class="page-subtitle mb-4 text-center">Sign in to your account.</p>
                    </div>

                    <div class="col-sm">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group mb-3 input-form d-flex justify-content-start flex-column">

                                <input id="email" type="email"
                                    class="form-control box-input-form  @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required="" autocomplete="email"
                                    autofocus="" placeholder="Email">
                                <i class="fas fa-envelope"></i>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group input-form d-flex justify-content-start flex-column">

                                <input id="password" type="password"
                                    class="form-control box-input-form  @error('password') is-invalid @enderror"
                                    name="password" required="" autocomplete="current-password" placeholder="Password">
                                <i class="fas fa-lock"></i>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!--
                            @if (Route::has('password.request'))
<a class="pw-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
@endif
                            -->
                            <button type="submit" class="btn w-100 text-white mt-4 "
                                style="background-color:#12519e;">Login</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
