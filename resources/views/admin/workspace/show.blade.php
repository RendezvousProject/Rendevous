@extends('layouts.dashboard-admin')
@section('page_title', 'Admin')
@section('breadcramp_title', 'workspace')
@section('content')

<!-- Stttaaarrrttt hhheeerrreee -->
<div class="main-content-inner">
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <form action="
                    {{-- {{ route('tainent.store') }} --}}
                    " method="POST" id="rent">
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
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                @foreach($workspace->gallery as $key => $slider)
                                                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                                        <img src="{{ asset('gallery') . '/' . $slider }}" class="d-block w-100"  alt="...">
                                                    </div>
                                                @endforeach
                                            </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>

                                    <div class="invoice-address">
                                        <h3>{{ $workspace->name }}</h3>
                                        <h6>Location:</h6>
                                        <p>{{ $workspace->address }}</p>
                                        <br/>
                                        <h6>Short Deiscription:</h6>
                                        <p>
                                            {{ $workspace->description }}
                                        </p>
                                        <br/>
                                        <h6>featers :</h6>
                                        <ul>
                                            @foreach($workspace->features as $feature)
                                            <li>
                                                <h6 style="display: inline-block">•</h6>
                                                {{ $feature }}
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="invoice-buttons text-center ">
                            <a href="{{ route('admin.workspace.index') }}" class="invoice-btn">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
