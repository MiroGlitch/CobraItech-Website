@extends('layouts.main')
@section('title', 'Job Applications')

@section('content')
    <div class="container-fluid">
        <h3 class="mt-4 mb-3">Account</h3>

        <div class="card d-card" style="width:40rem;">
            <div class="card-body">
                <form action="">
                    <div class="mb-3">
                        <label class="form-label"> <strong>Name </strong> </label>
                        <input type="text" class="form-control" id="" value="{{ $user->name }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> <strong>Email </strong> </label>
                        <input type="text" class="form-control" id="" value="{{ $user->email }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> <strong>Current Password </strong> </label>
                        <input type="password" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> <strong>New Password </strong> </label>
                        <input type="password" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> <strong>Confirm Password </strong> </label>
                        <input type="password" class="form-control" id="">
                    </div>

                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>

    </div>


@endsection
