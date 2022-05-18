@extends('layouts.emailtemplate')

@section('content')
    <table style="text-align:center; margin-right:auto; margin-left:auto; border-spacing:0px;">
        <tr>
            <td style="background-color: #fff; padding: 30px 30px 0px; ">
                <img src="{{ $message->embed('assets/img/emailicon1.png') }}" alt="Email Icon" srcset=""
                    style="display: block; margin-left: auto; margin-right: auto; max-width: 200px">
            </td>
        </tr>
        <tr>
            <td style="background-color: #fff; padding: 10px 30px 0px; ">
                <h1
                    style="margin-top:0;font-size:25px; font-weight:bold;letter-spacing:-0.02em; padding:0px 0px 20px; margin:0px; ">
                    Congratulations!</h1>

                <p
                    style=" font-size: 16px; margin-top:15px; color: #6c757d; font-weight:400; margin-right:auto; margin-left:auto; text-align:justify;">
                    Hi, {{ $data['name'] }}! <br><br> On behalf of Cobra iTech Services Corporation, we are elated to
                    inform you that you have
                    been selected to be part of our growing team. Your skills and experience will be an ideal fit for our
                    company. To view the the terms and conditions, please see the attached
                    file below.
                </p>
            </td>
        </tr>
        <tr>
            <td style="background-color: #fff; padding: 25px 30px 0px; ">
                <p
                    style="font-size: 16px; margin-top:15px; color: #6c757d; font-weight:400; margin-right:auto; margin-left:auto; text-align:justify; padding:0px 0px 20px; margin:0px; ">
                    We look forward to having you on board and we are hopeful
                    that this association will be mutually beneficial to both the parties.Once you accept the offer, I will
                    send you an email to guide you through the onboarding process. If you have any
                    other queries, please feel free to write to this email.</p>
                <p
                    style="font-size: 16px; margin-top:15px; color: #6c757d; font-weight:400; margin-right:auto; margin-left:auto; text-align:justify; padding:0px 0px 20px; margin:0px; ">
                    Congratulations and Welcome to the Team!</p>
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
