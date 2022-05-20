@extends('layouts.main')
@section('title', 'Customer Support')

@section('content')
    <div class="container-fluid">
        <h3 class="mt-4 mb-3">Customer Support</h3>

        <div class="card d-card">
            <div class="card-body">
                <div class="table-responsive py-3">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($supports as $support)
                                <tr>
                                    <td>
                                        {{ \Carbon\Carbon::parse($support->created_at)->diffForHumans() }}</td>
                                    <td>{{ $support->name }}</td>
                                    <td>{{ $support->email }}</td>
                                    <td>{{ $support->category }}</td>
                                    <td>
                                        @if ($support->status == 0)
                                            <span class="badge bg-danger">Not yet assisted</span>
                                        @else
                                            <span class="badge bg-success">Assisted</span>
                                        @endif
                                    </td>

                                    <td>
                                        <button class="btn-circle btn-sm bg-primary" data-bs-toggle="modal"
                                            data-bs-target="#id{{ $support->id }}"> <i
                                                class="fas fa-eye text-white"></i></button>
                                        @if ($support->status == 0)
                                            <form action="{{route('activate.support')}}" method="post" style="display: inline">
                                                @csrf
                                                <input type="hidden" name="id" id="id" value="{{ $support->id }}">
                                                <button class="btn-circle btn-sm bg-success"> <i
                                                        class="fas fa-check text-white"></i></button>
                                            </form>
                                        @else
                                            <form action="{{route('deactivate.support')}}" method="post" style="display: inline">
                                                @csrf
                                                <input type="hidden" name="id" id="id" value="{{ $support->id }}">
                                                <button class="btn-circle btn-sm bg-warning"> <i
                                                        class="fas fa-times text-white"></i></button>
                                            </form>
                                        @endif

                                    </td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="id{{ $support->id }}" tabindex="-1"
                                    aria-labelledby="viewModalLabel" aria-hidden="true">
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
                                                        <div class="col-9"> {{ $support->id }}</div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-3"> <strong>Date</strong></div>
                                                        <div class="col-9">
                                                            {{ date('M d, Y \a\t h:i A'), strtoTime($support->created_at) }}
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-3"> <strong>Name</strong></div>
                                                        <div class="col-9"> {{ $support->name }}</div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-3"> <strong>Email</strong></div>
                                                        <div class="col-9"> {{ $support->email }}</div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-3"> <strong>Contact Number</strong></div>
                                                        <div class="col-9"> {{ $support->number }}</div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-3"> <strong>Category</strong></div>
                                                        <div class="col-9"> {{ $support->category }}</div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-3"> <strong>Issue</strong></div>
                                                        <div class="col-9" style="text-align: justify">
                                                            {{ $support->issue }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Modal -->
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

    </div>
@endsection
