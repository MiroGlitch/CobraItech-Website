@extends('layouts.app')

@section('title', 'Careers')
@section('content')


    <!-- ======= Careers Section ======= -->
    <section id="careers" class="careers">
        <div class="container divider-caption mb-5">

            <h4>Careers</h4>
            <h1>Join our Team</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat, sequi repellat dignissimos perferendis
                libero
            </p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-md-2">
                    <div class="card shadow-sm bg-body rounded border-0">
                        <div class="card-body">
                            <form action="" method="post" role="form" class="php-email-form">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <p style="font-weight: bold">Name</p>
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Your Name">
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <p style="font-weight: bold">Email</p>
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <p style="font-weight: bold">Job Category</p>
                                    <select class="form-select" name="job" id="job">
                                        <option>Select Job Category</option>
                                        <option>Consultant</option>
                                        <option>Data Scientist</option>
                                        <option>Designer</option>
                                        <option>Developer</option>
                                    </select>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="formFile" class="form-label" style="font-weight: bold">Resume/CV</label>
                                    <input class="form-control" type="file" id="fileCV">
                                </div>
                                <div><br></div>
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn text-white" style="background-color: #12519E;"
                                        id="career-btn">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section><!-- End Careers Section -->


@endsection
