@extends('layouts.app')
@section('title', 'Partners and Clients')

@section('content')

    <!-- ======= Partners and Clients Section ======= -->
    <section id="partner" class="partner">

        <div class="container divider-caption mb-5">

            <h4>Partners and Clients</h4>
            <h1>Our Partners</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat, sequi repellat dignissimos perferendis
                libero
            </p>
        </div>

        <div class="container">

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="partner-flters">
                        <li data-filter=".filter-app">Governtment</li>
                        <li data-filter=".filter-card">Universities</li>
                        <li data-filter=".filter-web">Companies</li>
                    </ul>
                </div>
            </div>

            <div class="row partner-container">

                <div class="col-lg-4 col-md-6 partner-item filter-app">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-1.webp') }}" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href="https://op-proper.gov.ph/" target="_blank" style="color: white">OFFICE OF THE
                                    PRESIDENT
                                    MALACAÑANG PALACE</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 partner-item filter-app">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-8.webp') }}" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href="https://www.dswd.gov.ph/" target="_blank" style="color: white">DEPARTMENT OF SOCIAL WELFARE AND DEVELOPMENT</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 partner-item filter-app">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-12.webp') }}" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href="https://www.dti.gov.ph/" target="_blank" style="color: white">DEPARTMENT OF TRADE AND INDUSTRY</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 partner-item filter-app">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-13.webp') }}" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href="https://mmda.gov.ph/" target="_blank" style="color: white">METROPOLITAN MANILA DEVELOPMENT AUTHORITY</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 partner-item filter-app">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-2.webp') }}" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href="https://www.bir.gov.ph/" target="_blank" style="color: white">BUREAU OF INTERNAL
                                    REVENUE</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 partner-item filter-app">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-3.webp') }}" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href="https://www.dof.gov.ph/" target="_blank" style="color: white">DEPARTMENT OF
                                    FINANCE</a>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 partner-item filter-card">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-4.webp') }}" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href="https://up.edu.ph/" target="_blank" style="color: white">UNIVERSITY OF THE
                                    PHILIPPINES</a>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 partner-item filter-card">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-5.webp') }}" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href="https://www.uog.edu/" target="_blank" style="color: white">UNIVERSITY OF GUAM</a>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 partner-item filter-card">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-6.webp') }}" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href="https://www.neu.edu.ph/main/" target="_blank" style="color: white">NEW ERA
                                    UNIVERSITY</a>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 partner-item filter-web">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-7.webp') }}" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href="https://www.adb.org/" target="_blank" style="color: white">ASIAN DEVELOPMENT
                                    BANK</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 partner-item filter-web">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-9.webp') }}" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href="https://www.worldbank.org/en/home" target="_blank" style="color: white">WORLD
                                    BANK</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 partner-item filter-web">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-10.web') }}p" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href="https://www.accenture.com/us-en" target="_blank" style="color: white">ACCENTURE</a>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 partner-item filter-web">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-11.web') }}p" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href="https://www.ibm.com/ph-en" target="_blank" style="color: white">IBM</a></h4>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End partner Section -->

@endsection
