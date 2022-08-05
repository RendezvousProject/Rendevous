<x-head />


<body>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <x-sidebar />
        <!-- main content area start -->
        <div class="main-content">
            <x-top-bar />
            @yield('content')


        </div>

        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2022. All right reserved. Template by <a href="#">Workspaces Team</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->

        {{-- <livewire:calendar /> --}}

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

        @livewireScripts
        @stack('scripts')

</body>

</html>
