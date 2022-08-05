@extends('layouts.dashboard_customers')

@section('page_title', 'Rent Workspace')

@section('breadcramp_title', 'Rent Workspace')

@section('content')
    <div class="main-content">
        <!-- Stttaaarrrttt hhheeerrreee -->
        <div class="main-content-inner">
            <div class="row">
                <div class="col-lg-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('tainent.store') }}" method="POST" id="rent">
                                @csrf

                                <input type="hidden" value="{{ $workspace->id }}" name="workspace_id">
                                <input type="hidden" value="{{ $workspace->owner->id }}" name="owner_id">
                                <div class="invoice-area">
                                    <div class="invoice-head">
                                        <div class="row">
                                            <div class="iv-left col-6">
                                                <span>Office Rental</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <!-- slider -->
                                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                        class="active"></li>
                                                </ol>
                                                <div class="carousel-inner">
                                                    @foreach ($workspace->gallery as $key => $slider)
                                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                                            <img src="{{ asset('gallery') . '/' . $slider }}"
                                                                class="d-block w-100" alt="...">
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleIndicators"
                                                    role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleIndicators"
                                                    role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>

                                            <div class="invoice-address">
                                                <h3>{{ $workspace->name }}</h3>
                                                <h6>Location:</h6>
                                                <p>{{ $workspace->address }}</p>
                                                <br />
                                                <h6>Short Deiscription:</h6>
                                                <p>
                                                    {{ $workspace->description }}
                                                </p>
                                                <br />
                                                <h6>featers :</h6>
                                                <ul>
                                                    @foreach ($workspace->features as $feature)
                                                        <li>
                                                            <h6 style="display: inline-block">•</h6>
                                                            {{ $feature }}
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="example-date-input" class="col-form-label">Start data</label>
                                        <input class="form-control" name="start_date" type="date" id="start-date" />
                                    </div>
                                    <div>
                                        <label for="example-date-input" class="col-form-label">End data</label>
                                        <input class="form-control" name="end_date" type="date" id="end-date" />
                                    </div>
                                    <div class="invoice-table table-responsive mt-5">
                                        <table class="table table-bordered table-hover text-right">
                                            <thead>
                                                <tr class="text-capitalize">
                                                    <th class="text-center" style="width: 5%"></th>
                                                    <th class="text-left" style="width: 45%; min-width: 130px">
                                                        description
                                                    </th>
                                                    <th>qty</th>
                                                    <th style="min-width: 100px">Unit Cost</th>
                                                    <th>total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center"></td>
                                                    <td class="text-left">price per day</td>
                                                    <td>1 day</td>
                                                    <td id="price">{{ $workspace->price }} </td>
                                                    <td>{{ $workspace->price }} $</td>
                                                </tr>
                                                <tr id="getDays">
                                                    <td class="text-center"></td>
                                                    <td class="text-left">Total days</td>
                                                    <td>X day</td>
                                                    <td>X * 10 $</td>
                                                    <td>- $</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr id="total">
                                                    <td colspan="4">total balance :</td>
                                                    <td>- $</td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="invoice-buttons text-right">
                                        <button type="submit" class="invoice-btn" id="rent-submit">Rent Now</button>
                                    {{-- <a href="{{ route('my-workspaces.index') }} --}}
                                    {{-- {{ route('CreatePayment', $workspace->id) }} --}}
                                    {{-- " class="invoice-btn" --}}
                                        {{-- id="rent-submit">Rent Now</a> --}}
                                    <a href="{{ route('my-workspaces.index') }}" type="button" class="invoice-btn"
                                        id="rent-submit">Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
