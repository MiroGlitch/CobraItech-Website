@extends('layouts.main')
@section('title', 'Job Applications')

@section('content')
    <div class="container-fluid">
        <h3 class="mt-4 mb-3">Job Applications</h3>

        <div class="card d-card">
            <div class="card-body">
                <div class="table-responsive py-3">
                    <table class="table table-borderless" id="myTable">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Position</th>
                                <th>Resume/CV</th>
                                <th>Status</th>
                                <th>Application</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($careers as $career)
                                <tr>
                                    <td>{{ \Carbon\Carbon::parse($career->created_at)->diffForHumans() }}</td>
                                    <td>{{ $career->name }}</td>
                                    <td>{{ $career->email }}</td>
                                    <td>{{ $career->job }}</td>
                                    <td><a href="uploads/{{ $career->cv }}" target="_blank">Link</a></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn dropdown-toggle shadow-none p-0" type="button"
                                                id="statusDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                @if ($career->status == 0)
                                                    <span class="badge bg-danger">Not yet assisted</span>
                                                @else
                                                    <span class="badge bg-success">Assisted</span>
                                                @endif

                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="statusDropdown">
                                                <li>
                                                    <h6 class="dropdown-header">Actions:</h6>
                                                </li>
                                                <li>
                                                    @if ($career->status == 0)
                                                    <form action="{{route('activate.career')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" id="id" value="{{ $career->id }}">
                                                        <button class="dropdown-item">Assisted</button>
                                                    </form>
                                                    @else
                                                    <form action="{{route('deactivate.career')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" id="id" value="{{ $career->id }}">
                                                        <button class="dropdown-item">Not yet assisted</button>
                                                    </form>
                                                    @endif
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        @if ($career->accept == 1)
                                            <span class="badge bg-success">Accepted</span>
                                        @else
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle shadow-none p-0" type="button"
                                                    id="acceptDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                    @if ($career->accept == 0)
                                                        <span class="badge bg-danger">Not yet accepted</span>
                                                    @else
                                                        <span class="badge bg-success">Accepted</span>
                                                    @endif

                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="acceptDropdown">
                                                    <li>
                                                        <h6 class="dropdown-header">Actions:</h6>
                                                    </li>
                                                    <li>
                                                        @if ($career->accept == 0)
                                                            <form action="/activate-application/{{ $career->id }}"
                                                                method="post">
                                                                @csrf
                                                                <button class="dropdown-item accept_confirm"
                                                                    type="submit">Accepted</button>

                                                            </form>
                                                        @endif
                                                    </li>
                                                </ul>
                                            </div>
                                        @endif
                                    </td>

                                    <td class="d-flex align-items-center">
                                        <!-- data-bs-target="#id{$support->id}" === id in modal -->
                                        <button class="btn-circle btn-sm bg-primary" data-bs-toggle="modal"
                                            data-bs-target="#id{{ $career->id }}"> <i class="fas fa-eye text-white"></i></button>
                                    </td>

                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="id{{ $career->id }}" tabindex="-1" aria-labelledby="viewModalLabel"
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
                                                        <div class="col-9">
                                                            {{ date('M d, Y \a\t h:i A'), strtoTime($career->created_at) }}
                                                        </div>
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
                                                        <div class="col-9" style="text-align: justify">
                                                            {{ $career->cover }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- End of Modal -->

                            @empty
                                <tr>
                                    <td colspan="8">
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
