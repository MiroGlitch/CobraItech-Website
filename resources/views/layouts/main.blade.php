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

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title>@yield('title') | Cobra Itech Services Corporation</title>

</head>

<body>
    <div id="pageloader">
        <img src="http://cdnjs.cloudflare.com/ajax/libs/semantic-ui/0.16.1/images/loader-large.gif" alt="processing..." />
    </div>
    <div class="d-flex" id="wrapper">
        <!-- Vertical Navbar -->
        <div class="border-end" id="sidebar-wrapper">
            <div class="sidebar-heading shadow-sm" style="background-color: #12519E;">
                <img src="{{ asset('assets/img/logo-name-white.png') }}" alt="" class="img-fluid p-2">
            </div>
            <div class="list-group list-group-flush" id="main-menu">
                <a href="{{ route('home') }}"
                    class="list-nav-link p-3 list-item-bg border-0 {{ Route::is('home') ? 'active' : '' }}"><i
                        class="fa-solid fa-gauge-high me-3"></i>Dashboard</a>
                <a href="#sub-menu" class="list-nav-link p-3 list-item-bg border-0" data-bs-toggle="collapse"
                    data-parent="#main-menu"> <i class="fa-solid fa-bookmark me-3"></i>Summary
                    Forms
                    <span class="caret"><i class="fa-solid fa-angle-down ms-3 fa-sm"></i></span></a>

                <div class="collapse list-group list-group-level" id="sub-menu">
                    <a href="{{ route('career.summary') }}"
                        class="list-item-bg list-nav-link ms-3 px-4 py-2 border-0 d-flex justify-content-between align-items-center {{ Route::is('career.summary') ? 'active' : '' }}"
                        data-parent="#sub-menu">
                        Job Applications
                        <span class="badge bg-white text-dark rounded-pill">{{ $notAssistedCareers }}</span>
                    </a>
                    <a href="{{ route('support.summary') }}"
                        class="list-item-bg list-nav-link ms-3 px-4 py-2 border-0 d-flex justify-content-between align-items-center {{ Route::is('support.summary') ? 'active' : '' }}"
                        data-parent="#sub-menu">
                        Customer Support
                        <span class="badge bg-white text-dark rounded-pill">{{ $notAssistedSupports }}</span>
                    </a>
                    <a href="{{ route('contact.summary') }}"
                        class="list-item-bg list-nav-link ms-3 px-4 py-2 border-0 d-flex justify-content-between align-items-center {{ Route::is('contact.summary') ? 'active' : '' }}"
                        data-parent="#sub-menu">
                        Inquiries
                        <span class="badge bg-white text-dark rounded-pill">{{ $notAssistedContacts }}</span>
                    </a>
                    <ul class="list-group">

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
