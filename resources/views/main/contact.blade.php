@extends('layouts.app')

@section('title', 'Contact Us')
@section('content')


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

        <div class="container divider-caption">

            <h4>Get in Touch</h4>
            <h1>Send us a Message</h1>
        </div>

        <div class="container">

            <div>
                <iframe style="border:0; width: 100%; height: 270px;"
                    src="https://maps.google.com/maps?q=cobra%20itech&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                    allowfullscreen></iframe>
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
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" id="message" rows="5" placeholder="Type Message"></textarea>
                        </div>
                        <div class="text-center"><button type="submit" id="contact-btn">Send Message</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->


@endsection
