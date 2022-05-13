@extends('layouts.emailtemplate')
@section('title', 'Job Application')

@section('content')
    <pre style="font-family: Arial, sans-serif;">{{$data['cover']}}</pre>
    <p style="text-transform:capitalize">{{$data['name']}}</p>

@endsection
