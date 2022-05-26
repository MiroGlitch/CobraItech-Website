@extends('layouts.main')
@section('title', 'Inquiries')

@section('content')
    <div class="container-fluid">
        <h3 class="mt-4 mb-3">Inquiries</h3>

        <div class="card d-card">
            <div class="card-body">
                <div class="table-responsive py-3">
                    <table class="table table-borderless" id="myTable">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($contacts as $contact)
                                <tr>
                                    <td>{{ \Carbon\Carbon::parse($contact->created_at)->diffForHumans() }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->subject }}</td>
                                    <td>
                                        @if ($contact->status == 0)
                                            <span class="badge bg-danger">Not yet assisted</span>
                                        @else
                                            <span class="badge bg-success">Assisted</span>
                                        @endif
                                    </td>
                                    <td>
                                        <!-- data-bs-target="#id{$support->id}" === id in modal -->
                                        <button class="btn-circle btn-sm bg-primary" data-bs-toggle="modal"
                                            data-bs-target="#id{{ $contact->id }}"> <i class="fas fa-eye text-white"></i></button>
                                        @if ($contact->status == 0)
                                            <form action="{{route('activate.contact')}}" method="post" style="display: inline">
                                                @csrf
                                                <input type="hidden" name="id" id="id" value="{{ $contact->id }}">
                                                <button class="btn-circle btn-sm bg-success"> <i
                                                    class="fas fa-check text-white"></i></button>
                                            </form>
                                        @else
                                            <form action="{{route('deactivate.contact')}}" method="post" style="display: inline">
                                                @csrf
                                                <input type="hidden" name="id" id="id" value="{{ $contact->id }}">
                                                <button class="btn-circle btn-sm bg-warning"> <i
                                                        class="fas fa-times text-white"></i></a>
                                            </form>
                                        @endif
                                    </td>

                                </tr>


                                <!-- Modal -->
                                <div class="modal fade" id="id{{ $contact->id }}" tabindex="-1" aria-labelledby="viewModalLabel"
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
                                                        <div class="col-9">{{ $contact->id }}</div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-3"> <strong>Date</strong></div>
                                                        <div class="col-9">
                                                            {{ date('M d, Y \a\t h:i A'), strtoTime($contact->created_at) }}
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-3"> <strong>Name</strong></div>
                                                        <div class="col-9">{{ $contact->name }}</div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-3"> <strong>Email</strong></div>
                                                        <div class="col-9">{{ $contact->email }}</div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-3"> <strong>Subject</strong></div>
                                                        <div class="col-9">{{ $contact->subject }}</div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-3"> <strong>Message</strong></div>
                                                        <div class="col-9" style="text-align: justify">
                                                            {{ $contact->message }}
                                                        </div>
                                                    </div>
                                                    <form action="{{ route('reply.contact') }}" method="post" role="form" class="php-email-form">
                                                        @csrf
                                                        <input type="hidden" name="email" id="email" value="{{ $contact->email }}">
                                                        <input type="hidden" name="subject" id="subject" value="{{ $contact->subject }}">
                                                        <div class="form-group mt-3">
                                                            <textarea class="form-control" name="reply" id="reply" rows="3" placeholder="Message"></textarea>
                                                        </div><br>
                                                        <div class="d-grid gap-2 col-6 mx-auto">
                                                            <button class="btn text-white" style="background-color: #12519E;"
                                                                id="reply-btn">Reply</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End of Modal -->

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
