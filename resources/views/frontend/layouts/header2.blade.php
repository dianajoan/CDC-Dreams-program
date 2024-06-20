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