@extends('layouts.dashboard-admin')
@section('page_title', 'Admin')
@section('breadcramp_title', 'workspaces/edit')
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
                                <h4 class="header-title">edit workspace</h4>

                                <form action="{{ route('admin.workspace.update', ['id' => $workspace->id]) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">Name</label>
                                    <input class="form-control" name="name" type="text" value="{{ $workspace->name }}" id="example-text-input">
                                </div>

                                {{-- city --}}

                                {{-- type --}}

                                {{-- price --}}

                                {{-- ** --}}

                                
                                {{-- <div class="form-group">
                                    <label for="example-tel-input" class="col-form-label">Phone Number</label>
                                    <input class="form-control" name="phone_number" type="tel" value="{{ $user->phone_number }}" id="example-tel-input">
                                </div> --}}
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
