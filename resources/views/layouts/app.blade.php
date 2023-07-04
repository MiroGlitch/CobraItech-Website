<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--<title>{{ config('app.name', 'Laravel') }}</title>-->
    <title>@yield('title') - COBRA ITECH SERVICES CORPORATION</title>
    <meta content="" name="description">
    <meta content="Cobra Itech Services Corporation, Cobra Itech" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" /> -->

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</head>

<body>
    <!-- ======= Header ======= -->
    <div id="pageloader">
        <img src="http://cdnjs.cloudflare.com/ajax/libs/semantic-ui/0.16.1/images/loader-large.gif"
            alt="processing..." />
    </div>
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <!--<h1 class="logo me-auto"><a href="index.html">Sailor</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="{{ url('/') }}" class="logo me-auto"><img src="assets/img/logo-name.png" alt=""
                    class="img-fluid"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>

                    <li class="dropdown"><a href="#"
                            class="{{ Route::is('company') ? 'active' : '' }} || {{ Route::is('founders') ? 'active' : '' }}"><span>About
                                Us</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ route('company') }}"
                                    class="{{ Route::is('') ? 'active' : '' }}">Company</a></li>
                            <li><a href="{{ route('founders') }}"
                                    class="{{ Route::is('') ? 'active' : '' }}">Founders</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="{{ route('services') }}"
                        class="{{ Route::is('services') ? 'active' : '' }}"><span>Services
                            </span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ route('products') }}"
                                class="{{ Route::is('') ? 'active' : '' }}">Products</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('partners') }}"
                            class="{{ Route::is('partners') ? 'active' : '' }}">Partners &
                            Clients</a>
                    </li>
                    <li>
                        <a href="{{ route('careers') }}"
                            class="{{ Route::is('careers') ? 'active' : '' }}">Careers</a>
                    </li>
                    <li>
                        <a href="{{ route('support') }}"
                            class="{{ Route::is('support') ? 'active' : '' }}">Support</a>
                    </li>
                    <li>
                        <a href="{{ route('contactus') }}"
                            class="{{ Route::is('contactus') ? 'active' : '' }}">Contact
                            Us</a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        @if (!Request::is('/'))
            <!-- ======= Breadcrumbs ======= -->
            @include('main.breadcrumbs')
            <!-- End Breadcrumbs -->
        @endif


        <!-- ======= Main Content ======= -->
        @yield('content')
        <!-- End Main Content -->
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <img src="assets/img/logo-name-white.png" alt="" class="img-fluid mb-2">

                            <p>
                                Suite 402, Jade Place Condominium, 33 Visayas Avenue, Bgy. Vasra, QC <br>
                                <strong>Phone:</strong> 0917-5533492 <br>
                                <strong>Email:</strong> info@cobraitech.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/') }}">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('company') }}">About Us</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('contactus') }}">Contact Us</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('partners') }}">Partners &
                                    Clients</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('careers') }}">Careers</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('support') }}">Support</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('services') }}">Computer
                                    Repair</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('services') }}">Help Desk
                                    Support</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('services') }}">Computer
                                    Programming</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('services') }}">Database
                                    Management</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('services') }}">Website
                                    Development</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('services') }}">Mobile App
                                    Development</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <h4>Our Location</h4>
                        <iframe style="border:0; width: 300; height: 300;"
                            src="https://maps.google.com/maps?q=cobra%20itech&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" allowfullscreen>
                        </iframe>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Cobra Itech Services Corporation</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main-pages.js') }}"></script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 3,
            speed: 400,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    slidesPerGroup: 1

                },
                480: {
                    slidesPerView: 1,
                    slidesPerGroup: 1

                },
                640: {
                    slidesPerView: 2,
                    slidesPerGroup: 2

                },
                992: {
                    slidesPerView: 2,
                    slidesPerGroup: 2
                }
            }
        });
    </script>

</body>

</html>