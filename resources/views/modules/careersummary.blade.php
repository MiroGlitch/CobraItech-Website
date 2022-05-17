@extends('layouts.main')
@section('title', 'Job Applications')

@section('content')
    <div class="container-fluid">
        <h3 class="mt-4 mb-3">Job Applications</h3>

        <div class="card d-card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Position</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                        @foreach ($careers as $career)
                            <tr>
                                <td>{{ \Carbon\Carbon::parse($career->created_at)->diffForHumans() }}</td>
                                <td>{{ $career->name }}</td>
                                <td>{{ $career->email }}</td>
                                <td>{{ $career->job }}</td>
                                <td>
                                @if ($career->status == 0)
                                    <span class="badge bg-danger">Not yet assisted</span>
                                @else
                                    <span class="badge bg-success">Assisted</span>
                                @endif
                                </td>
                                <td>
                                    <!-- data-bs-target="#id{$support->id}" === id in modal -->
                                    <button class="btn-circle btn-sm bg-primary" data-bs-toggle="modal"
                                        data-bs-target="#viewModal"> <i class="fas fa-eye text-white"></i></button>
                                @if ($career->status == 0)
                                    <a href="activate-career/{{ $career->id }}" style="text-decoration: none;" class="btn-circle btn-sm bg-success"> <i
                                            class="fas fa-check text-white"></i></a>
                                @else
                                    <a href="deactivate-career/{{ $career->id }}" style="text-decoration: none;" class="btn-circle btn-sm bg-warning"> <i
                                            class="fas fa-times text-white"></i></a>
                                @endif
                                </td>

                            </tr>

                            <!-- Modal -->
                            <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="row mb-3">
                                                    <div class="col-3"> <strong>ID</strong></div>
                                                    <div class="col-9">{{ $career->id }}</div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-3"> <strong>Date</strong></div>
                                                    <div class="col-9">{{ date('M d, Y \a\t h:i A'), strtoTime($career->created_at) }}</div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-3"> <strong>Name</strong></div>
                                                    <div class="col-9">{{ $career->name }}</div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-3"> <strong>Email</strong></div>
                                                    <div class="col-9">{{ $career->email }}</div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-3"> <strong>Position</strong></div>
                                                    <div class="col-9">{{ $career->job }}</div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-3"> <strong>Message</strong></div>
                                                    <div class="col-9" style="text-align: justify">{{ $career->cover }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- End of Modal -->
                        @endforeach
                        </tbody>

                    </table>
                </div>

            </div>
        </div>

    </div>


@endsection
