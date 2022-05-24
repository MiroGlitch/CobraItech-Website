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
                
                <p
                    style=" font-size: 16px; margin-top:15px; color: #6c757d; font-weight:400; margin-right:auto; margin-left:auto; text-align:justify;">
                    {{ $data['message'] }}
                </p>
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
