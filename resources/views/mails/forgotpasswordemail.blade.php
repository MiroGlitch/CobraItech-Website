{{-- <a href="http://127.0.0.1:8000/password/reset/{{ $data['token'] }}?email={{ $data['email'] }}">Ahhh</a> --}}
@extends('layouts.emailtemplate')

@section('content')
    <tr>
        <td style="background-color: #fff; padding: 30px 30px 0px; ">
            <img src="{{ $message->embed('assets/img/emailicon2.png') }}" alt="Email Icon" srcset=""
                style="display: block; margin-left: auto; margin-right: auto; max-width: 200px">
        </td>
    </tr>
    <tr>
        <td style="background-color: #fff; padding: 10px 30px 0px; ">
            <h1
                style="margin-top:0;font-size:25px; font-weight:bold;letter-spacing:-0.02em; padding:0px 0px 20px; margin:0px; ">
                Reset Password Notification</h1>

            <p
                style=" font-size: 16px; margin-top:15px; color: #6c757d; font-weight:400; margin-right:auto; margin-left:auto; text-align:justify;">
                <strong> Hello! </strong><br><br> You are receiving this email because we received a password reset request
                for your account.
            </p>
        </td>
    </tr>
    <tr>
        <td style="background-color: #fff; padding: 0px 30px; border-collapse: collapse;">
            <button style="border: none; background-color:#12519E; padding:0.8rem; border-radius: 5px"><a
                    href="http://127.0.0.1:8000/password/reset/{{ $data['token'] }}?email={{ $data['email'] }}"
                    style="text-decoration: none; color:#fff; font-weight:bold;">Reset
                    Password</a></button>
        </td>
    </tr>

    <tr>
        <td style="background-color: #fff; padding: 30px 30px 0px; ">
            <p
                style="font-size: 16px; margin-top:15px; color: #6c757d; font-weight:400; margin-right:auto; margin-left:auto; text-align:justify; padding:0px 0px 20px; margin:0px; ">
                If you did not request a password reset, no further action is required.</p>
            <p
                style=" font-size: 16px; margin-top:15px; color: #6c757d; font-weight:400; margin-right:auto; margin-left:auto; text-align:justify;">
                Thanks, <br> Cobra Itech Services Corporation Team</p>
        </td>
    </tr>
@endsection
