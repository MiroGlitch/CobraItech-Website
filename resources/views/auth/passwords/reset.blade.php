@extends('layouts.auth')
@section('title', 'Reset Password')
@section('content')

    <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="card border-0 login-card">
            <div class="card-body">
                <div class="row d-flex justify-content-center">
                    <div class="login-header">
                        <h1 class="page-heading">Reset Password </h1>
                        <p class="page-subtitle mb-4">Enter a new password for your account</p>
                    </div>

                    <div class="col-sm">
                        {{-- <form method="POST" action="{{ route('password.update') }}"> --}}
                        <form method="POST" action="">
                            @csrf
                            {{-- <input type="hidden" name="token" value="{{ $token }}"> --}}

                            <div class="form-group mb-3 input-form d-flex justify-content-start flex-column">
                                <input id="email" type="email"
                                    class="form-control box-input-form  @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required="" autocomplete="email" autofocus=""
                                    placeholder="Email">
                                <i class="fas fa-envelope"></i>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
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

                            <div class="form-group input-form d-flex justify-content-start flex-column mb-2">

                                <input id="password-confirm" type="password" class="form-control box-input-form"
                                    name="password_confirmation" required="" autocomplete="current-password"
                                    placeholder="Confirm Password">
                                <i class="fas fa-lock"></i>
                            </div>

                            <button type="submit" class="btn w-100 text-white mt-4 " style="background-color:#12519e;">Reset
                                Password</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
