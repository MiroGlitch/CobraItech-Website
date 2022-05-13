@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            Slide 1
            <div class="carousel-item active" style="background-image: url(assets/img/hero-image.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Cobra Itech Services
                                Corporation</span>
                        </h2>
                        <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid.
                            Sequi ea ut
                            et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea
                            voluptatem. Esse
                            doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                        <a href="#main" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                            More</a>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <main id="main">
        <!-- ======= Feature Section ======= -->
        <section id="feature-section" class="feature-section mt-4">
            <div class="container divider-caption">
                <h4>Feature</h4>
                <h1>Why Choose Us?</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat, sequi repellat dignissimos
                    perferendis
                    libero
                </p>
            </div>

            <div class="divider-container">
                <div class="divider"></div>
            </div>

            <div class="container" style="text-align: left;">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100 card-feature-section border-0">
                            <div class="card-body">
                                <i class="bi bi-briefcase feature-icon"></i>
                                <h5 class="card-title">Lorem Ipsum</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional
                                    content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 card-feature-section border-0">
                            <div class="card-body">
                                <i class="bi bi-card-checklist feature-icon"></i>
                                <h5 class="card-title">Lorem Ipsum</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional
                                    content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 card-feature-section border-0">
                            <div class="card-body">
                                <i class="bi bi-bar-chart feature-icon"></i>
                                <h5 class="card-title">Lorem Ipsum</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional
                                    content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 card-feature-section border-0">
                            <div class="card-body">
                                <i class="bi bi-binoculars feature-icon"></i>
                                <h5 class="card-title">Lorem Ipsum</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional
                                    content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 card-feature-section border-0">
                            <div class="card-body">
                                <i class="bi bi-brightness-high feature-icon"></i>
                                <h5 class="card-title">Lorem Ipsum</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional
                                    content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 card-feature-section border-0">
                            <div class="card-body">
                                <i class="bi bi-calendar4-week feature-icon"></i>
                                <h5 class="card-title">Lorem Ipsum</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional
                                    content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section><!-- End Feature Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-in">

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><a href="https://op-proper.gov.ph/" target="_blank"><img
                                    src="{{ asset('assets/img/clients-partners/pc-1.webp') }}" class="img-fluid"
                                    alt=""></a></div>
                        <div class="swiper-slide"><a href="https://www.bir.gov.ph/" target="_blank"><img
                                    src="{{ asset('assets/img/clients-partners/pc-2.webp') }}" class="img-fluid"
                                    alt=""></a></div>
                        <div class="swiper-slide"><a href="https://www.dof.gov.ph/" target="_blank"><img
                                    src="{{ asset('assets/img/clients-partners/pc-3.webp') }}" class="img-fluid"
                                    alt=""></a></div>
                        <div class="swiper-slide"><a href="https://up.edu.ph/" target="_blank"><img
                                    src="{{ asset('assets/img/clients-partners/pc-4.webp') }}" class="img-fluid"
                                    alt=""></a></div>
                        <div class="swiper-slide"><a href="https://www.uog.edu/" target="_blank"><img
                                    src="{{ asset('assets/img/clients-partners/pc-5.webp') }}" class="img-fluid"
                                    alt=""></a></div>
                        <div class="swiper-slide"><a href="https://www.neu.edu.ph/main/" target="_blank"><img
                                    src="{{ asset('assets/img/clients-partners/pc-6.webp') }}" class="img-fluid"
                                    alt=""></a></div>
                        <div class="swiper-slide"><a href="https://www.adb.org/" target="_blank"><img
                                    src="{{ asset('assets/img/clients-partners/pc-7.webp') }}" class="img-fluid"
                                    alt=""></a></div>
                        <div class="swiper-slide"><a href="https://www.wellsfargo.com/" target="_blank"><img
                                    src="{{ asset('assets/img/clients-partners/pc-8.webp') }}" class="img-fluid"
                                    alt=""></a></div>
                        <div class="swiper-slide"><a href="https://www.worldbank.org/en/home" target="_blank"><img
                                    src="{{ asset('assets/img/clients-partners/pc-9.webp') }}" class="img-fluid"
                                    alt=""></a></div>
                        <div class="swiper-slide"><a href="https://www.accenture.com/us-en" target="_blank"><img
                                    src="{{ asset('assets/img/clients-partners/pc-10.webp') }}" class="img-fluid"
                                    alt=""></a>
                        </div>
                        <div class="swiper-slide"><a href="https://www.ibm.com/ph-en" target="_blank"><img
                                    src="{{ asset('assets/img/clients-partners/pc-11.webp') }}" class="img-fluid"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about-us-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6"><img src="assets/img/about-us-img.jpg" alt="" class="img-fluid rounded">
                    </div>
                    <div class="col-sm-12 col-md-6 d-flex justify-content-center align-items-center">
                        <div
                            class="container divider-caption d-flex justify-content-center align-items-center flex-column mt-5">
                            <h4>About Us</h4>
                            <h1>Who We Are</h1>
                            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque
                                ipsam modi odio.
                                Eligendi quos animi
                                optio fugit omnis dolore! Voluptatum laudantium itaque numquam recusandae possimus
                                sapiente quibusdam
                                doloremque, error dolorum. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Asperiores vitae
                                magni molestias quam earum dolore odio! Sed, minus adipisci possimus totam excepturi,
                                qui pariatur
                                debitis reprehenderit nostrum error optio. Debitis.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </section><!-- End Program Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container divider-caption d-flex justify-content-center align-items-center flex-column">
                <h4>Services</h4>
                <h1>What We Offer</h1>
                <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat, sequi
                    repellat
                    dignissimos perferendis
                    libero
                </p>
            </div>

            <div class="divider-container mt-0">
                <div class="divider"></div>
            </div>

            <div class="container">

                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card border-0">
                                <div
                                    class="card-body service-content d-flex justify-content-center align-items-center flex-column text-center p-3">
                                    <i class="bi bi-mouse "></i>
                                    <h4><a href="#">Computer Repair</a></h4>
                                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                        occaecati
                                        cupiditate
                                        non provident</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card border-0">
                                <div
                                    class="card-body service-content d-flex justify-content-center align-items-center flex-column text-center p-3">
                                    <i class="bi bi-question-circle "></i>
                                    <h4><a href="#">Help Desk Support</a></h4>
                                    <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat
                                        tarad
                                        limino ata</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card border-0">
                                <div
                                    class="card-body service-content d-flex justify-content-center align-items-center flex-column text-center p-3">
                                    <i class="bi bi-braces "></i>
                                    <h4><a href="#">Computer Programming</a></h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla
                                        pariatur
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card border-0">
                                <div
                                    class="card-body service-content d-flex justify-content-center align-items-center flex-column text-center p-3">
                                    <i class="bi bi-server "></i>
                                    <h4><a href="#">Database Management</a></h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                        deserunt mollit anim id
                                        est
                                        laborum</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card border-0">
                                <div
                                    class="card-body service-content d-flex justify-content-center align-items-center flex-column text-center p-3">
                                    <i class="bi bi-pc-display "></i>
                                    <h4><a href="#">Website Development</a></h4>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                        praesentium voluptatum
                                        deleniti atque</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card border-0">
                                <div
                                    class="card-body service-content d-flex justify-content-center align-items-center flex-column text-center p-3">
                                    <i class="bi bi-phone "></i>
                                    <h4><a href="#">Mobile App Development</a></h4>
                                    <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum
                                        soluta nobis est
                                        eligendi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section><!-- End Services Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container divider-caption d-flex justify-content-center align-items-center flex-column">
                <h4>Get in Touch</h4>
                <h1>Send us a message</h1>
            </div>

            <div class="container">
                <div class="card p-3" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
                    <div class="card-body">
                        <div>
                            <iframe style="border:0; width: 100%; height: 270px;"
                                src="https://maps.google.com/maps?q=cobra%20itech&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" allowfullscreen></iframe>
                        </div>

                        <div class="row mt-5">
                            <div class="col-lg-4">
                                <div class="info">
                                    <div class="address">
                                        <i class="bi bi-geo-alt"></i>
                                        <h4>Location:</h4>
                                        <p>Suite 402, Jade Place Condominium, 33 Visayas Avenue, Bgy. Vasra, QC</p>
                                    </div>

                                    <div class="email">
                                        <i class="bi bi-envelope"></i>
                                        <h4>Email:</h4>
                                        <p>info@example.com</p>
                                    </div>

                                    <div class="phone">
                                        <i class="bi bi-phone"></i>
                                        <h4>Call:</h4>
                                        <p>(02) 577 4822</p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-8 mt-5 mt-lg-0">
                                <form action="{{route('send.contact')}}" method="post" role="form" class="php-email-form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Your Name">
                                        </div>
                                        <div class="col-md-6 form-group mt-3 mt-md-0">
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="subject" id="subject"
                                            placeholder="Subject">
                                    </div>
                                    <div class="form-group mt-3">
                                        <textarea class="form-control" name="message" rows="5" placeholder="Type message"></textarea>
                                    </div>
                                    <div class="text-center"><button type="submit" id="contact-btn">Send Message</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Contact Section -->


    </main><!-- End #main -->
@endsection
