@extends('layouts.dashboard-admin')
@section('page_title', 'Admin')
@section('breadcramp_title', 'customer')
@section('content')

    <!--top page start-->
    <div class="main-content-inner">
        <div class="row">
            <!-- Progress Table start -->
            <div class="col-12 mt-5">
                <a class="btn btn-secondary" style="margin-left:85%; margin-bottom: 3%"
                    href="{{ route('customer.create') }}">Add new customer</a>
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">customers</h4>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table table-hover progress-table ">
                                    <thead class="text-uppercase">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">customer name</th>
                                            <th scope="col">customer email</th>
                                            <th scope="col">phone number</th>
                                            <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($customers as $customer)
                                            <tr>
                                                <th scope="row">{{ $customer->id }}</th>
                                                <td>{{$customer->first_name . ' ' . $customer->last_name}}</td>
                                                <td>{{$customer->email}}</td>
                                                <td>{{$customer->phone_number}}</td>

                                                <td>

                                                    <ul class="d-flex justify-content-center">
                                                        <li class="mr-3">
                                                            <a href="{{ route('customer.edit', ['id' => $customer->id]) }}"
                                                                class="text-info">
                                                                <i class="ti-pencil"></i></a>
                                                        </li>
                                                        <li class="mr-3">
                                                            <form action="
                                                                {{ route('customer.delete', ['id'=> $customer->id]) }}
                                                                " method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="text-danger" style="border-width: 0px; background-color:transparent">
                                                                        <i class="ti-trash"></i>
                                                                    </button>
                                                                </form>
                                                            {{-- <a href="#" class="text-danger"><i
                                                                    class="ti-trash"></i></a> --}}
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
