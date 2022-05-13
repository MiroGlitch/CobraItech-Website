@extends('layouts.emailtemplate')
@section('title', 'Job Application')

@section('content')
    <p class=" fw-bold" style="font-weight: 700;">Dear Hiring Manager,</p>
    <p class="card-text">I am <span style="text-transform: capitalize">{{$data['name']}}</span> and I would like to express my
        sincere desire to apply for {{$data['job']}} in Cobra
        Itech Services Corporation. </p>
    <p>I have also attached my resume for your reference. If you have any inquiries, you can contact me through this email,
        {{$data['email']}}.</p>
    <p>Thank you for your time and consideration.</p>
    <br>
    <p>Sincerly,</p>
    <p style="text-transform:capitalize">{{$data['name']}}</p>

@endsection
