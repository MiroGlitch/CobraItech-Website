@extends('layouts.emailtemplate')
@section('title', 'Customer Support Inquiry')

@section('content')
    <p class=" fw-bold">Hello,</p>
    <p class="card-text">I have an issue that you may be able to assist me with. If you have the time, I
        could use your help to provide solution with regards to my concern. I have provided my details
        and inquiry below. </p>

    <div class="row mt-4">
        <div class="col-md-6 mb-5">
            <h5 class="text-center fw-bold">Customer Details</h5>
            <ol class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class=" me-auto">
                        <div class="fw-bold">Name</div>
                        Content for list item
                    </div>
                </li>
                <li class="list-group-item">
                    <div class=" me-auto">
                        <div class="fw-bold">Email</div>
                        Content for list item
                    </div>
                </li>

                <li class="list-group-item">
                    <div class=" me-auto">
                        <div class="fw-bold">Contact
                            Number
                        </div>
                        Content for list item
                    </div>
                </li>
            </ol>
        </div>
        <div class="col-md-6 ">
            <h5 class="text-center fw-bold">Customer Inquiry</h5>
            <ol class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class=" me-auto">
                        <div class="fw-bold">Category</div>
                        Content for list item
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="me-auto" style="text-align: justify">
                        <div class="fw-bold">Inquiry
                        </div>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint vero expedita
                        voluptas ad tempora officiis itaque dolorem facere ipsam nihil. Dignissimos nobis ipsa ullam
                        distinctio quas accusamus incidunt recusandae placeat. Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Minus dolorem quos aliquam reiciendis debitis omnis architecto
                        saepe fuga. Optio exercitationem deleniti laudantium! Esse non praesentium
                        voluptatum, eius iste iure beatae.
                    </div>
                </li>
            </ol>
        </div>
    </div>
@endsection
