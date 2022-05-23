@extends('layouts.main')
@section('title', 'Users Management')

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center">

            <h3 class="mt-4 mb-3">Users Management</h3>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUser">Add User</button>
        </div>

        <div class="card d-card">
            <div class="card-body">
                <div class="table-responsive py-3">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if ($user->user_role == 1)
                                            admin
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{route('users.delete')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" id="id" value="{{ $user->id }}">
                                            <button class="btn-circle btn-sm bg-danger"><i
                                                class="fas fa-trash text-white"></i></button></td>
                                        </form>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7">
                                        <div class="card-header border-0 text-center">No data available in table</div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>

                    </table>
                </div>

            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addUserLabel">Add User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('users.add') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Password</label>
                                <input type="password" class="form-control" id="pwd" name="pwd">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="cpwd" name="cpwd">
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="add-btn">Add User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
