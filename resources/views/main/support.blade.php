@extends('layouts.app')
@section('title', 'Support')

@section('content')

    <!-- ======= Support Section ======= -->
    <section id="support" class="support">
        <div class="container divider-caption mb-3">

            <h4>Support</h4>
            <h1>How can we help you?</h1>
        </div>
        <div class="container">
            <div class="row">

                <div class="col-lg-8 offset-md-2">
                    <div class="card shadow-sm bg-body rounded border-0">
                        <div class="card-body">
                            <div class="form-text mb-3">
                                <small>Note: Please answer the <strong> Issue Section</strong> thoroughly so
                                    that we
                                    could provide the solution for your issue with utmost accuracy and efficiency.
                                </small>
                            </div>

                            <form action="" method="post" role="form" class="php-email-form">
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <p style="font-weight: bold">Name</p>
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Your Name" required>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <p style="font-weight: bold">Email</p>
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Your Email" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <p style="font-weight: bold">Contact Number</p>
                                        <input type="text" class="form-control" name="number" id="number"
                                            placeholder="Your contact number" required>
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <p style="font-weight: bold">Category</p>
                                        <select class="form-select" name="category" required>
                                            <option selected disabled>Choose a Category</option>
                                            <option>Hardware</option>
                                            <option>Software</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group mb-3">
                                    <p style="font-weight: bold">Issue</p>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your Issue"></textarea>
                                </div>

                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn text-white" style="background-color: #12519E;">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Support Section -->

@endsection
