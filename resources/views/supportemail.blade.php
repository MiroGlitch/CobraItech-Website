@extends('layouts.emailtemplate')
@section('title', 'Customer Support Inquiry')

@section('content')
    <p class=" fw-bold" style="font-weight: 700;">Hello,</p>
    <p class="card-text">I have an issue that you may be able to assist me with. If you have the time, I
        could use your help to provide solution with regards to my concern. I have provided my details
        and inquiry below. </p>

    <div class="row mt-4">
        <div class="col-md-6 mb-5">
            <h3 style="font-weight: 700;">Customer Details</h3>
            <ul class="list-group list-group-flush" style="list-style:none; padding-inline-start: 20px;">
                <li class="list-group-item" style="margin-bottom: 16px">
                    <div class=" me-auto">
                        <div style="font-weight:700; font-size: 16px;">Name</div>
                        Content for list item
                    </div>
                </li>
                <li class="list-group-item" style="margin-bottom: 16px">
                    <div class=" me-auto">
                        <div style="font-weight:700; font-size: 16px;">Email</div>
                        Content for list item
                    </div>
                </li>

                <li class="list-group-item">
                    <div class=" me-auto">
                        <div style="font-weight:700; font-size: 16px;">Contact
                            Number
                        </div>
                        Content for list item
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-md-6 ">
            <h3 style="font-weight: 700;">Customer Inquiry</h3>
            <ul class="list-group list-group-flush" style="list-style:none; padding-inline-start: 20px;">
                <li class="list-group-item" style="margin-bottom: 16px">
                    <div class=" me-auto">
                        <div style="font-weight:700; font-size: 16px;">Category</div>
                        Content for list item
                    </div>
                </li>
                <li class="list-group-item" style="margin-bottom: 16px">
                    <div class=" me-auto" style="text-align: justify">
                        <div style="font-weight:700; font-size: 16px;">Inquiry</div>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint vero expedita
                        voluptas ad tempora officiis itaque dolorem facere ipsam nihil. Dignissimos nobis ipsa ullam
                        distinctio quas accusamus incidunt recusandae placeat. Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Minus dolorem quos aliquam reiciendis debitis omnis architecto
                        saepe fuga. Optio exercitationem deleniti laudantium! Esse non praesentium
                        voluptatum, eius iste iure beatae.
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection
