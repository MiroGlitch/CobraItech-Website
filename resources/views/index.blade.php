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
                        <p class="animate__animated animate__fadeInUp">Cobra Itech Services Corporation provides a full
                            range of Information Technology and Business services, from Business Process Analysis and Design
                            to Software Testing and Quality Assurance Consulting.
                        </p>
                        <a href="#main-page" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                            More</a>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <main id="main-page">
        <!-- ======= Feature Section ======= -->
        <section id="feature-section" class="feature-section mt-4">
            <div class="container divider-caption">
                <h4>Feature</h4>
                <h1>Why Choose Us?</h1>
                <p>By putting our clients at the heart of everything we do, we apply to deliver solutions that meet clients'
                    needs, expectations, and budgets.
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
                                <i class="bi bi-person-check feature-icon"></i>
                                <h5 class="card-title">Client First </h5>
                                <p class="card-text">For every business, Clients are always at the core. We pay attention to
                                    our clients to ensure that we deliver and meet their expectations in every aspect of our
                                    dealings. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 card-feature-section border-0">
                            <div class="card-body">
                                <i class="bi bi-star feature-icon"></i>
                                <h5 class="card-title">Innovative Approach</h5>
                                <p class="card-text">We are a group of thinkers, creators, and dreamers. Our services are
                                    always evolving to meet even greater standards.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 card-feature-section border-0">
                            <div class="card-body">
                                <i class="bi bi-gear feature-icon"></i>
                                <h5 class="card-title">Process Oriented</h5>
                                <p class="card-text">We are a process-oriented organization. This ensures prompt and
                                    high-quality delivery from simple help desk tasks to complex multi-vendor projects with
                                    strict timeframes.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 card-feature-section border-0">
                            <div class="card-body">
                                <i class="bi bi-lightbulb feature-icon"></i>
                                <h5 class="card-title">Creating Ideas with Passion </h5>
                                <p class="card-text">We provide uncomplicated business intelligence by bringing fresh ideas
                                    to the table every time with our expertise. The objective behind all of our ideas is
                                    client success and satisfaction at any time, anywhere.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 card-feature-section border-0">
                            <div class="card-body">
                                <i class="bi bi-building feature-icon"></i>
                                <h5 class="card-title">Strong Partnerships </h5>
                                <p class="card-text">We've formed excellent business relationships with some of the world's
                                    most prestigious companies. This allows us to provide our most crucial partners: our
                                    clients, with industry-leading solutions.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 card-feature-section border-0">
                            <div class="card-body">
                                <i class="bi bi-shield-check feature-icon"></i>
                                <h5 class="card-title">Honesty and Integrity </h5>
                                <p class="card-text">The business honesty and integrity with which we deal with clients and
                                    partners is the cornerstone of our success. We believe that what sets us apart from the
                                    competition is our transparency with our clients.</p>
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
                        <div class="swiper-slide"><a href="https://www.dswd.gov.ph/" target="_blank"><img
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
                        <div class="swiper-slide"><a href="https://www.dti.gov.ph/" target="_blank"><img
                                    src="{{ asset('assets/img/clients-partners/pc-12.webp') }}" class="img-fluid"
                                    alt=""></a>
                        </div>
                        <div class="swiper-slide"><a href="https://mmda.gov.ph/" target="_blank"><img
                                    src="{{ asset('assets/img/clients-partners/pc-13.webp') }}" class="img-fluid"
                                    alt=""></a>
                        </div>

                        <div class="swiper-slide"><a href="https://www.feu.edu.ph/" target="_blank"><img
                                    src="{{ asset('assets/img/clients-partners/pc-14.png') }}" class="img-fluid"
                                    alt=""></a>
                        </div>
                        <div class="swiper-slide"><a href="https://sscrmnl.edu.ph/" target="_blank"><img
                                    src="{{ asset('assets/img/clients-partners/pc-15.png') }}" class="img-fluid"
                                    alt=""></a>
                        </div>
                        <div class="swiper-slide"><a href="https://www.sanbeda.edu.ph/" target="_blank"><img
                                    src="{{ asset('assets/img/clients-partners/pc-16.png') }}" class="img-fluid"
                                    alt=""></a>
                        </div>
                        <div class="swiper-slide"><a href="https://www.octaresearch.com/" target="_blank"><img
                                    src="{{ asset('assets/img/clients-partners/pc-17.png') }}" class="img-fluid"
                                    alt=""></a>
                        </div>
                        <div class="swiper-slide"><a href="http://www.ebizolution.com/" target="_blank"><img
                                    src="{{ asset('assets/img/clients-partners/pc-18.jpg') }}" class="img-fluid"
                                    alt=""></a>
                        </div>
                        <div class="swiper-slide"><a href="https://sscgi.com/home" target="_blank"><img
                                    src="{{ asset('assets/img/clients-partners/pc-19.png') }}" class="img-fluid"
                                    alt=""></a>
                        </div>
                        <div class="swiper-slide"><a href="https://www.hira.or.kr/eng/main.do" target="_blank"><img
                                    src="{{ asset('assets/img/clients-partners/pc-20.jpg') }}" class="img-fluid"
                                    alt=""></a>
                        </div>
                        <div class="swiper-slide"><a href="https://www.agiaph.org/" target="_blank"><img
                                    src="{{ asset('assets/img/clients-partners/pc-21.png') }}" class="img-fluid"
                                    alt=""></a>
                        </div>
                        <div class="swiper-slide"><a href="https://customs.gov.ph/" target="_blank"><img
                                    src="{{ asset('assets/img/clients-partners/pc-22.png') }}" class="img-fluid"
                                    alt=""></a>
                        </div>
                        <div class="swiper-slide"><a href="https://www.doj.gov.ph/index.html" target="_blank"><img
                                    src="{{ asset('assets/img/clients-partners/pc-23.png') }}" class="img-fluid"
                                    alt=""></a>
                        </div>
                        <div class="swiper-slide"><a href="https://www.philhealth.gov.ph/" target="_blank"><img
                                    src="{{ asset('assets/img/clients-partners/pc-24.png') }}" class="img-fluid"
                                    alt=""></a>
                        </div>
                        <div class="swiper-slide"><a href="http://www.certezainfosys.com/" target="_blank"><img
                                    src="{{ asset('assets/img/clients-partners/pc-25.png') }}" class="img-fluid"
                                    alt=""></a>
                        </div>
                        <div class="swiper-slide"><a href="https://www.kccp.ph/" target="_blank"><img
                                    src="{{ asset('assets/img/clients-partners/pc-26.png') }}" class="img-fluid"
                                    alt=""></a>
                        </div>
                        <div class="swiper-slide"><a href="http://www.eccp.com/" target="_blank"><img
                                    src="{{ asset('assets/img/clients-partners/pc-27.png') }}" class="img-fluid"
                                    alt=""></a>
                        </div>
                        <div class="swiper-slide"><a href="https://panxenia.com/" target="_blank"><img
                                    src="{{ asset('assets/img/clients-partners/pc-28.png') }}" class="img-fluid"
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
                    <div class="col-sm-12 col-md-6"><img src="assets/img/about-us-img.jpg" alt=""
                            class="img-fluid rounded">
                    </div>
                    <div class="col-sm-12 col-md-6 d-flex justify-content-center align-items-center">
                        <div
                            class="container divider-caption d-flex justify-content-center align-items-center flex-column mt-5">
                            <h4>About Us</h4>
                            <h1>Who We Are</h1>
                            <p class="text-center">Cobra Itech Services Corporation got its name from
                                the 2 leading senior consultants and principals of the company. Our key officers are
                                seasoned technical leaders with more than <strong>50 years</strong> experience in I.T.
                                from large information technology service providers and from backgrounds in security and
                                intelligence institutions,
                                including the US Air Force, Central Intelligence Agency (CIA),
                                executive branch of the US government, Supreme Headquarters Allied Powers Europe (SHAPE),
                                and Germany’s Bundesnachrichtendienst.
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
                <p class="text-center">With every client, Cobra Itech does the job with utmost professionalism.</p>
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
                                <div class="card-body service-content p-3">
                                    <i class="bi bi-gear"></i>
                                    <h4 class="card-title">Business Process Analysis and Design</h4>
                                    <p class="card-text">Cobra Itech’s Business process analysis helps to
                                        increase the efficiency and effectiveness of a process.
                                        Our team can assess how well the process achieves its end goal.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card border-0">
                                <div class="card-body service-content p-3">
                                    <i class="bi bi-people"></i>
                                    <h4 class="card-title">Management Consulting</h4>
                                    <p class="card-text">Cobra Itech’s Management consulting helps organizations to
                                        improve their performance.
                                        Our company is responsible to provide objective advice and expertise and
                                        help an organization to develop any specialist skills that it may be lacking.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card border-0">
                                <div class="card-body service-content p-3">
                                    <i class="bi bi-cpu"></i>
                                    <h4 class="card-title">ICT Consulting</h4>
                                    <p class="card-text">Leveraging the potential of ICT to empower business, We, in
                                        Cobra Itech,
                                        provide advice on the design, structure, and efficiency of ICT systems in
                                        organizations or on specific projects.
                                        We make recommendations for the development and implementation of a business project
                                        and can contribute to project definitions.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card border-0">
                                <div class="card-body service-content p-3">
                                    <i class="bi bi-lightbulb"></i>
                                    <h4 class="card-title">Six Sigma / Quality Management Systems Consulting</h4>
                                    <p class="card-text">In Cobra Itech, We provide a broad range of advisory
                                        services, support, and
                                        technical talent to help an organization achieve successful project outcomes in
                                        quality initiatives related to compliance,
                                        certification with quality standards, quality management systems software, training,
                                        and more.
                                        Our team aims to help how to analyze and to improve Key Business Processes and help
                                        implement
                                        Benchmarking to determine the effectiveness of processes, systems, and structures.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card border-0">
                                <div class="card-body service-content p-3">
                                    <i class="bi bi-bar-chart-line"></i>
                                    <h4 class="card-title">ERP and Business Solutions</h4>
                                    <p class="card-text">Cobra Itech paves the way for improved business management
                                        and this is where ERP comes into play.
                                        Here at Cobra Itech, we manage and integrate the important parts of your business.
                                        Our team will help the businesses to implement resource planning by integrating all
                                        of the processes needed to run their companies with a single system.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card border-0">
                                <div class="card-body service-content p-3">
                                    <i class="bi bi-bullseye"></i>
                                    <h4 class="card-title">Change Management Consulting</h4>
                                    <p>We simplify the redirection of resources, budgets, and other aspects of business
                                        operations and help make the reshaping
                                        of an organization a smooth process for all teams and individuals that are involved.
                                        As a team, we also acknowledge
                                        the areas where there is a need for change and assess how this will affect the
                                        organization. </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card border-0">
                                <div class="card-body service-content p-3">
                                    <i class="bi bi-diagram-3"></i>
                                    <h4 class="card-title">Project and Program Management Consulting</h4>
                                    <p>At Cobra Itech, our Project and Program Management consultancy can handle the
                                        projects of an
                                        organization to ensure that they are in line with the stated goals of their
                                        organization.
                                        We provide quality control for the organization's programs through methods such as
                                        handling
                                        the budgets, staff, activities, and intended final products. </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card border-0">
                                <div class="card-body service-content p-3">
                                    <i class="bi bi-braces "></i>
                                    <h4 class="card-title">Software Testing and Quality Assurance Consulting</h4>
                                    <p>Here at Cobra Itech, we enable to build consistent quality assurance strategies and
                                        ensure software products are secure and reliable.
                                        We also evaluate processes of communication, testing, customer service, and
                                        accountability for efficiency and effectiveness
                                        to enhance, optimize, and improve performance.</p>
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
                <h1 class="text-center">Send us a message</h1>
            </div>

            <div class="container">
                <div class="card p-3" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
                    <div class="card-body">
                        <div>
                            <iframe style="border:0; width: 100%; height: 270px;"
                                src="https://maps.google.com/maps?q=cobra%20itech&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" allowfullscreen></iframe>
                        </div>

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

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
                                        <p>info@cobraitech.com</p>
                                    </div>

                                    <div class="phone">
                                        <i class="bi bi-phone"></i>
                                        <h4>Call:</h4>
                                        <p>0917-5533492</p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-8 mt-5 mt-lg-0">
                                <form action="{{ route('send.contact') }}" method="post" role="form"
                                    class="php-email-form">
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
                                    <div class="text-center"><button type="submit" id="contact-btn">Send
                                            Message</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Contact Section -->


    </main><!-- End #main -->
@endsection
