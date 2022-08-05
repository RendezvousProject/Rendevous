@extends('layouts.dashboard-admin')
@section('page_title', 'Admin')
@section('breadcramp_title', 'workspace')
@section('content')


    <!--top page start-->
    <div class="main-content-inner">
        <div class="row">
            <!-- Progress Table start -->
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Workspaces</h4>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table table-hover progress-table ">
                                    <thead class="text-uppercase">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">WorkSpace Name</th>
                                            <th scope="col">City</th>
                                            <th scope="col">type</th>
                                            <th scope="col">price</th>
                                            <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($workspaces as $workspace)
                                            <tr>
                                                <th scope="row">{{ $workspace->id }}</th>
                                                <td>{{ $workspace->name }}</td>
                                                <td>{{ $workspace->city->city_name }}</td>
                                                <td>{{ $workspace->type }}</td>
                                                <td>{{ $workspace->price }}</td>

                                                <td>
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="mr-3"> <a
                                                                href="{{ route('admin.workspace.show', ['id' => $workspace->id]) }}"
                                                                class="text-info"><i class="ti-eye"></i></a>
                                                        </li>

                                                        <li class="mr-3">
                                                            <a href="{{ route('admin.workspace.edit', ['id' => $workspace->id]) }}"
                                                                class="text-info">
                                                                <i class="ti-pencil"></i></a>
                                                        </li>

                                                        <li class="mr-3">
                                                            <form
                                                                action="
                                                                {{ route('admin.workspace.delete', ['id' => $workspace->id]) }}
                                                                "
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="text-danger"
                                                                    style="border-width: 0px; background-color:transparent">
                                                                    <i class="ti-trash"></i>
                                                                </button>
                                                            </form>
                                                            {{-- <a href="#" class="text-danger"><i class="ti-trash"></i></a> --}}
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
