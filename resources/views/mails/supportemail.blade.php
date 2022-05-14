@extends('layouts.emailtemplate')

@section('content')
    <table style="text-align:center; margin-right:auto; margin-left:auto; border-spacing:0px;">
        <tr>
            <td style="background-color: #fff; padding: 30px 30px 0px; ">
                <img src="{{ $message->embed('assets/img/emailicon.png') }}" alt="Email Icon" srcset=""
                    style="display: block; margin-left: auto; margin-right: auto; max-width: 200px">
            </td>
        </tr>
        <tr>
            <td style="background-color: #fff; padding: 10px 30px 0px; ">
                <h1
                    style="margin-top:0;font-size:25px; font-weight:bold;letter-spacing:-0.02em; padding:0px 0px 20px; margin:0px; ">
                    Thank you for contacting us!</h1>

                <p
                    style=" font-size: 16px; margin-top:15px; color: #6c757d; font-weight:400; margin-right:auto; margin-left:auto; text-align:justify;">
                    Hi, {{ $data['name'] }}! <br><br> Thank you for contacting us. Our team is working diligently to
                    assist you with your request. This is what we have received.
                    Please refer to the contact form summary below.</p>
            </td>
        </tr>
        <tr>
            <td style="background-color: #fff; padding: 0px 30px; border-collapse: collapse;">
                <h3 style="color:#12519e; font-size: 23px">Customer Support Form Summary</h5>

                    <table style="font-size: 16px; text-align: left; width: 100%; border-spacing:0px; color: #343a40;">
                        <tr>
                            <td style="font-weight:bold; padding: 20px 15px;">Name</td>
                            <td style=" padding: 20px 15px;">{{ $data['name'] }}</td>
                        </tr>
                        <tr style="background-color:#e7edf5;">
                            <td style="font-weight:bold; padding: 20px 15px;">Email</td>
                            <td style="padding: 20px 15px;">{{ $data['email'] }}</td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold; padding: 20px 15px;">Contact</td>
                            <td style="padding: 20px 15px;">{{ $data['number'] }}</td>
                        </tr>
                        <tr style="background-color:#e7edf5;">
                            <td style="font-weight:bold; padding: 20px 15px;">Category</td>
                            <td style="padding: 20px 15px;  max-width: 300px;">{{ $data['category'] }}
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight:bold; padding: 20px 15px;">Issue</td>
                            <td style="padding: 20px 15px; max-width: 300px; text-align:justify">{{ $data['issue'] }}
                            </td>
                        </tr>
                    </table>
            </td>
        </tr>

        <tr>
            <td style="background-color: #fff; padding: 30px 30px 0px; ">
                <p
                    style="font-size: 16px; margin-top:15px; color: #6c757d; font-weight:400; margin-right:auto; margin-left:auto; text-align:justify; padding:0px 0px 20px; margin:0px; ">
                    We will respond to you as soon as possible. Please do not reply to this automated-email
                    response.</p>
                <p
                    style=" font-size: 16px; margin-top:15px; color: #6c757d; font-weight:400; margin-right:auto; margin-left:auto; text-align:justify;">
                    Thanks, <br> Cobra Itech Services Corporation Team</p>
            </td>
        </tr>

        <tr>
            <td style="background-color: #fff; padding: 30px 30px 20px; ">

                <p
                    style=" font-size: 12px; margin-top:15px; color: #6c757d; font-weight:400; margin-right:auto; margin-left:auto; text-align:center;">
                    &copy; Copyright Cobra Itech Services Corporation. All Rights Reserved <br> Suite 402, Jade
                    Place Condominium, 33 Visayas Avenue, Bgy. Vasra, QC</p>
            </td>
        </tr>
    </table>
@endsection
