<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@include('frontend.layouts.head')	

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
    
        @include('frontend.layouts.header')

        <!-- Offcanvas area start -->
        <div class="fix">
            <div class="offcanvas-area">
                <div class="offcanvas-wrapper">
                    <div class="offcanvas-content">
                        <div class="offcanvas-top d-flex justify-content-between align-items-center mb-25">
                            <div class="offcanvas-logo">
                                <a href="{{route('home')}}">
                                    <img src="{{ asset('frontend/assets/images/logo/logo.png') }}" alt="logo not found">
                                </a>
                            </div>
                            <div class="offcanvas-close">
                                <button class="offcanvas-close-icon animation--flip">
                                    <span class="offcanvas-m-lines">
                                    <span class="offcanvas-m-line line--1"></span><span
                                        class="offcanvas-m-line line--2"></span><span
                                        class="offcanvas-m-line line--3"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="offcanvas-search mb-0">
                            <form action="#">
                                <input type="text" name="offcanvasSearch" placeholder="Search here">
                                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                        <div class="mobile-menu fix mb-25"></div>
                        <div class="offcanvas-about d-none d-lg-block mb-25">
                            <h4 class="offcanvas-title-meta">About Zanzibar Point of Tours and Safaris</h4>
                            <p>Explore stunning destinations and create immersive travel experiences that inspire wanderlust and
                                captivate your audience from the start.</p>
                        </div>
                        <div class="offcanvas-contact mb-25">
                            <h4 class="offcanvas-title-meta">Contact Info</h4>
                            <ul>
                                <li class="d-flex align-items-center gap-10">
                                    <div class="offcanvas-contact-icon">
                                        <a target="_blank" href="#">
                                            <i class="fal fa-map-marker-alt"></i></a>
                                    </div>
                                    <div class="offcanvas-contact-text">
                                        <a target="_blank" href="#">Stone Town Zanzibar</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center gap-10">
                                    <div class="offcanvas-contact-icon">
                                        <a href="tel:+255774862939"><i class="far fa-phone"></i></a>
                                    </div>
                                    <div class="offcanvas-contact-text">
                                        <a href="tel:+255774862939">+255774862939</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center gap-10">
                                    <div class="offcanvas-contact-icon">
                                        <a href="mailto:info@zanzibarpointtours.com"><i class="fal fa-envelope"></i></a>
                                    </div>
                                    <div class="offcanvas-contact-text">
                                        <a href="mailto:info@zanzibarpointtours.com">info@zanzibarpointtours.com</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="offcanvas-social">
                            <h4 class="offcanvas-title-meta">Subscribe & Follow</h4>
                            <ul>
                                <li><a href="https://www.facebook.com/profile.php?id=100066756278990"><i class="icon-facebook"></i></a></li>
                                <li><a href="https://instagram.com/zanzibarpointtoursandsafaris?r=nametag"><i class="icon-instagram"></i></a></li>
                                <li><a class="linkedin" href="https://www.tripadvisor.com/Attraction_Review-g488129-d25245165-Reviews-Zanzibar_Point_Tours_Safaris-Stone_Town_Zanzibar_City_Zanzibar_Island_Zanzibar_A.html" target="blank"><i
                                    class="icon-trip"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas-overlay"></div>
        <div class="offcanvas-overlay-white"></div>
        <!-- Offcanvas area start -->

    <!-- search popup area start here  -->
    <div class="bd-search-popup-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bd-search-popup">
                        <div class="bd-search-form">
                            <form action="#">
                                <div class="bd-search-input">
                                    <input type="search" name="search" placeholder="Type here to serach ...">
                                    <div class="bd-search-submit">
                                        <button type="submit"><i class="fa-regular fa-magnifying-glass"></i></button>
                                    </div>
                                </div>
                            </form>
                            <div class="bd-search-close">
                                <div class="bd-search-close-btn">
                                    <button><i class="fa-thin fa-close"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- search popup overlay  -->
    <div class="bd-search-overlay"></div>
    <!-- search popup area end here  -->

        @yield('main-content')
        
        @include('frontend.layouts.footer')
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