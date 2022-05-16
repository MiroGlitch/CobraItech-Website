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

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">


    <title>@yield('title') | Cobra Itech Services Corporation</title>

</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Vertical Navbar -->
        <div class="border-end" id="sidebar-wrapper">
            <div class="sidebar-heading shadow-sm" style="background-color: #212B36;">
                <img src="{{ asset('assets/img/logo-name-white.png') }}" alt="" class="img-fluid p-2">
            </div>
            <div class="list-group list-group-flush" id="main-menu">
                <a href="{{ route('home') }}"
                    class="list-group-item list-group-item-action list-group-item-light p-3 list-group-item-bg"><i
                        class="fa-solid fa-gauge-high me-3"></i>Dashboard</a>
                <a href="#sub-menu"
                    class="list-group-item list-group-item-action list-group-item-light p-3 list-group-item-bg"
                    data-bs-toggle="collapse" data-parent="#main-menu"> <i class="fa-solid fa-bookmark me-3"></i>Summary
                    Forms <span class="caret"><i class="fa-solid fa-angle-down ms-5 fa-sm"></i></span></a>

                <div class="collapse list-group-level" id="sub-menu">
                    <ul class="list-group">
                        <a href="{{ route('career.summary') }}"
                            class="list-group-item d-flex justify-content-between align-items-center"
                            data-parent="#sub-menu">
                            Job Applications
                            <span class="badge bg-primary rounded-pill">14</span>
                        </a>
                        <a href="{{ route('support.summary') }}"
                            class="list-group-item d-flex justify-content-between align-items-center"
                            data-parent="#sub-menu">
                            Customer Support
                            <span class="badge bg-primary rounded-pill">2</span>
                        </a>
                        <a href="{{ route('contact.summary') }}"
                            class="list-group-item d-flex justify-content-between align-items-center"
                            data-parent="#sub-menu">
                            Inquiries
                            <span class="badge bg-primary rounded-pill">1</span>
                        </a>
                    </ul>

                </div>

            </div>
        </div> <!-- End of Vertical Navbar -->

        <!-- Page Content Wrapper -->
        <div id="page-content-wrapper">
            <!-- Top Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom shadow-sm bg-body rounded ">
                <div class="container-fluid">
                    <button class="btn" id="sidebarToggle"><i
                            class="fa-solid fa-bars text-primary"></i></button>
                    <div class="dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </nav>
            <!--End of Top Navbar -->

            <!-- Page content-->
            <main>
                @yield('content')
            </main>

            <!-- End of Page Content -->

        </div> <!-- End of Page Content Wrapper -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
