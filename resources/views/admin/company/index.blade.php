@extends('layouts.dashboard-admin')
@section('page_title', 'Admin')
@section('breadcramp_title', 'Admin home')
@section('content')
    <!--top page start-->
    <div class="main-content-inner">
        <div class="row">
            <!-- Progress Table start -->
            <div class="col-12 mt-5">
                {{-- <form   action="{{ route('company.create') }}" > --}}
                {{-- @csrf --}}
                <a class="btn btn-secondary" style="margin-left:85%; margin-bottom: 3%"
                    href="{{ route('company.create') }}">Add new owner</a>
                {{-- <button type="button" class="btn btn-secondary" style="margin-left:85%;">
                                Add new owner
                            </button> --}}
                {{-- </form> --}}
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Company</h4>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table table-hover progress-table ">
                                    <thead class="text-uppercase">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">company name</th>
                                            <th scope="col">email</th>
                                            <th scope="col">owner name</th>
                                            <th scope="col">phone number</th>
                                            <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($owners as $owner)
                                            <tr>
                                                <th scope="row">{{ $owner->id }}</th>
                                                <td>{{ $owner->company_name }}</td>
                                                <td>{{ $owner->email }}</td>
                                                <td>{{ $owner->first_name }}</td>
                                                <td>{{ $owner->phone_number }}</td>

                                                <td>
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="mr-3">
                                                            <a href="{{ route('company.edit', ['id' => $owner->id]) }}"
                                                                class="text-info">
                                                                <i class="ti-pencil"></i></a>
                                                        </li>
                                                        <li class="mr-3">
                                                            <form
                                                                action="
                                                                {{ route('company.delete', ['id' => $owner->id]) }}
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
    {{-- end --}}



@endsection
