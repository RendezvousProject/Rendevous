@extends('layouts.dashboard_customers')
@section('page_title', 'Setting')
@section('breadcramp_title', 'Setting')


@section('content')


    <div class="container rounded bg-white mb-5">
        <div class="row">
            <div class="col-md-3 mb-3 ">
                <div class="card">
                    <div class="card-body ">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="{{ Auth::guard(session('guardName'))->user()->image }}" alt="customer"
                                class="rounded-circle" width="186">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $customer->first_name . ' ' . $customer->last_name }}

                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $customer->email }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $customer->phone_number }}
                            </div>
                        </div>
                        <hr>

                        {{-- <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                         {{ $customer->city->city_name }}
                                    </div>
                                </div> --}}

                    </div>
                </div>
            </div>
            <div class="col-md-4 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center m-2b">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <form action="{{ route('customer.update', ['id' => $customer->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mt-md-2">
                            <div class="col-md-12"><label class="labels">First Name</label><input type="text"
                                    class="form-control" placeholder="" value="{{ $customer->first_name }}"></div>
                        </div>
                        <div class="row mt-md-2">
                            <div class="col-md-12"><label class="labels">Last Name</label><input type="text"
                                    class="form-control" placeholder="" value="{{ $customer->last_name }}"></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12 mt-2"><label class="labels">Mobile Number</label><input type="text"
                                    class="form-control" placeholder="" value="{{ $customer->phone_number }}">
                            </div>
                            {{-- <div class="col-md-12 mt-2"><label class="labels">Address </label><input type="text"
                                        class="form-control" placeholder="{{$customer->}}" value=""></div> --}}
                            <div class="col-md-12 mt-2"><label class="labels">Email address</label><input type="text"
                                    class="form-control" placeholder="" value="{{ $customer->email }}">
                            </div>
                            {{-- img --}}
                            <div class="col-md-12 mt-2">
                                <label class="labels">Avatar</label>
                                <input type="file" name="avatar" class="form-control"
                                    placeholder="Show its primary address">
                            </div>
                        </div>
                        <div class=" row col-6 mt-3">
                            <a href="#">Reset Password</a>
                        </div>
                        
                        <div class="mt-3 text-center"><button class="btn btn-primary profile-button" type="submit">Save
                                Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
