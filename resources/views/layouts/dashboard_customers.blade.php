<x-head/>

<body>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <x-customer-sidebar/>
        <!-- main content area start -->
        <div class="main-content">

            <!-- page title area start -->
            <x-customer-topbar/>
                        <!-- Stttaaarrrttt hhheeerrreee -->
            <div class="main-content-inner">
               @yield('content')

        </div>
    </div>



    <!-- footer area start-->
    <footer>
        <div class="footer-area">
            <p>© Copyright 2022. All right reserved. Template by <a href="#">Workspaces Team</a>.</p>
        </div>
    </footer>
    <!-- footer area end-->
    </div>
    <x-script />

    
</body>

</html>
