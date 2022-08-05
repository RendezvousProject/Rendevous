@extends('layouts.dashboard_owner')

@section('page_title', 'Workspace')
@section('breadcramp_title', 'Workspace')
@section('content')

    <div class="main-content-inner">
        <div class="row">
            <!-- Progress Table start -->
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">My Workspaces</h4>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table table-hover progress-table text-center">
                                    <thead class="text-uppercase">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Size</th>
                                            <th scope="col">City</th>
                                            <th scope="col">status</th>
                                            <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($workspaces as $workspace)
                                            <tr>
                                                <th scope="row">{{ $workspace->id }}</th>
                                                {{-- Name --}}
                                                <td>{{ $workspace->name }}</td>
                                                {{-- image --}}
                                                <td>
                                                    @for ($i = 0; $i < count($workspace->gallery); $i++)

                                                        <img src="{{ asset('gallery') . '/' . $workspace->gallery[$i] }}"
                                                            style="height: 100px; width: 100px;">
                                                    @endfor


                                                </td>
                                        {{-- Price --}}
                                        <td>{{ $workspace->price }}</td>
                                        {{-- Size --}}
                                        <td>{{ $workspace->width * $workspace->height }}</td>
                                        {{-- City --}}
                                        <td>{{ $workspace->city->city_name }}</td>
                                        <td>
                                            @if ($workspace->status == 'Booked')
                                                <span class="status-p bg-danger">
                                                    booked
                                                </span>
                                            @else
                                                <span class="status-p bg-success">
                                                    available
                                                </span>
                                            @endif
                                        </td>
                                        <td>
                                            <ul class="d-flex justify-content-center">
                                                <li class="mr-3">
                                                    <div class="dropdown col-lg-6 col-md-4 col-sm-6">
                                                        <i class="ti-arrow-down text-primary" data-toggle="dropdown"></i>
                                                        <div class="dropdown-menu">
                                                            @foreach ($workspace->features as $feature)
                                                                <a class="dropdown-item">{{ $feature }}</a>
                                                            @endforeach
                                                        </div>
                                                </li>
                                                <li @if (Request::is('owner/workspace/edit')) class="active" @endif
                                                    class="mr-3">
                                                    <a href="{{ route('workspace.edit', $workspace->id) }}"
                                                        class="text-secondary">
                                                        <i class="fa fa-edit">
                                                        </i>
                                                    </a>
                                                </li>

                                                <li class="mr-3">
                                                    <form action="{{ route('workspace.destroy', $workspace->id) }}"
                                                        method="post">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="delete">
                                                        <button class="ti-trash btn-danger"></button>
                                                    </form>
                                                </li>
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
