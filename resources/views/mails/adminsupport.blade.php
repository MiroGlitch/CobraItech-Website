@extends('layouts.emailtemplate')

@section('content')
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
                Customer Support</h1>

            <p
                style=" font-size: 16px; margin-top:15px; color: #6c757d; font-weight:400; margin-right:auto; margin-left:auto; text-align:justify;">
                Hi, <br><br> I have an issue that you may be able to assist me with. If you have the time, I
                could use your help to provide solution with regards to my concern. I have provided my details
                and inquiry below.</p>
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
@endsection
