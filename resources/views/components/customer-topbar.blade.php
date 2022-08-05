<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Dashboard</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="owner-dashboard.html">
                            @yield('breadcramp_title')
                        </a></li>

                </ul>
                {{-- <div class="searchInputWrapper text-right" style="margin-left: -500px;">
                    <form action="{{ route('customer.home') }} " method="get">
                        <input class="searchInput" name="search" type="text" value="{{ request()->query('search') }}" placeholder='focus here to search'>
                        <i class="searchInputIcon fa fa-search"></i>
                    </form>
                </div> --}}
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            <div class="user-profile pull-right">
                <img class="avatar user-thumb"
                    src="
                {{ Auth::guard(session('guardName'))->user()->image }} " alt="avatar">
                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                    {{ auth()->guard(session('guardName'))->user()->first_name }}
                    <i class="fa fa-angle-down"></i>
                </h4>
                <div class="dropdown-menu">
                    <a class="dropdown-item"
                        href="{{ route('customer.setting', Auth::guard(session('guardName'))->user()->id) }}">Settings</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="dropdown-item" type="submit">
                            logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
