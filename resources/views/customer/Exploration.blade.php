@extends('layouts.dashboard_customers')
@section('page_title', 'Exporation Workspace')
@section('breadcramp_title', 'Exploration')

@section('content')

    <div class="card-area">
        <div class="searchInputWrapper text-right" style="margin-left: -500px;">
            <form action="{{ route('customer.home') }} " method="get" style="margin-top: 30px">
                <input class="searchInput" name="search" type="text" value="{{ request()->query('search') }}"
                    placeholder='focus here to search'>
                <i class="searchInputIcon fa fa-search"></i>
            </form>
        </div>
        <div class="row">

            {{-- {{ $workspaces->links() }} --}}

            {{-- // appends(['search' => request()->query('search')])-> --}}


            @foreach ($workspaces as $workspace)
                <div class="col-lg-4 col-md-6 mt-5">
                    <div class="card card-bordered">
                        {{-- {{dd($workspace->gallery)}} --}}

                        <img class="card-img-top img-fluid" src="{{ asset('gallery') . '/' . $workspace->gallery[0] }}"
                            style="height: 340px; width: 450px;" alt="image">
                        {{-- <img class="card-img-top img-fluid" src="assets/images/card/card-img1.jpg" alt="image"> --}}
                        <div class="card-body">
                            <h5 class="title">{{ $workspace->name }}</h5>
                            <p class="card-text">{{ Str::limit($workspace->description, 30) }}</p>
                            </p>
                            <p class="card-text">Location : {{ $workspace->location }}</p>
                            <p class="card-text">Location : {{ $workspace->width }}</p>
                            
                            <a href="{{ route('my-workspaces.show', ['id' => $workspace->id]) }}" class="btn btn-primary">
                                Rent
                            </a>
                        </div>
                    </div>

                </div>
            @endforeach



        </div>

        <div class="mt-3">
            {{ $workspaces->links() }}
        </div>

    </div>
@endsection
