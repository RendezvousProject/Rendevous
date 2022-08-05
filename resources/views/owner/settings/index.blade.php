@extends('layouts.dashboard_owner')

@section('page_title', 'Workspace')
@section('breadcramp_title', 'settings')
@section('content')
    <div class="container rounded bg-white mb-5">
        <div class="row">
            <div class="col-md-3 mb-3 ">
                <div class="card">
                    <div class="card-body ">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="{{ Auth::guard(session('guardName'))->user()->image }}" alt="Admin"
                                class="rounded-circle" width="186">
                            <div class="mt-3">
                                <h1>
                                    {{ $owner->company_name }}
                                </h1>
                                <p class="text-secondary mb-1">{{ $owner->first_name . ' ' . $owner->last_name }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card mb-3">
                    <div class="card-body">
                        {{-- @csrf --}}
                        <input type="hidden" name="_method" value="put">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{-- {{$this->owner}} --}}
                                {{ $owner->first_name . ' ' . $owner->last_name }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ auth()->guard(session('guardName'))->user()->email }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $owner->phone_number }}
                            </div>
                        </div>
                        <hr>

                        {{-- <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">City</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">

                                {{$owner->city->city_name}}
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
                    {{-- {{dd($owner->phone_number)}} --}}

                    <form action="{{ route('owner.update', Auth::guard(session('guardName'))->user()->id) }}"
                        method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="_method" value="put">
                        <div class="row mt-md-2">
                            <div class="col-md-12"><label class="labels">First Name</label>
                                <input type="text" name="fname"
                                    class="form-control @error('first_name') is-invalid @enderror"
                                    value="{{ $owner->first_name }}">
                                @error('first_name')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                        </div>
                        <div class="row mt-md-2">
                            <div class="col-md-12"><label class="labels">Last Name</label>
                                <input type="text" name="lname"
                                    class="form-control @error('last_name') is-invalid @enderror"
                                    value="{{ $owner->last_name }}">
                                @error('last_name')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12 mt-2"><label class="labels">Mobile Number</label><input type="text"
                                    name="mobile" class="form-control @error('phone_number') is-invalid @enderror"
                                    value="{{ $owner->phone_number }}">
                                @error('phone_number')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 mt-2">
                                <label class="labels">City </label>
                                <select class="form-control @error('city') is-invalid @enderror" name="city">
                                    @foreach($cities as $city)
                                        <option value="{{ $city->id }}" @if($city->id == $owner->city->id) selected @endif>
                                            {{ $city->city_name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('city')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 mt-2"><label class="labels">Company Name </label><input type="text"
                                    name="company_name" class="form-control" value="{{ $owner->company_name }}">
                            </div>
                            <div class="col-md-12 mt-2"><label class="labels">Email address</label><input type="text"
                                    name="email" class="form-control" value="{{ $owner->email }}">
                            </div>
                            <div class="col-md-12 mt-2"><label class="labels">photo</label><input name="photo"
                                    type="file" class="form-control" value="Show its primary address">
                            </div>
                        </div>
                        <div class=" row col-6 mt-3">
                            <a href="#">Reset Password</a>
                        </div>
                        <div class="mt-3 text-center"><button class="btn btn-primary profile-button" type="submit">Save
                                Profile</button></div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

@endsection
