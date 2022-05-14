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
                    Thank you for applying!</h1>

                <p
                    style=" font-size: 16px; margin-top:15px; color: #6c757d; font-weight:400; margin-right:auto; margin-left:auto; text-align:justify;">
                    Hi, {{ $data['name'] }} ! <br><br> Thank you for applying to our company. We are always seeking for
                    new ideas and talent and
                    we're interested on how will you able to contribute your skills to our company. We will be reviewing
                    your application first and contact you
                    for an interview if your skills are a match.
                </p>
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
