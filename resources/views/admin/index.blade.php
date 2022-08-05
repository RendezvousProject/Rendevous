@extends('layouts.dashboard-admin')
@section('page_title', 'Workspace')
@section('breadcramp_title', 'Workspace')
@section('content')
            <!--top page start-->
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-4 mt-3 mb-3">
                        <div class="card">
                            <div class="seo-fact sbg1">
                                <div class="p-4 d-flex justify-content-between align-items-center">
                                    <div class="seofct-icon"><i class="ti-list-ol"></i> Num Of Owners</div>
                                    <h2>{{ count($owners) }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-md-3 mb-3">
                        <div class="card">
                            <div class="seo-fact sbg2">
                                <div class="p-4 d-flex justify-content-between align-items-center">
                                    <div class="seofct-icon"><i class="ti-list-ol"></i> Num Of Customers </div>
                                    <h2>{{ count($users) }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-md-3 mb-3">
                        <div class="card">
                            <div class="seo-fact sbg3">
                                <div class="p-4 d-flex justify-content-between align-items-center">
                                    <div class="seofct-icon"><i class="ti-bookmark-alt"></i> WorkSpace rented </div>
                                    <h2>{{ count($workspaces->where('status', 'Booked')) }}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- top page end -->

            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">New Rentals</h4>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table table-hover progress-table text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Company Name</th>
                                            <th scope="col">Tenant Name</th>
                                            <th scope="col">Workspace Name</th>
                                            <th scope="col">Start Date</th>
                                            <th scope="col">End Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tainants as $tainant)

                                        <tr>
                                            <th scope="row">{{ $tainant->id }}</th>
                                            <td>{{ $tainant->owner->company_name }}</td>
                                            <td>{{ $tainant->user->first_name . ' ' .  $tainant->user->last_name}}</td>
                                            <td>
                                                {{ $tainant->workspace->name }}
                                            </td>
                                            <td>{{ $tainant->start_date }}</td>
                                            <td>
                                                {{ $tainant->end_date }}
                                            </td>
                                        </tr>

                                            @endforeach
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



@endsection
