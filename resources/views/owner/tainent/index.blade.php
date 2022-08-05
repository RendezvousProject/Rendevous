@extends('layouts.dashboard_owner')

@section('page_title', 'Owner Settings')

@section('breadcramp_title', 'Owner Settings')

@section('content')
    <div class="main-content-inner">
        <div class="row">
            <!-- Progress Table start -->
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">My Desktops</h4>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table table-hover progress-table ">
                                    <thead class="text-uppercase">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Desktop Name</th>
                                        <th scope="col">Start Date</th>
                                        <th scope="col">End Date</th>
                                        <th scope="col">Price per day</th>
                                        <th scope="col">Total price</th>
                                        <th scope="col">action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tainents as $tainent)
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>
                                                {{ $tainent->workspace->name }}
                                            </td>
                                            <td>
                                                {{ $tainent->start_date }}
                                            </td>
                                            <td>
                                                {{ $tainent->end_date }}
                                            </td>
                                            <td>{{ $tainent->per_day }} $</td>
                                            <td>
                                                {{ $tainent->total }}$
                                            </td>
                                            <td>

                                                <ul class="d-flex justify-content-center">
                                                    <li class="mr-3"><a href="#" class="text-secondary"><i
                                                                class="fa fa-edit"></i></a></li>
                                                    <li class="mr-3"><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                                </ul>
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
        </div>
    </div>
@endsection
