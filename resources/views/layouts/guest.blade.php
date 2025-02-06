<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    {{-- <link href="{{ asset('img/fav.png') }}" rel="shortcut icon"> --}}
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Gahwa Coffee</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
        CSS
        ============================================= -->
    @yield('stylesheets')

    <style>
        .socmed-icon {
            fill: #cccccc;
        }

        .socmed-icon:hover {
            fill: #b68834;
        }
    </style>
    {{-- @vite(['resources/js/sweet-alert.js']) --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <!-- Header -->
    <header class="@yield('isHeaderScrolled')" id="header" id="home">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-8 col-sm-4 col-8 header-top-right no-padding">
                        <ul>
                            <li>
                                Setiap hari: 10:00-22:00
                            </li>
                            <li>
                                <a href="https://wa.me/+6281231260035">(+62) 812 3126 0035</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="{{ route('home') }}" style="display: flex; align-items: center;">
                        <img src="{{ asset('img/logo/logo.jpg') }}" title="" alt="logo"
                            style="width: 40px; border-radius: 100%;" />
                        <span style="padding-left: 12px; color: white; font-size: 20px; font-weight: 500;">
                            Gahwa Coffe
                        </span>
                    </a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="#home" style="color: white; text-decoration: none;">Home</a>
                        </li>
                        <li><a href="#coffee" style="color: white; text-decoration: none;">Menu</a></li>
                        <li><a href="#gallery" style="color: white; text-decoration: none;">Gallery</a></li>
                        <li><a href="#review" style="color: white; text-decoration: none;">Testimoni</a></li>
                        <li><a href="#blog" style="color: white; text-decoration: none;">Review</a></li>
                        <li><a href="{{ route('login') }}" style="color: white; text-decoration: none;">Login</a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header>
    <!-- End Header -->

    <main>
        @yield('main')
    </main>

    <script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="{{ asset('js/easing.min.js') }}"></script>
    <script src="{{ asset('js/hoverIntent.js') }}"></script>
    <script src="{{ asset('js/superfish.min.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/parallax.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/mail-script.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    @yield('scripts')
</body>

</html>
