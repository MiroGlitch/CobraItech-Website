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
                            <tr>
                                <td>asd</td>
                                <td>asd</td>
                                <td>asd</td>
                                <td>asd</td>
                                <td> <span class="badge bg-danger">Not yet assisted</span>
                                    <span class="badge bg-success">Assisted</span>
                                </td>
                                <td>
                                    <!-- data-bs-target="#id{$support->id}" === id in modal -->
                                    <button class="btn-circle btn-sm bg-primary" data-bs-toggle="modal"
                                        data-bs-target="#viewModal"> <i class="fas fa-eye text-white"></i></button>

                                    <button class="btn-circle btn-sm bg-success"> <i
                                            class="fas fa-check text-white"></i></button>
                                    <button class="btn-circle btn-sm bg-warning"> <i
                                            class="fas fa-times text-white"></i></button>
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
                                                    <div class="col-9"></div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-3"> <strong>Date</strong></div>
                                                    <div class="col-9">

                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-3"> <strong>Name</strong></div>
                                                    <div class="col-9"></div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-3"> <strong>Email</strong></div>
                                                    <div class="col-9"></div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-3"> <strong>Subject</strong></div>
                                                    <div class="col-9"></div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-3"> <strong>Message</strong></div>
                                                    <div class="col-9" style="text-align: justify">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- End of Modal -->
                        </tbody>

                    </table>
                </div>

            </div>
        </div>

    </div>


@endsection
