<x-head />

<body>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <x-admin-side-bar />
        <!-- main content area start -->
        <div class="main-content">

            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="owner-dashboard.html">@yield('breadcramp_title')</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb"
                                src="
                            {{ Auth::guard(session('guardName'))->user()->image }}
                            "
                                alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                                {{ auth()->guard(session('guardName'))->user()->first_name }}
                                <i class="fa fa-angle-down"></i>
                            </h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('admin.setting.index') }}">Settings</a>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        style="border: none; background-color: transparent; color: #8a8a8a; margin-left: 25px;">
                                        Log Out
                                    </button>
                                </form>
                                {{-- <a class="dropdown-item" href="#">Log Out</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @yield('content')

            <!-- footer area start-->
            <footer>
                <div class="footer-area">
                    <p>© Copyright 2022. All right reserved. Template by <a href="#">Workspaces</a>.</p>
                </div>
            </footer>
            <!-- footer area end-->
        </div>

        <x-script />

        <!-- start chart js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
        <!-- start highcharts js -->
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <!-- start zingchart js -->
        <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
        <script>
            zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
            ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
        </script>
        <!-- all line chart activation -->
        <script src="{{ asset('assets/js/line-chart.js') }}"></script>
        <!-- all pie chart -->
        <script src="{{ asset('assets/js/pie-chart.js') }}"></script>


</body>

</html>
