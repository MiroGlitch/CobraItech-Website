@extends('layouts.app')
@section('title', 'Partners and Clients')

@section('content')

    <!-- ======= Partners and Clients Section ======= -->
    <section id="partner" class="partner">

        <div class="container divider-caption mb-5">

            <h4>Partners and Clients</h4>
            <h1>Our Partners</h1>
            <p>Empowering partners with proven success to help exceed customers’ specific needs.
            </p>
        </div>

        <div class="container">

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="partner-flters">
                        <li data-filter=".filter-govt">Government</li>
                        <li data-filter=".filter-univ">Universities</li>
                        <li data-filter=".filter-comp">Companies</li>
                    </ul>
                </div>
            </div>

            <div class="row partner-container">

                {{-- GOVERNMENT --}}
                <div class="col-lg-4 col-md-6 partner-item filter-govt">
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

                <div class="col-lg-4 col-md-6 partner-item filter-govt">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-8.webp') }}" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href="https://www.dswd.gov.ph/" target="_blank" style="color: white">DEPARTMENT OF SOCIAL
                                    WELFARE AND DEVELOPMENT</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 partner-item filter-govt">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-12.webp') }}" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href="https://www.dti.gov.ph/" target="_blank" style="color: white">DEPARTMENT OF TRADE
                                    AND INDUSTRY</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 partner-item filter-govt">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-13.webp') }}" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href="https://mmda.gov.ph/" target="_blank" style="color: white">METROPOLITAN MANILA
                                    DEVELOPMENT AUTHORITY</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 partner-item filter-govt">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-2.webp') }}" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href="https://www.bir.gov.ph/" target="_blank" style="color: white">BUREAU OF INTERNAL
                                    REVENUE</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 partner-item filter-govt">
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

                <div class="col-lg-4 col-md-6 partner-item filter-govt">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-21.png') }}" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href="https://www.agiaph.org/" target="_blank" style="color: white">ASSOCIATION OF
                                    GOVERNMENT INTERNAL
                                    AUDITORS, INC. </a>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 partner-item filter-govt">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-22.png') }}" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href="https://customs.gov.ph/" target="_blank" style="color: white">BUREAU OF CUSTOMS</a>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 partner-item filter-govt">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-23.png') }}" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href="https://www.doj.gov.ph/index.html" target="_blank" style="color: white">DEPARTMENT
                                    OF JUSTICE</a>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 partner-item filter-govt">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-24.png') }}" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href="https://www.philhealth.gov.ph/" target="_blank" style="color: white">PHILIPPINE
                                    HEALTH INSURANCE
                                    CORPORATION</a>
                            </h4>
                        </div>
                    </div>
                </div>

                {{-- END OF GOVERNMENT --}}

                {{-- UNIVERSITIES --}}
                <div class="col-lg-4 col-md-6 partner-item filter-univ">
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

                <div class="col-lg-4 col-md-6 partner-item filter-univ">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-5.webp') }}" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href="https://www.uog.edu/" target="_blank" style="color: white">UNIVERSITY OF
                                    GUAM</a>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 partner-item filter-univ">
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

                <div class="col-lg-4 col-md-6 partner-item filter-univ">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-14.png') }}" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href="https://www.feu.edu.ph/" target="_blank" style="color: white">FAR EASTERN
                                    UNIVERSITY</a>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 partner-item filter-univ">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-15.png') }}" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href="https://sscrmnl.edu.ph/" target="_blank" style="color: white">SAN SEBASTIAN
                                    COLLEGE</a>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 partner-item filter-univ">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-16.png') }}" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href="https://www.sanbeda.edu.ph/" target="_blank" style="color: white">SAN BEDA
                                    UNIVERSITY</a>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 partner-item filter-univ">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-28.png') }}" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href="https://panxenia.com/" target="_blank" style="color: white">PAN XENIA
                                    FRATERNITY</a>
                            </h4>
                        </div>
                    </div>
                </div>

                {{-- END OF UNIVERSITY --}}

                {{-- COMPANIES --}}
                <div class="col-lg-4 col-md-6 partner-item filter-comp">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-7.webp') }}" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href="https://www.adb.org/" target="_blank" style="color: white">ASIAN DEVELOPMENT
                                    BANK</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 partner-item filter-comp">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-9.webp') }}" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href="https://www.worldbank.org/en/home" target="_blank" style="color: white">WORLD
                                    BANK</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 partner-item filter-comp">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-10.webp') }}"
                            class="rounded mx-auto d-block" alt="">
                        <div class="partner-info">
                            <h4><a href="https://www.accenture.com/us-en" target="_blank"
                                    style="color: white">ACCENTURE</a>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 partner-item filter-comp">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-11.webp') }}"
                            class="rounded mx-auto d-block" alt="">
                        <div class="partner-info">
                            <h4><a href="https://www.ibm.com/ph-en" target="_blank" style="color: white">IBM</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 partner-item filter-comp">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-17.png') }}" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href="https://www.octaresearch.com/" target="_blank"
                                    style="color: white">OCTARESEARCH</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 partner-item filter-comp">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-18.jpg') }}" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href="http://www.ebizolution.com/" target="_blank"
                                    style="color: white">EBIZOLUTIONS</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 partner-item filter-comp">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-19.png') }}" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href="https://sscgi.com/home" target="_blank" style="color: white">SYSTEMS AND
                                    SOFTWARE
                                    CONSULTING GROUP, INC.</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 partner-item filter-comp">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-20.jpg') }}" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href="https://www.hira.or.kr/eng/main.do" target="_blank" style="color: white">HEALTH
                                    INSURANCE REVIEW AND
                                    ASSESSMENT SERVICE</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 partner-item filter-comp">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-25.png') }}" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href=" http://www.certezainfosys.com/" target="_blank" style="color: white">CERTEZA
                                    INFOSYS CORPORATION</a></h4>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 partner-item filter-comp">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-26.png') }}" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href="https://www.kccp.ph/" target="_blank" style="color: white">KOREAN
                                    CHAMBER OF COMMERCE PHILIPPINES</a></h4>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 partner-item filter-comp">
                    <div class="partner-wrap">
                        <img src="{{ asset('assets/img/clients-partners/pc-27.png') }}" class="rounded mx-auto d-block"
                            alt="">
                        <div class="partner-info">
                            <h4><a href=" http://www.eccp.com/" target="_blank" style="color: white">EUROPEAN CHAMBER OF
                                    COMMERCE OF THE PHILIPPINES</a></h4>
                        </div>
                    </div>
                </div>
                {{-- END OF COMPANIES --}}

            </div>
        </div>


        <div class="container divider-caption mb-5 mt-4">

            <h4>Certifications</h4>
            <h1>Certificates Acquired</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
        </div>

        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-3 d-flex justify-content-center align-items-center">
                <div class="col">
                    <div class="card mb-3 border-0">
                        <div class="card-body certification-content">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/img/certifications/cert-1.webp') }}"
                                    class="img-fluid rounded-start " alt="..." width="100">
                                <h5 class="card-title ms-3">Scrum Master Certification (SMAC™) </h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-3 border-0">
                        <div class="card-body certification-content">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/img/certifications/cert-2.png') }}"
                                    class="img-fluid rounded-start " alt="..." width="100">
                                <h5 class="card-title ms-3">International Software Testing Qualifications Board (ISTQB®)
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-3 border-0">
                        <div class="card-body certification-content">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/img/certifications/cert-3.jpg') }}"
                                    class="img-fluid rounded-start " alt="..." width="100">
                                <h5 class="card-title ms-3">Certified Six Sigma Black Belt (CSSBB™)
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-3 border-0">
                        <div class="card-body certification-content">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/img/certifications/cert-4.jpg') }}"
                                    class="img-fluid rounded-start " alt="..." width="100">
                                <h5 class="card-title ms-3">Certified Six Sigma Green Belt (CSSGB™)
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-3 border-0">
                        <div class="card-body certification-content">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/img/certifications/cert-5.png') }}"
                                    class="img-fluid rounded-start " alt="..." width="100">
                                <h5 class="card-title ms-3">Associate Professional Risk Manager (APRM™)
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-3 border-0">
                        <div class="card-body certification-content">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/img/certifications/cert-6.png') }}"
                                    class="img-fluid rounded-start " alt="..." width="100">
                                <h5 class="card-title ms-3"> <a href="https://www.io4pm.org/" target="_blank">Project
                                        Management Certification
                                    </a> </h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-3 border-0">
                        <div class="card-body certification-content">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/img/certifications/cert-7.jpg') }}"
                                    class="img-fluid rounded-start " alt="..." width="100">
                                <h5 class="card-title ms-3"><a href="https://www.sixsigma-institute.org/"
                                        target="_blank"> Six Sigma Certification
                                    </a></h5>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


    </section><!-- End partner Section -->

@endsection
