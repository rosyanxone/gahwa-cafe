@extends('layouts.guest')

@section('stylesheets')
    <link href="{{ asset('css/linearicons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
@endsection

@section('main')
    <!-- start banner Area -->
    <section class="banner-area" id="home">
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-start">
                <div class="banner-content col-lg-7">
                    <h6 class="text-uppercase text-white">Now you can feel the Energy</h6>
                    <h1>
                        Start your day with <br>
                        a black Coffee
                    </h1>
                    <a class="primary-btn text-uppercase" href="#">Buy Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start video-sec Area -->
    <section class="video-sec-area pb-100 pt-40" id="about">
        <div class="container">
            <div class="row justify-content-start align-items-center">
                <div class="col-lg-6 video-right justify-content-center align-items-center d-flex">
                    <div class="overlay overlay-bg"></div>
                    <a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid"
                            src="img/play-icon.png" alt=""></a>
                </div>
                <div class="col-lg-6 video-left">
                    <h6>Live Coffee making process.</h6>
                    <h1>We Telecast our <br>
                        Coffee Making Live</h1>
                    <p><span>We are here to listen from you deliver exellence</span></p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim.
                    </p>
                    <img class="img-fluid" src="{{ asset('img/signature.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End video-sec Area -->

    <!-- Start menu Area -->
    <section class="menu-area section-gap" id="coffee">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content col-lg-10 pb-60">
                    <div class="title text-center">
                        <h1 class="mb-10">What kind of Coffee we serve for you</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-menu">
                        <div class="title-div justify-content-between d-flex">
                            <h4>Cappuccino</h4>
                            <p class="price float-right">
                                $49
                            </p>
                        </div>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advance.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-menu">
                        <div class="title-div justify-content-between d-flex">
                            <h4>Americano</h4>
                            <p class="price float-right">
                                $49
                            </p>
                        </div>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advance.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-menu">
                        <div class="title-div justify-content-between d-flex">
                            <h4>Espresso</h4>
                            <p class="price float-right">
                                $49
                            </p>
                        </div>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advance.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-menu">
                        <div class="title-div justify-content-between d-flex">
                            <h4>Macchiato</h4>
                            <p class="price float-right">
                                $49
                            </p>
                        </div>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advance.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-menu">
                        <div class="title-div justify-content-between d-flex">
                            <h4>Mocha</h4>
                            <p class="price float-right">
                                $49
                            </p>
                        </div>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advance.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-menu">
                        <div class="title-div justify-content-between d-flex">
                            <h4>Coffee Latte</h4>
                            <p class="price float-right">
                                $49
                            </p>
                        </div>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advance.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-menu">
                        <div class="title-div justify-content-between d-flex">
                            <h4>Piccolo Latte</h4>
                            <p class="price float-right">
                                $49
                            </p>
                        </div>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advance.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-menu">
                        <div class="title-div justify-content-between d-flex">
                            <h4>Ristretto</h4>
                            <p class="price float-right">
                                $49
                            </p>
                        </div>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advance.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-menu">
                        <div class="title-div justify-content-between d-flex">
                            <h4>Affogato</h4>
                            <p class="price float-right">
                                $49
                            </p>
                        </div>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advance.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End menu Area -->

    <!-- Start gallery Area -->
    <section class="gallery-area section-gap" id="gallery">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content col-lg-10 pb-60">
                    <div class="title text-center">
                        <h1 class="mb-10">What kind of Coffee we serve for you</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <a class="img-pop-home" href="img/g1.jpg">
                        <img class="img-fluid" src="{{ asset('img/g1.jpg') }}" alt="">
                    </a>
                    <a class="img-pop-home" href="img/g2.jpg">
                        <img class="img-fluid" src="{{ asset('img/g2.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-8">
                    <a class="img-pop-home" href="img/g3.jpg">
                        <img class="img-fluid" src="{{ asset('img/g3.jpg') }}" alt="">
                    </a>
                    <div class="row">
                        <div class="col-lg-6">
                            <a class="img-pop-home" href="img/g4.jpg">
                                <img class="img-fluid" src="{{ asset('img/g4.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <a class="img-pop-home" href="img/g5.jpg">
                                <img class="img-fluid" src="{{ asset('img/g5.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End gallery Area -->

    <!-- Start review Area -->
    <section class="review-area section-gap" id="review">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content col-lg-10 pb-60">
                    <div class="title text-center">
                        <h1 class="mb-10">What kind of Coffee we serve for you</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 single-review">
                    <img src="{{ asset('img/r1.png') }}" alt="">
                    <div class="title d-flex flex-row">
                        <h4>lorem ipusm</h4>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                    <p>
                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer,
                        scanner, speaker. Here you can find the best computer accessory for your laptop, monitor,
                        printer, scanner, speaker.
                    </p>
                </div>
                <div class="col-lg-6 col-md-6 single-review">
                    <img src="{{ asset('img/r2.png') }}" alt="">
                    <div class="title d-flex flex-row">
                        <h4>lorem ipusm</h4>
                        <div class="star">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                    <p>
                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer,
                        scanner, speaker. Here you can find the best computer accessory for your laptop, monitor,
                        printer, scanner, speaker.
                    </p>
                </div>
            </div>
            <div class="row counter-row">
                <div class="col-lg-3 col-md-6 single-counter">
                    <h1 class="counter">2536</h1>
                    <p>Happy Client</p>
                </div>
                <div class="col-lg-3 col-md-6 single-counter">
                    <h1 class="counter">7562</h1>
                    <p>Total Projects</p>
                </div>
                <div class="col-lg-3 col-md-6 single-counter">
                    <h1 class="counter">2013</h1>
                    <p>Cups Coffee</p>
                </div>
                <div class="col-lg-3 col-md-6 single-counter">
                    <h1 class="counter">10536</h1>
                    <p>Total Submitted</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End review Area -->

    <!-- Start blog Area -->
    <section class="blog-area section-gap" id="blog">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content col-lg-10 pb-60">
                    <div class="title text-center">
                        <h1 class="mb-10">Jenis Kopi Apa yang Kami Sajikan Untuk Anda</h1>
                        <p>Bantu kami menciptakan pengalaman terbaik dengan mengisi kuesioner ini!</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 single-blog">
                    <img class="img-fluid" src="{{ asset('img/b1.jpg') }}" alt="">
                    <ul class="post-tags">
                        <li style="padding: 8px 26px;">
                            <a href="{{ route('questioner.index') }}">
                                <span style="font-size: 20px;">Isi Kuesioner</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End blog Area -->

    <!-- start footer Area -->
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About Us</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore dolore magna aliqua.
                        </p>
                        <p class="footer-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i
                                class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Newsletter</h6>
                        <p>Stay update with our latest</p>
                        <div class="" id="mc_embed_signup">
                            <form class="form-inline" target="_blank" novalidate="true"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get">
                                <input class="form-control" name="EMAIL" type="email" placeholder="Enter Email"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
                                    required="">
                                <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right"
                                        aria-hidden="true"></i></button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" type="text" value=""
                                        tabindex="-1">
                                </div>

                                <div class="info pt-20"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                    <div class="single-footer-widget">
                        <h6>Follow Us</h6>
                        <p>Let us be social</p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->
@endsection
