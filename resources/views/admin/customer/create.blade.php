@extends('layouts.dashboard-admin')
@section('page_title', 'Admin')
@section('breadcramp_title', 'customer/add')
@section('content')
    <!--top page start-->
    <div class="main-content-inner">
        <div class="row">
            <!-- Progress Table start -->
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Add customer</h4>

                                        <form action="{{ route('customer.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">First Name</label>
                                                <input class="form-control" name="first_name" type="text"
                                                    id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-form-label">Last Name</label>
                                                <input class="form-control" name="last_name" type="text"
                                                    id="example-text-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email-input" class="col-form-label">Email</label>
                                                <input class="form-control" name="email" type="email"
                                                    id="example-email-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-tel-input" class="col-form-label">Phone Number</label>
                                                <input class="form-control" name="phone_number" type="tel"
                                                    id="example-tel-input">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword" class="">Password</label>
                                                <input type="password" name="password" class="form-control"
                                                    id="inputPassword">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword2">Confirm Password</label>
                                                <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword2">

                                            </div>

                                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
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
