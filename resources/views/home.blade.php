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
                    <h6 class="text-uppercase text-white" style="translate: 0 10px;">Now you can feel the Energy</h6>
                    <h1>
                        Start your day with <br>
                        Gahwa Coffee
                    </h1>
                    <a class="primary-btn text-uppercase" href="#coffee">Menu</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start menu Area -->
    <section class="menu-area section-gap" id="coffee">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content col-lg-10 pb-60">
                    <div class="title text-center">
                        <h1 class="mb-10">Temukan rasa favoritmu</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-menu">
                        <div class="title-div justify-content-between d-flex">
                            <h4>Americano</h4>
                            <p class="price float-right">
                                15k
                            </p>
                        </div>
                        <p>
                            Americano adalah espresso yang diencerkan dengan air panas.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-menu">
                        <div class="title-div justify-content-between d-flex">
                            <h4>Affogato</h4>
                            <p class="price float-right">
                                25k
                            </p>
                        </div>
                        <p>
                            Affogato adalah espresso yang dituangkan di atas es krim.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-menu">
                        <div class="title-div justify-content-between d-flex">
                            <h4>Kopi Susu</h4>
                            <p class="price float-right">
                                18k
                            </p>
                        </div>
                        <p>
                            Kopi susu perpaduan kopi dan susu yang menciptakan rasa lembut dan manis.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-menu">
                        <div class="title-div justify-content-between d-flex">
                            <h4>Matcha Latte</h4>
                            <p class="price float-right">
                                22k
                            </p>
                        </div>
                        <p>
                            Matcha adalah campuran teh hijau dan susu yang menghasilkan rasa creamy.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-menu">
                        <div class="title-div justify-content-between d-flex">
                            <h4>Kopi Susu Regal</h4>
                            <p class="price float-right">
                                25k
                            </p>
                        </div>
                        <p>
                            Kopi Susu Regal perpaduan kopi, susu, dan biskuit Regal.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-menu">
                        <div class="title-div justify-content-between d-flex">
                            <h4>Kopi Susu Oreo</h4>
                            <p class="price float-right">
                                20k
                            </p>
                        </div>
                        <p>
                            Kopi Susu Oreo minuman rasa pahit kopi, susu, dan kelezatan manis renyah.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-menu">
                        <div class="title-div justify-content-between d-flex">
                            <h4>Kopi Milo</h4>
                            <p class="price float-right">
                                18k
                            </p>
                        </div>
                        <p>
                            Kopi Milo minuman unik rasa pahit kopi dengan manis cokelat.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-menu">
                        <div class="title-div justify-content-between d-flex">
                            <h4>Gahwa Iced</h4>
                            <p class="price float-right">
                                20k
                            </p>
                        </div>
                        <p>
                            Kopi spesial dari Gahwa dengan bahan pilihan terbaik.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-menu">
                        <div class="title-div justify-content-between d-flex">
                            <h4>Coklat Coffe</h4>
                            <p class="price float-right">
                                15k
                            </p>
                        </div>
                        <p>
                            Coklat Coffee adalah minuman lezat rasa manis dan creamy coklat.
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
                        <h1 class="mb-10">Gallery gahwa: Seni dalam Setiap Cangkir</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <a class="img-pop-home" href="{{ asset('img/gallery/img-1.jpg') }}">
                        <img class="img-fluid" src="{{ asset('img/gallery/img-1.jpg') }}" alt="">
                    </a>
                    <a class="img-pop-home" href="{{ asset('img/gallery/img-2.jpg') }}">
                        <img class="img-fluid" style="margin-top: 5px;" src="{{ asset('img/gallery/img-2.jpg') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-8">
                    <a class="img-pop-home" href="{{ asset('img/gallery/img-5.jpg') }}">
                        <img class="img-fluid" src="{{ asset('img/gallery/img-5.jpg') }}" alt="">
                    </a>
                    <div class="row">
                        <div class="col-lg-6">
                            <a class="img-pop-home" href="{{ asset('img/gallery/img-4.jpg') }}">
                                <img class="img-fluid" src="{{ asset('img/gallery/img-4.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <a class="img-pop-home" href="{{ asset('img/gallery/img-3.jpg') }}">
                                <img class="img-fluid" src="{{ asset('img/gallery/img-3.jpg') }}" alt="">
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
                        <h1 class="mb-10">Pengalaman istimewa oleh pengunjung sebelumnya!</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($randomEssayAnswers as $randomEssayAnswer)
                    <div class="col-lg-6 col-md-6 single-review">
                        <div class="title d-flex flex-row">
                            <h4>{{ $randomEssayAnswer->respondent->name }}</h4>
                        </div>
                        <p>
                            {{ $randomEssayAnswer->body }}
                        </p>
                    </div>
                @endforeach
                {{-- <div class="col-lg-6 col-md-6 single-review">
                    <div class="title d-flex flex-row">
                        <h4>lorem ipusm</h4>
                    </div>
                    <p>
                        Accessories Here you can find the best computer accessory for your laptop, monitor, printer,
                        scanner, speaker. Here you can find the best computer accessory for your laptop, monitor,
                        printer, scanner, speaker.
                    </p>
                </div> --}}
            </div>
            <div class="row counter-row">
                <div class="col-lg-3 col-md-6 single-counter">
                    <h1 class="counter">{{ $totalRespondent }}</h1>
                    <p>Happy Customer</p>
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
                        <h1 class="mb-10">Bantu kami menciptakan pengalaman terbaik dengan mengisi kuesioner</h1>
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
            <div class="row justify-content-between">
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
                            </script> All rights reserved | This site is made with <i class="fa fa-heart-o"
                                aria-hidden="true"></i>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                    <div class="single-footer-widget">
                        <h6>Follow Us</h6>
                        <p>Let us be social</p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="https://maps.app.goo.gl/yt6sqYZm61syxd6N9?g_st=ic" style="display: flex; align-items: center; padding-right: 20px;">
                                <svg class="socmed-icon" id="Layer_1" style="enable-background:new 0 0 91 91;" width="25"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" viewBox="0 0 91 91" xml:space="preserve">
                                    <g>
                                        <path
                                            d="M66.9,41.8c0-11.3-9.1-20.4-20.4-20.4c-11.3,0-20.4,9.1-20.4,20.4c0,11.3,20.4,32.4,20.4,32.4S66.9,53.1,66.9,41.8z    M37,41.4c0-5.2,4.3-9.5,9.5-9.5c5.2,0,9.5,4.2,9.5,9.5c0,5.2-4.2,9.5-9.5,9.5C41.3,50.9,37,46.6,37,41.4z" />
                                    </g>
                                </svg>
                            </a>
                            <a href="https://www.tiktok.com/@gahwastorycoffee?_t=ZS-8skxEzJO64e&_r=1" style="display: flex; align-items: center;">
                                <svg class="socmed-icon" xmlns="http://www.w3.org/2000/svg" width="15"
                                    viewBox="0 0 32 32">
                                    <path
                                        d="M24.562,7.613c-1.508-.983-2.597-2.557-2.936-4.391-.073-.396-.114-.804-.114-1.221h-4.814l-.008,19.292c-.081,2.16-1.859,3.894-4.039,3.894-.677,0-1.315-.169-1.877-.465-1.288-.678-2.169-2.028-2.169-3.582,0-2.231,1.815-4.047,4.046-4.047,.417,0,.816,.069,1.194,.187v-4.914c-.391-.053-.788-.087-1.194-.087-4.886,0-8.86,3.975-8.86,8.86,0,2.998,1.498,5.65,3.783,7.254,1.439,1.01,3.19,1.606,5.078,1.606,4.886,0,8.86-3.975,8.86-8.86V11.357c1.888,1.355,4.201,2.154,6.697,2.154v-4.814c-1.345,0-2.597-.4-3.647-1.085Z">
                                    </path>
                                </svg>
                            </a>
                            <a href="https://www.instagram.com/gahwa.storycoffee?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" style="display: flex; align-items: center;">
                                <svg class="socmed-icon" xmlns="http://www.w3.org/2000/svg" width="16"
                                    viewBox="0 0 32 32">
                                    <path
                                        d="M10.202,2.098c-1.49,.07-2.507,.308-3.396,.657-.92,.359-1.7,.84-2.477,1.619-.776,.779-1.254,1.56-1.61,2.481-.345,.891-.578,1.909-.644,3.4-.066,1.49-.08,1.97-.073,5.771s.024,4.278,.096,5.772c.071,1.489,.308,2.506,.657,3.396,.359,.92,.84,1.7,1.619,2.477,.779,.776,1.559,1.253,2.483,1.61,.89,.344,1.909,.579,3.399,.644,1.49,.065,1.97,.08,5.771,.073,3.801-.007,4.279-.024,5.773-.095s2.505-.309,3.395-.657c.92-.36,1.701-.84,2.477-1.62s1.254-1.561,1.609-2.483c.345-.89,.579-1.909,.644-3.398,.065-1.494,.081-1.971,.073-5.773s-.024-4.278-.095-5.771-.308-2.507-.657-3.397c-.36-.92-.84-1.7-1.619-2.477s-1.561-1.254-2.483-1.609c-.891-.345-1.909-.58-3.399-.644s-1.97-.081-5.772-.074-4.278,.024-5.771,.096m.164,25.309c-1.365-.059-2.106-.286-2.6-.476-.654-.252-1.12-.557-1.612-1.044s-.795-.955-1.05-1.608c-.192-.494-.423-1.234-.487-2.599-.069-1.475-.084-1.918-.092-5.656s.006-4.18,.071-5.656c.058-1.364,.286-2.106,.476-2.6,.252-.655,.556-1.12,1.044-1.612s.955-.795,1.608-1.05c.493-.193,1.234-.422,2.598-.487,1.476-.07,1.919-.084,5.656-.092,3.737-.008,4.181,.006,5.658,.071,1.364,.059,2.106,.285,2.599,.476,.654,.252,1.12,.555,1.612,1.044s.795,.954,1.051,1.609c.193,.492,.422,1.232,.486,2.597,.07,1.476,.086,1.919,.093,5.656,.007,3.737-.006,4.181-.071,5.656-.06,1.365-.286,2.106-.476,2.601-.252,.654-.556,1.12-1.045,1.612s-.955,.795-1.608,1.05c-.493,.192-1.234,.422-2.597,.487-1.476,.069-1.919,.084-5.657,.092s-4.18-.007-5.656-.071M21.779,8.517c.002,.928,.755,1.679,1.683,1.677s1.679-.755,1.677-1.683c-.002-.928-.755-1.679-1.683-1.677,0,0,0,0,0,0-.928,.002-1.678,.755-1.677,1.683m-12.967,7.496c.008,3.97,3.232,7.182,7.202,7.174s7.183-3.232,7.176-7.202c-.008-3.97-3.233-7.183-7.203-7.175s-7.182,3.233-7.174,7.203m2.522-.005c-.005-2.577,2.08-4.671,4.658-4.676,2.577-.005,4.671,2.08,4.676,4.658,.005,2.577-2.08,4.671-4.658,4.676-2.577,.005-4.671-2.079-4.676-4.656h0">
                                    </path>
                                </svg>
                            </a>
                            <a href="https://wa.me/+6281231260035" style="display: flex; align-items: center;">
                                <svg class="socmed-icon" xmlns="http://www.w3.org/2000/svg" width="17"
                                    viewBox="0 0 32 32">
                                    <path
                                        d="M25.873,6.069c-2.619-2.623-6.103-4.067-9.814-4.069C8.411,2,2.186,8.224,2.184,15.874c-.001,2.446,.638,4.833,1.852,6.936l-1.969,7.19,7.355-1.929c2.026,1.106,4.308,1.688,6.63,1.689h.006c7.647,0,13.872-6.224,13.874-13.874,.001-3.708-1.44-7.193-4.06-9.815h0Zm-9.814,21.347h-.005c-2.069,0-4.099-.557-5.87-1.607l-.421-.25-4.365,1.145,1.165-4.256-.274-.436c-1.154-1.836-1.764-3.958-1.763-6.137,.003-6.358,5.176-11.531,11.537-11.531,3.08,.001,5.975,1.202,8.153,3.382,2.177,2.179,3.376,5.077,3.374,8.158-.003,6.359-5.176,11.532-11.532,11.532h0Zm6.325-8.636c-.347-.174-2.051-1.012-2.369-1.128-.318-.116-.549-.174-.78,.174-.231,.347-.895,1.128-1.098,1.359-.202,.232-.405,.26-.751,.086-.347-.174-1.464-.54-2.788-1.72-1.03-.919-1.726-2.054-1.929-2.402-.202-.347-.021-.535,.152-.707,.156-.156,.347-.405,.52-.607,.174-.202,.231-.347,.347-.578,.116-.232,.058-.434-.029-.607-.087-.174-.78-1.88-1.069-2.574-.281-.676-.567-.584-.78-.595-.202-.01-.433-.012-.665-.012s-.607,.086-.925,.434c-.318,.347-1.213,1.186-1.213,2.892s1.242,3.355,1.416,3.587c.174,.232,2.445,3.733,5.922,5.235,.827,.357,1.473,.571,1.977,.73,.83,.264,1.586,.227,2.183,.138,.666-.1,2.051-.839,2.34-1.649,.289-.81,.289-1.504,.202-1.649s-.318-.232-.665-.405h0Z"
                                        fill-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->

    @include('partials.popup-success')
@endsection
