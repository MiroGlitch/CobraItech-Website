@extends('layouts.auth')
@section('title', 'Confirm Password')
@section('content')

    <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="card border-0 login-card">
            <div class="card-body">
                <div class="row d-flex justify-content-center">
                    <div class="login-header">
                        <h1 class="page-heading">Confirm Password </h1>
                        <p class="page-subtitle mb-4">Please confirm your password before continuing</p>
                    </div>

                    <div class="col-sm">
                        {{-- <form method="POST" action="{{ route('password.confirm') }}"> --}}
                        <form method="POST" action="">
                            @csrf
                            <div class="form-group input-form d-flex justify-content-start flex-column mb-2">

                                <input id="password" type="password"
                                    class="form-control box-input-form  @error('password') is-invalid @enderror"
                                    name="password" required="" autocomplete="current-password" placeholder="Password">
                                <i class="fas fa-lock"></i>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <a class="pw-link d-flex justify-content-end" href="{{ route('password.request') }}">Forgot
                                your
                                password?</a>
                            <button type="submit" class="btn w-100 text-white mt-4 "
                                style="background-color:#12519e;">Confirm Password</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
