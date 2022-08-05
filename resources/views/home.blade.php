<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Redenzvous.</title>
        @livewireStyles
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- google fonts -->
		<!-- Css link -->
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('front/css/owl.carousel.css') }}">
		<link rel="stylesheet" href="{{ asset('front/css/owl.transitions.css') }}">
		<link rel="stylesheet" href="{{ asset('front/css/animate.min.css') }}">
		<link rel="stylesheet" href="{{ asset('front/css/lightbox.css') }}">
		<link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('front/css/preloader.css') }}">
		<link rel="stylesheet" href="{{ asset('front/css/image.css') }}">
		<link rel="stylesheet" href="{{ asset('front/css/icon.css') }}">
		<link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">
		<link rel="icon" href="{{ asset('front/img/icon1.png') }}">


	</head>
	<body id="top">

        <header id="navigation" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Desktops.</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->

                    <!-- logo -->
                    <h1 class="navbar-brand">
                        <a href="#body"><img src="{{ asset('front/img/logo.jpg') }}" height="70" width="164" alt=""></a>
                    </h1>
                    <!-- /logo -->
                </div>

                <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation" style="margin-top: 10px">
                    <ul id="nav" class="nav navbar-nav menu">
                        <li><a href="#top">Home</a></li>
                        <li><a href="#features">Service</a></li>
                        <li><a href="#blog">Rental Type</a></li>
                        <li><a href="#map">Map</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#contact-form">Contact</a></li>
                    </ul>
                </nav>
                <!-- /main nav -->

            </div>
        </header>


        <div class="wrapper">
            <section id="banner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <h1>Redenzvous Website</h1>
                                <h2>Whatever your business,Whateveryour budget<br> We'll help you to find the right workspace.</h2>
                                <div class="buttons">
                                    <a href="{{ route('login', ['type' => 'customer']) }}" class="btn btn-learn">Login</a>
                                    <a href="{{ route('register', ['type' => 'customer']) }}" class="btn btn-learn">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="scrolldown">
                    <a id="scroll" href="#features" class="scroll"></a>
                </div>
            </section>
            <section id="features">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                                <h2>OUR BEST SERVICES</h2>
                                <p>The services we provide in Redenzvous</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-xs-6 col-sm-6">
                            <div class="feature-block text-center">
                                <div class="icon-box">
                                    <i class="ion-cash"></i>
                                </div>
                                <h4 class="wow fadeInUp" data-wow-delay=".3s">All-inclusive pricing</h4>
                                <p class="wow fadeInUp" data-wow-delay=".5s">Anything you would like to write about this topic<br> here</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-6 col-sm-6">
                            <div class="feature-block text-center">
                                <div class="icon-box">
                                    <i class="ion-cube"></i>
                                </div>
                                <h4 class="wow fadeInUp" data-wow-delay=".3s">Furnished offices</h4>
                                <p class="wow fadeInUp" data-wow-delay=".5s">Anything you would like to write about this topic<br> here</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-6 col-sm-6">
                            <div class="feature-block text-center">
                                <div class="icon-box">
                                    <i class="ion-clock"></i>
                                </div>
                                <h4 class="wow fadeInUp" data-wow-delay=".3s">Temporary offices</h4>
                                <p class="wow fadeInUp" data-wow-delay=".5s">Anything you would like to write about this topic<br> here</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="blog">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                                <h2>Rental Type</h2>
                            </div>
                            <div id="blog-post" class="owl-carousel">
                                @foreach ($workspaces as $workspace)
                                    <div>
                                        <div class="block">
                                            <img src="{{ asset('gallery'). '/' . $workspace->gallery[0] }}" alt="" class="img-responsive">
                                            <div class="content">
                                                <h4>
                                                    <a href="blog.html">
                                                        {{ $workspace->name }}
                                                    </a>
                                                </h4>
                                                <p>
                                                    {{ $workspace->description }}
                                                </p>
                                                <a href="{{ route('my-workspaces.specificWorkspace', ['id' => $workspace->id]) }}" class="btn btn-read">
                                                    Show more
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="portfolio">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title">
                                <h2>Our locations</h2>
                                <p>We are already very present in these cities<br>use our website to find your right place</p>
                            </div>
                            <div class="block">
                                <div class="recent-work-pic">
                                    <ul id="mixed-items">
                                        <li class="mix category-1 col-md-4 col-xs-6" data-my-order="1">
                                            <a class="example-image-link" href="#" >
                                                <img class="img-responsive" src="{{ asset('front/img/blog/gaza.jpeg') }}" alt="gaza">
                                                <div class="overlay">
                                                    <h3>Gaza</h3>

                                                </div>
                                            </a>
                                        </li>
                                        <li class="mix category-2 col-md-4 col-xs-6" data-my-order="2">
                                            <a class="example-image-link" href="#" >
                                                <img class="img-responsive" src="{{ asset('front/img/blog/blog-2.jpg') }}" alt="rafah">
                                                <div class="overlay">
                                                    <h3>Rafah</h3>

                                                </div>
                                            </a>
                                        </li>
                                        <li class="mix category-1 col-md-4 col-xs-6" data-my-order="3">
                                            <a class="example-image-link" href="#" >
                                                <img class="img-responsive" src="{{ asset('front/img/blog/khan.jpeg') }}" alt="khanyounis">
                                                <div class="overlay">
                                                    <h3>KhanYounis</h3>

                                                </div>
                                            </a>
                                        </li>
                                        <li class="mix category-2 col-md-4 col-xs-6" data-my-order="4">
                                            <a class="example-image-link" href="#" >
                                                <img class="img-responsive" src="img/blog-4.jpg') }}" alt="">
                                                <div class="overlay">
                                                    <h3>Alzahra</h3>

                                                </div>
                                            </a>
                                        </li>
                                        <li class="mix category-1 col-md-4 col-xs-6" data-my-order="5">
                                            <a class="example-image-link" href="#" >
                                                <img class="img-responsive" src="{{ asset('img/blog-5.jpg') }}" alt="">
                                                <div class="overlay">
                                                    <h3>NorthGaza</h3>

                                                </div>
                                            </a>
                                        </li>
                                        <li class="mix category-2 col-md-4 col-xs-6" data-my-order="6">
                                            <a class="example-image-link" href="#" >
                                                <img class="img-responsive" src="{{ asset('img/blog-2.jpg') }}" alt="">
                                                <div class="overlay">
                                                    <h3>Gaza</h3>

                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="map">
                <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
                    <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                            style="border:0" allowfullscreen></iframe>
                </div>
            </section>


            <section id="about">
                <div class="container">
                    <div class="row">
                        <div class="title">
                            <h2>About Us</h2>
                            <p>Anything that explanation our project desktops idea <br>Anything Anything</p>
                        </div>
                        <div class="col-md-6">
                            <!-- map -->
                            <div class="img">
                                <div id="img">
                                    <img  width="100%" height="100%" src="https://d1tm14lrsghf7q.cloudfront.net/public/media/48795/conversions/Simple20-thumb.jpg">

                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <p>
                                From the graduation research report, Show what the idea is, and explain it here <br> Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text.
                                From the graduation research report, Show what the idea is, and explain it here <br> Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text.
                                From the graduation research report, Show what the idea is, and explain it here <br> Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the standard dummy text.

                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="contact-form">
                <div class="container">
                    <div class="row">
                        <div class="title">
                            <h2>CONTACT US</h2>
                            <p>We are ready to hear what you want to tell us.

                                <br> From Here </p>
                        </div>

                        <div class="col-md-6" style="margin-left:300px">
                            <form >
                                <input type="text" class="form-control" placeholder="Name">
                                <input type="text" class="form-control" placeholder="Email">
                                <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                                <button class="btn btn-default" type="submit">SEND</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <section class="footers bg-light pt-5 pb-3 mb-4">
                <br><br>
                <div class="container pt-5">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4 footers-one">
                            <div class="footers-logo">
                                <img src="{{ asset('front/img/logo.png') }}" alt="Logo" style="width:120px;">
                            </div>
                            <Br>
                            <div class="footers-info mt-3">
                                <p>From the graduation research report, Show what the idea is, and explain it here</p>
                            </div>
                            <br>
                            <div class="social-icons p-1">
                                <a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-2x social"></i></a>
                                <a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-2x social"></i></a>
                                <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-2x social"></i></a>
                                <a href="gmail@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-2x social"></i></a>
                            </div>
                        </div>
                        <div class="col-xs-10 col-sm-6 col-md-2 footers-two">

                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-2 footers-two">
                            <h5>Essentials </h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Search</a></li>
                                <li><a href="#">Sell your Car</a></li>
                                <li><a href="#">Advertise with us</a></li>
                                <li><a href="#">Dealers Portal</a></li>
                                <li><a href="#">Post Requirements</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-2 footers-three">
                            <h5>Information </h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Register Now</a></li>
                                <li><a href="#">Advice</a></li>
                                <li><a href="#">Videos</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Services</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-2 footers-four">
                            <h5>Explore </h5>
                            <ul class="list-unstyled">
                                <li><a href="#">News</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Feedbacks</a></li>
                                <li><a href="#">User Agreement</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <br> <br>
            </section>
        </div>

		<!-- load Js -->
		<script src="{{ asset('front/js/jquery-1.11.3.min.js') }}"></script>
		<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI14J_PNWVd-m0gnUBkjmhoQyNyd7nllA"></script>
		<script src="{{ asset('front/js/waypoints.min.js') }}"></script>
		<script src="{{ asset('front/js/lightbox.js') }}"></script>
		<script src="{{ asset('front/js/jquery.counterup.min.js') }}"></script>
		<script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('front/js/html5lightbox.js') }}"></script>
		<script src="{{ asset('front/js/jquery.mixitup.js') }}"></script>
		<script src="{{ asset('front/js/wow.min.js') }}"></script>
		<script src="{{ asset('front/js/jquery.scrollUp.js') }}"></script>
		<script src="{{ asset('front/js/jquery.sticky.js') }}"></script>
		<script src="{{ asset('front/js/jquery.nav.js') }}"></script>
		<script src="{{ asset('front/js/main.js') }}"></script>
        @livewireScripts
        @stack('scripts')
	</body>
</html>
