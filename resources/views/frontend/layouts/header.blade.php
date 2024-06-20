<!-- Header area start -->
<header>
    <!-- header top bar start -->
    <div class="header-top-area bg-theme-primary d-none d-sm-block">
        <div class="container">
            <div class="header-top-main">
                <div class="header-top-left d-flex align-items-center">
                    <div class="header-top-left-item">
                        <span><i class="fa-solid fa-location-dot"></i></span>
                        <a href="#">Block 5 Mulago Hospital. P.O Box 72052, Kampala, Uganda
                        </a>
                    </div>
                    <div class="header-top-left-item">
                        <span><i class="fa-solid fa-envelope"></i></span>
                        <a href="mailto:admin@baylor-uganda.org">admin@baylor-uganda.org</a>
                    </div>
                </div>
                <div class="heder-top-right d-none d-md-flex align-items-center gap-3">
                    <div class="topbar-social">
                        <ul>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                            <li><a href="#" target="blank"><i class="icon-trip"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header top bar end -->
    <div id="header-sticky" class="header-area">
        <div class="container">
            <div class="mega-menu-wrapper p-relative">
                <div class="header-main">
                    <div class="header-left">
                        <div class="header-logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('frontend/assets/images/logo/logo.png') }}" alt="logo not found">
                            </a>
                        </div>
                        <div class="mean-menu-wrapper d-none d-xl-block">
                            <div class="main-menu">
                                <nav class="main-menu main-menu-three" id="mobile-menu">
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
                    </div>
                    <div class="header-right">
                        <div class="header-action d-flex align-items-center">
                            <div class="header-btn-wrap">
                                <div class="d-none d-xs-inline-flex gap-15 align-items-center">
                                    <div class="bd-search-btn-wrapper">
                                        <button class="bd-search-open-btn">
                                            <i class="fa-regular fa-magnifying-glass"></i>
                                        </button>
                                    </div>
                                    <div class="header-currency-item style-two header-currency">
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
                                    <div class="header-language-item header-language">
                                        <span class="header-language-toggle" id="header-language-toggle">Eng</span>
                                        <ul>
                                            <li>
                                                <a href="#">Are</a>
                                            </li>
                                            <li>
                                                <a href="#">Ita</a>
                                            </li>
                                            <li>
                                                <a href="#">Rus</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="header-hamburger">
                                <div class="sidebar-toggle">
                                    <a class="bar-icon-square" href="javascript:void(0)">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
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