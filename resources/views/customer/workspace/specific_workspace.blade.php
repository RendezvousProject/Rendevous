<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Desktops.</title>
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
    <link rel="icon" href="{{ asset('front/img/logo.svg') }}">

    <style>
        body {
            font-family: 'open sans';
            overflow-x: hidden;
        }
        img {
            max-width: 100%;
        }
        .preview {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }
        @media screen and (max-width: 996px) {
            .preview {
                margin-bottom: 20px;
            }
        }
        .preview-pic {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }
        .preview-thumbnail.nav-tabs {
            border: none;
            margin-top: 15px;
        }
        .preview-thumbnail.nav-tabs li {
            width: 18%;
            margin-right: 2.5%;
        }
        .preview-thumbnail.nav-tabs li img {
            max-width: 100%;
            display: block;
        }
        .preview-thumbnail.nav-tabs li a {
            padding: 0;
            margin: 0;
        }
        .preview-thumbnail.nav-tabs li:last-of-type {
            margin-right: 0;
        }
        .tab-content {
            overflow: hidden;
        }
        .tab-content img {
            width: 100%;
            -webkit-animation-name: opacity;
            animation-name: opacity;
            -webkit-animation-duration: .3s;
            animation-duration: .3s;
        }
        .card {
            margin-top: 50px;
            background: #eee;
            padding: 3em;
            line-height: 1.5em;
        }
        @media screen and (min-width: 997px) {
            .wrapper {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
            }
        }
        .details {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }
        .colors {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }
        .product-title,
        .price,
        .sizes,
        .colors {
            text-transform: UPPERCASE;
            font-weight: bold;
        }
        .checked,
        .price span {
            color: #80D6A3;
        }
        .product-title,
        .rating,
        .product-description,
        .price,
        .vote,
        .sizes {
            margin-bottom: 15px;
        }
        .product-title {
            margin-top: 0;
        }
        .size {
            margin-right: 10px;
        }
        .size:first-of-type {
            margin-left: 40px;
        }
        .color {
            display: inline-block;
            vertical-align: middle;
            margin-right: 10px;
            height: 2em;
            width: 2em;
            border-radius: 2px;
        }
        .color:first-of-type {
            margin-left: 20px;
        }
        .add-to-cart,
        .like {
            background: #80D6A3;
            padding: 1.2em 1.5em;
            border: none;
            text-transform: UPPERCASE;
            font-weight: bold;
            color: #fff;
            -webkit-transition: background .3s ease;
            transition: background .3s ease;
        }
        .add-to-cart:hover,
        .like:hover {
            background: #80D6A3;
            color: #fff;
        }
        .not-available {
            text-align: center;
            line-height: 2em;
        }
        .not-available:before {
            font-family: fontawesome;
            content: "\f00d";
            color: #fff;
        }
        .orange {
            background: #80D6A3;
        }
        .green {
            background: #85ad00;
        }
        .blue {
            background: #0076ad;
        }
        .tooltip-inner {
            padding: 1.3em;
        }
        @-webkit-keyframes opacity {
            0% {
                opacity: 0;
                -webkit-transform: scale(3);
                transform: scale(3);
            }
            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }
        @keyframes opacity {
            0% {
                opacity: 0;
                -webkit-transform: scale(3);
                transform: scale(3);
            }
            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }
    </style>
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
                    <a href="#body"><img src="{{ asset('front/img/nvnLogo.svg') }}" height="50" width="164" alt=""></a>
                </h1>
                <!-- /logo -->
            </div>

            <!-- main nav -->
            <nav class="collapse navbar-collapse navbar-right" role="navigation">
                <ul id="nav" class="nav navbar-nav menu">
                    <li><a href="#top">Home</a></li>
                    <li><a href="#features">Service</a></li>
                    <li><a href="#blog">Rental Type</a></li>
                    <li><a href="#map">Map</a></li>
                    <li><a href="#about">Abou Us</a></li>
                    <li><a href="#contact-form">Contact</a></li>
                </ul>
            </nav>
            <!-- /main nav -->

        </div>
    </header>


    <div class="container">
        <div class="card" style="margin-top:90px">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">

                        <div class="preview-pic tab-content">
                            <div class="tab-pane active" id="pic-1">
                                <img src="{{ asset('gallery'). '/' . $workspace->gallery[0] }}" />
                            </div>

                        </div>

                    </div>
                    <div class="details col-md-6">
                        <h3 class="product-title">
                            {{ $workspace->name }}
                        </h3>
                        <div class="rating">
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <span class="review-no">41 reviews</span>
                        </div>
                        <p class="product-description">
                            {{ $workspace->description }}
                        </p>
                        <h4 class="price">
                            Place Type :
                            <span>
                                {{ $workspace->type }}
                            </span>
                        </h4>
                        <h4 class="price">
                            current price :
                            <span>
                                $ {{ $workspace->price }}
                            </span>
                        </h4>
                        <p class="vote"><strong>60%</strong> of rentals enjoyed this place! <strong>(40 votes)</strong>
                        </p>
                        <h5 class="sizes">Features :
                            @foreach( $workspace->features as $feature )
                                <span class="size" data-toggle="tooltip">{{ $feature }}</span> -
                            @endforeach
                        </h5>
                        <h5 class="colors">City:
                            {{ $workspace->city->city_name }}
                        </h5>
                        <div class="action">
                            <a href="{{ route('my-workspaces.show', ['id' => $workspace->id]) }}" class="add-to-cart btn btn-default" type="button">
                                Rent
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    </body>
</html>
