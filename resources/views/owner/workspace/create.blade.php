@extends('layouts.dashboard_owner')

@section('page_title', 'Add Workspace')

@section('breadcramp_title', 'Add Workspace')

@section('content')


    <!-- main content area start -->
    <div class="main-content">

        <!-- form start here -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Add WorkSpace</h4>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('workspace.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        {{-- Workspace Name --}}
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">WorkSpace Name</label>
                            <input class="form-control" type="text" name="name" placeholder="Name here"
                                id="example-text-input">
                        </div>

                        {{-- Workspace Description --}}
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Description</span>
                            </div>
                            <textarea class="form-control" name="description" aria-label="With textarea"></textarea>
                        </div>

                        {{-- Workspace - City --}}
                        <div class="form-group">
                            <label  class="col-form-label">City</label>
                            <select style="height: 3rem" class="form-control" name="city_id">
                                <option>select city name</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">
                                        {{ $city->city_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        {{-- Workspace - Location --}}
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">WorkSpace Location</label>
                            <input class="form-control" type="text" name="location" placeholder="Location here"
                                id="example-text-input">
                        </div>

                        {{-- Workspace Type --}}
                        <div class="form-group">
                            <label class="col-form-label">type</label>
                            <select style="height: 3rem" class="form-control" name="type" >
                                <option>select workSpace type</option>
                                <option>Private Office</option>
                                <option>Public Office</option>
                                <option>Workspace</option>
                                <option>Skype Room</option>
                            </select>
                        </div>

                        {{-- Workspace Price --}}
                        <div class="input-group">
                            <input type="text" class="form-control" name="price" placeholder="Price/Month"
                                aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append">
                                <span class="input-group-text">$</span>
                                <span class="input-group-text">0.00</span>
                            </div>
                        </div>

                        {{-- Workspace size --}}
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">WorkSpace Width - in meter</label>
                            <input class="form-control" type="text" name="width" placeholder="Width here"
                                id="example-text-input">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">WorkSpace height  - in meter</label>
                            <input class="form-control" type="text" name="height" placeholder="Height here"
                                id="example-text-input">
                        </div>

                        <br>

                        {{-- Workspace Gallary --}}
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" accept="image/*" name="gallery[]" class="custom-file-input" id="inputGroupFile01" multiple>
                                <label class="custom-file-label" for="inputGroupFile01">Workspace Image</label>
                            </div>
                        </div>

                        {{-- Workspace - Features --}}
                        <div>
                            <label class="col-form-label">Available features :</label>

                            @foreach ($features as $feature)
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="features[]"
                                        id="{{ $feature->id }}" value="{{ $feature->feature_name }}">
                                    <label class="custom-control-label" for="{{ $feature->id }}">
                                        {{ $feature->feature_name }}
                                    </label>
                                </div>
                            @endforeach
                        </div>

                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                    </form>
                </div>



            </div>
        </div>
    </div>
    <!-- form end here-->


@endsection()
