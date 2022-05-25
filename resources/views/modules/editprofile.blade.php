@extends('layouts.main')
@section('title', 'Job Applications')

@section('content')
    <div class="container-fluid">
        <h3 class="mt-4 mb-3">Account</h3>

        <div class="card d-card" style="width:40rem;">
            <div class="card-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">	
                        <strong>{{ $message }}</strong>
                    </div>
                @elseif ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">	
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <form action="{{ route('change.password') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{ $user->id }}">
                    <div class="mb-3">
                        <label class="form-label"> <strong>Name </strong> </label>
                        <input type="text" class="form-control" id="name" value="{{ $user->name }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> <strong>Email </strong> </label>
                        <input type="text" class="form-control" id="email" value="{{ $user->email }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> <strong>Current Password </strong> </label>
                        <input type="password" class="form-control" name="currpwd" id="currpwd">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> <strong>New Password </strong> </label>
                        <input type="password" class="form-control" name="npwd" id="npwd">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> <strong>Confirm Password </strong> </label>
                        <input type="password" class="form-control" name="cpwd" id="cpwd">
                    </div>

                    <button type="submit" class="btn btn-primary" id="change-btn">Save Changes</button>
                </form>
            </div>
        </div>

    </div>


@endsection
