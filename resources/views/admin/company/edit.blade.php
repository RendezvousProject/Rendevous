@extends('layouts.dashboard-admin')
@section('page_title', 'Admin')
@section('breadcramp_title', 'companies/edit')
@section('content')
     <!--top page start-->
     <div class="main-content-inner">
        <div class="row">
            <div class="col-lg-6 col-ml-12">
                <div class="row">
                    <!-- Textual inputs start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">edit owner</h4>

                                <form action="{{ route('company.update', ['id' => $owner->id]) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">First Name</label>
                                    <input class="form-control" name="first_name" type="text" value="{{ $owner->first_name }}" id="example-text-input">
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">Last Name</label>
                                    <input class="form-control" name="last_name" type="text" value="{{ $owner->last_name }}" id="example-text-input">
                                </div>
                                <div class="form-group">
                                    <label for="example-email-input" class="col-form-label">Email</label>
                                    <input class="form-control" name="email" type="email" value="{{ $owner->email }}" id="example-email-input">
                                </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">Company Name</label>
                                    <input class="form-control" name="company_name" type="text" value="{{ $owner->company_name }}" id="example-text-input">
                                </div>
                                <div class="form-group">
                                    <label for="example-tel-input" class="col-form-label">Phone Number</label>
                                    <input class="form-control" name="phone_number" type="tel" value="{{ $owner->phone_number }}" id="example-tel-input">
                                </div>
                                {{-- <div class="form-group">
                                    <label for="inputPassword" class="">Password</label>
                                    <input type="password" name="password" class="form-control" value=" 864531"id="inputPassword">
                                </div> --}}

                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Edit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Textual inputs end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end --}}

@endsection
