@extends('layouts.main')
@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid">
        <h3 class="mt-4">Dashboard</h3>
        <div class="row mt-3">
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card h-100 d-card d-card-border py-xl-3 py-1">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col me-2">
                                <div class="mb-1 d-card-heading">Job Applications</div>
                                <div class="mb-0 d-card-subheading">{{ $countCareers }}</div>
                            </div>
                            <div class="col-auto d-card-icon"><i class="fas fa-briefcase fa-2x"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card h-100 d-card d-card-border py-xl-3 py-1">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col me-2">
                                <div class="mb-1 d-card-heading">Customer Support</div>
                                <div class="mb-0 d-card-subheading">{{ $countSupports }}</div>
                            </div>
                            <div class="col-auto d-card-icon"><i class="fas fa-cog fa-2x"></i></div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card h-100 d-card d-card-border py-xl-3 py-1">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col me-2">
                                <div class="mb-1 d-card-heading">Inquiries</div>
                                <div class="mb-0 d-card-subheading">{{ $countContacts }}</div>
                            </div>
                            <div class="col-auto d-card-icon"><i class="fas fa-info-circle fa-2x"></i></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
