<!DOCTYPE html>
<html lang="en">
    <!doctype html>
    <html class="no-js" lang="zxx">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>404 Error - {{ config('app.name') }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/favicon.ico') }}">
        <!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/swiper.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/flatpickr.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/chosen.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/dropzone.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/nouislider.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/fontawesome-pro.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/icomoon.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/spacing.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">
    </head>
	
<body>
    <!-- preloader start -->
    <div id="preloader">
        <div class="bd-three-bounce">
            <div class="bd-child bd-bounce1"></div>
            <div class="bd-child bd-bounce2"></div>
            <div class="bd-child bd-bounce3"></div>
        </div>
    </div>
    <!-- preloader end -->

	<!-- Header area start -->
    <header>
        <div id="header-sticky" class="header-area header-style header-style-one has-border">
            <div class="container">
                <div class="mega-menu-wrapper p-relative">
                    <div class="header-main">
                        <div class="header-left">
                            <div class="header-logo">
                                <a href="{{route('home')}}" class="logo-primary">
                                    <img src="{{asset('frontend/assets/images/logo/logo.png') }}" alt="{{asset('frontend/assets/images/logo/logo.png') }}">
                                </a>
                                <a href="{{route('home')}}" class="logo-secondary">
                                    <img src="{{asset('frontend/assets/images/logo/logo.png') }}" alt="{{asset('frontend/assets/images/logo/logo.png') }}">
                                </a>
                            </div>
                            <div class="header-menu">
                                <nav class="main-menu" id="mobile-menu">
                                    <ul>
                                        <li class="has-mega-menu">
                                            <a href="{{ route('home') }}">Home</a>
                                        </li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="{{route('girl')}}">Girls</a></li>
                                        <li><a href="{{route('event')}}">Events</a></li>
                                        <li><a href="{{route('progress')}}">Progress</a></li>
                                        <li><a href="{{route('material')}}">Materials</a></li>
                                        <li><a href="{{route('skill')}}">Skills</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header-right">
                            <div class="header-action d-flex align-items-center">
                                <div class="header-btn-wrap d-flex align-items-center h-gap-55">
                                    <div class="d-none d-sm-inline-flex h-gap-55">
                                        <div class="header-currency-item header-currency">
                                            <span class="header-currency-toggle" id="header-currency-toggle">USD</span>
                                            <ul>
                                                <li>
                                                    <a href="#">TSHS</a>
                                                </li>
                                                <li>
                                                    <a href="#">GBP</a>
                                                </li>
                                                <li>
                                                    <a href="#">EURO</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-hamburger ml-20 d-xl-none">
                                    <div class="sidebar-toggle">
                                        <a class="bar-icon" href="javascript:void(0)">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                                <!-- for wp -->
                                <div class="header-hamburger ml-20 d-none">
                                    <button type="button" class="hamburger-btn offcanvas-open-btn">
                                        <span>01</span>
                                        <span>01</span>
                                        <span>01</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header area end -->

    <!-- Body main wrapper start -->
    <main>
        <!-- breadcrumb area start -->
        <section class="bd-breadcrumb-area p-relative fix">
            <!-- breadcrumb background image -->
            <div class="bd-breadcrumb-bg" data-background="{{ asset('frontend/assets/images/bg/breadcrumb-bg.png') }}"></div>
            <div class="bd-breadcrumb-wrapper p-relative">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="bd-breadcrumb d-flex align-items-center justify-content-center">
                                <div class="bd-breadcrumb-content text-center">
                                    <h1 class="bd-breadcrumb-title">Error 404</h1>
                                    <div class="bd-breadcrumb-list">
                                        <span><a href="{{route('home')}}"><i class="icon-home"></i>Home</a></span>
                                        <span>Error 404</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- contact form area start -->
        <section class="bd-contact-form section-space">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-8 col-xl-8 col-lg-6 col-md-8">
                        <div class="section-title-wrapper text-center">
                            <div class="error-thumb mb-20 wow fadeInUp">
                                <img src="{{ asset('frontend/assets/images/bg/404.png') }}" alt="image">
                            </div>
                            <h2 class="section-title mb-20">Oops! That page can't be found.</h2>
                            <p>We're really sorry but we can't seem to find the page you were looking for.</p>
                            <div class="error-btn">
                                <a href="{{route('home')}}" class="bd-primary-btn btn-style has-arrow radius-60">
                                    <span class="bd-primary-btn-arrow arrow-right"><i class="fa-regular fa-arrow-right"></i></span>
                                    <span class="bd-primary-btn-text">Go Back Home</span>
                                    <span class="bd-primary-btn-circle"></span>
                                    <span class="bd-primary-btn-arrow arrow-left"><i class="fa-regular fa-arrow-right"></i></span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact form area end -->

    </main>
    <!-- Body main wrapper end -->
    
    <!-- Footer area start -->
    <footer class="bd-footer-area theme-bg-secondary">
        <div class="footer-top section-space">
            <div class="container">
                <div class="row gy-24 align-items-center justify-content-between">
                    <div class="col-xxl-5 col-xl-5 col-lg-6">
                        <div class="footer-support-wrapper">
                            <div class="footer-support-thumb">
                                <img src="{{ asset('frontend/assets/images/shapes/support-img.png') }}" alt="image">
                            </div>
                            <h4 class="footer-support-title white-text">Need Support for your Programs?</h4>
                            <div class="footer-support-btn">
                                <a class="bd-icon-btn has-big hover-style" href="#" target="_blank"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="footer-support-wrapper right-side">
                            <div class="footer-support-thumb">
                                <img src="{{ asset('frontend/assets/images/shapes/support-img-two.png') }}" alt="image">
                            </div>
                            <h4 class="footer-support-title white-text">Ready to Get Started With Programs!</h4>
                            <div class="footer-support-btn">
                                <a class="bd-icon-btn has-big hover-style" href="#" target="_blank"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bd-footer section-space">
            <div class="container">
                <div class="row gy-24">
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                        <div class="footer-widget footer-4-col-1">
                            <div class="footer-widget-logo mb-25">
                                <a href="{{route('home')}}">
                                    <img src="{{ asset('frontend/assets/images/logo/logo.png')}}" alt="logo not found">
                                </a>
                            </div>
                            <div class="footer-widget-content">
                                <p>
                                    CDC Dreams program focused on empowering adolescent girls
                                    and young women (AGYW). This program aims to reduce HIV infections through
                                    education, mentorship, skills training, and support services.
                                </p>
                                <div class="theme-social is-white-color">
                                    <a href="#"><i class="icon-facebook"></i></a>
                                    <a href="#"><i class="icon-instagram"></i></a>
                                    <a href="#" target="blank"><i class="icon-trip"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6">
                        <div class="footer-widget footer-4-col-2">
                            <h5 class="footer-widget-title white-text">Company</h5>
                            <div class="footer-widget-links has-white">
                                <ul>
                                    <li class="underline-two"><a href="{{route('home')}}">Home</a></li>
                                    <li class="underline-two"><a href="#">About Us</a></li>
                                    <li class="underline-two"><a href="{{route('girl')}}">Girls</a></li>
                                    <li class="underline-two"><a href="{{route('event')}}">Events</a><span class="bd-badge warning">New</span>
                                    </li>
                                    <li class="underline-two"><a href="#">Contact Now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                        <div class="footer-widget footer-4-col-3">
                            <h5 class="footer-widget-title white-text">Newsletter</h5>
                            <div class="footer-widget-content">
                                <p>Subscribe our newsletter to get our latest <br> update & news.</p>
                                <div class="footer-form mb-15">
                                    <form action="#">
                                        <div class="footer-subscribe">
                                            <input type="email" placeholder="Email address">
                                            <button type="submit"> <i class="fa-solid fa-paper-plane"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="footer-form-check">
                                    <label class="footer-form-check-label">
                                        <input type="checkbox">
                                        <svg viewBox="0 0 64 64" height="2em" width="2em">
                                            <path d="M 0 16 V 56 A 8 8 90 0 0 8 64 H 56 A 8 8 90 0 0 64 56 V 8 A 8 8 90 0 0 56 0 H 8 A 8 8 90 0 0 0 8 V 16 L 32 48 L 64 16 V 8 A 8 8 90 0 0 56 0 H 8 A 8 8 90 0 0 0 8 V 56 A 8 8 90 0 0 8 64 H 56 A 8 8 90 0 0 64 56 V 16" pathLength="575.0541381835938" class="path"></path>
                                        </svg> I agree to all terms and policies
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                        <div class="footer-widget footer-4-col-4">
                            <h5 class="footer-widget-title white-text">Contact Us</h5>
                            <div class="footer-widget-list-wrapper">
                                <ul class="footer-widget-list-items">
                                    <li class="footer-widget-list-single-item">
                                        <span class="footer-widget-list-icon"><i class="icon-call"></i></span>
                                        <span class="footer-widget-list-text">
                                <span class="footer-widget-list-text-top">
                                    Call Us
                                </span>
                                        <a href="tel:+256-417-119100">+256-417-119100</a>
                                        </span>
                                    </li>
                                    <li class="footer-widget-list-single-item">
                                        <span class="footer-widget-list-icon"><i class="icon-envelope"></i></span>
                                        <span class="footer-widget-list-text">
                                <span class="footer-widget-list-text-top">
                                    Email Us
                                </span>
                                        <a href="mailto:admin@baylor-uganda.org">admin@baylor-uganda.org</a>
                                        </span>
                                    </li>
                                    <li class="footer-widget-list-single-item">
                                        <span class="footer-widget-list-icon"><i class="icon-location-fill"></i></span>
                                        <span class="footer-widget-list-text">
                                <span class="footer-widget-list-text-top">
                                    Our office
                                </span>
                                        <a href="#">Block 5 Mulago Hospital. P.O Box 72052, Kampala, Uganda
                                        </a>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area border-two">
            <div class="container">
                <div class="row gy-24 align-items-center justify-content-between align-content-end">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <div class="footer-copyright has-white">
                            <p>Copyright @<script>document.write(new Date().getFullYear());</script>
                                <a href="#" target="_blank" style="color: orange;">
                                    {{ config('app.name') }}
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-5 col-md-6 col-12">
                        <div class="footer-card">
                            <img src="{{ asset('frontend/assets/images/icons/payment-option-white.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer area end -->

    <!-- Javascript Files
        ================================================== -->

         <!-- back to top -->
    <!-- Backtotop start -->
    <div class="backtotop-wrap cursor-pointer">
        <svg class="backtotop-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Backtotop end -->

    <!-- JS here -->
    <script src="{{ asset('frontend/assets/js/vendor/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/meanmenu.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/swiper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/dropzone.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/purecounter.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/nouislider.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/cleave.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/flatpickr.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/tinymce.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/ajax-form.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
</body>
</html>