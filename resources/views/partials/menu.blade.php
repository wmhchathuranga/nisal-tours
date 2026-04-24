<!--============================== Sidemenu ============================== -->

<style>
    /* Custom Auth Buttons Styling */
    .custom-auth-btn {
        padding: 10px 24px;
        font-size: 15px;
        /* font-weight: 600; */
        border-radius: 6px;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
        text-align: center;
        line-height: 1;
    }

    .btn-login-custom {
        background-color: transparent;
        color: #1a1a1a;
        border: 1px solid #d1d5db;
    }

    .btn-login-custom:hover {
        background-color: #f3f4f6;
        color: #000;
        border-color: #9ca3af;
    }

    /* Oyalage theme eke thiyena blue color eka mekata damma (Novara Holidays logo color) */
    .btn-register-custom {
        background-color: #1db1d0;
        color: #ffffff !important;
        border: 1px solid #1db1d0;
        box-shadow: 0 2px 4px rgba(29, 177, 208, 0.2);
    }

    .btn-register-custom:hover {
        background-color: #1796b0;
        border-color: #1796b0;
        box-shadow: 0 4px 6px rgba(29, 177, 208, 0.3);
        transform: translateY(-1px);
    }

    .mobile-auth-wrap {
        display: flex;
        flex-direction: column;
        gap: 12px;
        padding: 25px 20px;
        border-top: 1px solid #e5e7eb;
        margin-top: 15px;
    }
</style>

<div class="sidemenu-wrapper sidemenu-info ">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
        <div class="widget  ">
            <div class="th-widget-about">
                <div class="about-logo">
                    <a href="{{ route('home') }}"><img src="assets/img/logo2.svg" alt="Bitrate"></a>
                </div>
                <p class="about-text">Rapidiously myocardinate cross-platform intellectual capital model. Appropriately
                    create interactive infrastructures</p>
                <div class="th-social">
                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
        <div class="widget  ">
            <h3 class="widget_title">Recent Posts</h3>
            <div class="recent-post-wrap">
                <div class="recent-post">
                    <div class="media-img">
                        <a href="#"><img src="assets/img/blog/recent-post-1-1.jpg" alt="Blog Image"></a>
                    </div>
                    <div class="media-body">
                        <div class="recent-post-meta">
                            <a href="#"><i class="far fa-calendar"></i>24 Jun , 2025</a>
                        </div>
                        <h4 class="post-title"><a class="text-inherit" href="#">Where Vision Meets Concrete
                                Reality</a></h4>
                    </div>
                </div>
                <div class="recent-post">
                    <div class="media-img">
                        <a href="#"><img src="assets/img/blog/recent-post-1-2.jpg" alt="Blog Image"></a>
                    </div>
                    <div class="media-body">
                        <div class="recent-post-meta">
                            <a href="#"><i class="far fa-calendar"></i>22 Jun , 2025</a>
                        </div>
                        <h4 class="post-title"><a class="text-inherit" href="#">Raising the Bar in
                                Construction.</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget  ">
            <h3 class="widget_title">Get In Touch</h3>
            <div class="th-widget-contact">
                <div class="info-box_text">
                    <div class="icon">
                        <img src="assets/img/icon/phone.svg" alt="img">
                    </div>
                    <div class="details">
                        <p><a href="tel:+01234567890" class="info-box_link">+01 234 567 890</a></p>
                        <p><a href="tel:+09876543210" class="info-box_link">+09 876 543 210</a></p>
                    </div>
                </div>
                <div class="info-box_text">
                    <div class="icon">
                        <img src="assets/img/icon/envelope.svg" alt="img">
                    </div>
                    <div class="details">
                        <p><a href="mailto:mailinfo00@****" class="info-box_link">mailinfo00@****</a></p>
                        <p><a href="mailto:support24@****" class="info-box_link">support24@****</a></p>
                    </div>
                </div>
                <div class="info-box_text">
                    <div class="icon"><img src="assets/img/icon/location-dot.svg" alt="img"></div>
                    <div class="details">
                        <p>789 Inner Lane, Holy park, California, USA</p>jki89
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="popup-search-box">
    <button class="searchClose"><i class="fal fa-times"></i></button>
    <form action="#">
        <input type="text" placeholder="What are you looking for?">
        <button type="submit"><i class="fal fa-search"></i></button>
    </form>
</div>

<!--============================== Mobile Menu ============================== -->
<div class="th-menu-wrapper onepage-nav">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="{{ route('home') }}"><img src="assets/img/logo2.svg" alt="Bitrate"></a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li><a class="{{ $page == 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                <li><a class="{{ $page == 'services' ? 'active' : '' }}" href="{{ route('services') }}">Services</a>
                </li>
                <li><a class="{{ $page == 'contact' ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
                <li><a class="{{ $page == 'about' ? 'active' : '' }}" href="{{ route('about') }}">About Us</a></li>
            </ul>
            <div class="mobile-auth-wrap">
                @guest
                    <a href="{{ route('login') }}" class="custom-auth-btn btn-login-custom">Login</a>
                    <a href="{{ route('register') }}" class="custom-auth-btn btn-register-custom">Register</a>
                @else
                    @if (auth()->user()->role === 'admin')
                        <a href="{{ route('admin.testimonials.index') }}" target="_blank"
                            class="custom-auth-btn btn-login-custom">Dashboard</a>
                    @endif

                    <form method="POST" action="{{ route('logout') }}" style="display: flex; flex-direction: column;">
                        @csrf
                        <button type="submit" class="custom-auth-btn btn-register-custom w-100">Logout</button>
                    </form>
                @endguest
            </div>
        </div>
    </div>
</div>


<!--======= Header Area ===============-->
<header class="th-header header-layout1 position-absolute w-100">

    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="menu-area">
            <div class="container th-container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto position-absolute">
                        <div class="header-logo">
                            <a href="{{ route('home') }}"><img src="assets/img/logo.svg" alt="Bitrate"></a>
                        </div>
                    </div>
                    <div class="col-auto m-xl-auto ms-auto">
                        <nav class="main-menu d-none d-xl-inline-block p-0">
                            <ul>
                                <li><a class="{{ $page == 'home' ? 'active' : '' }}"
                                        href="{{ route('home') }}">Home</a></li>
                                <li><a class="{{ $page == 'services' ? 'active' : '' }}"
                                        href="{{ route('services') }}">Services</a></li>
                                <li><a class="{{ $page == 'contact' ? 'active' : '' }}"
                                        href="{{ route('contact') }}">Contact</a></li>
                                <li><a class="{{ $page == 'about' ? 'active' : '' }}"
                                        href="{{ route('about') }}">About Us</a></li>
                            </ul>
                        </nav>
                        <button type="button" class="th-menu-toggle d-block d-xl-none"><i
                                class="far fa-bars"></i></button>
                    </div>
                    <div class="col-auto position-absolute end-0 d-flex align-items-center pe-3">

                        <div class="desktop-auth-wrap d-none d-xl-flex gap-3">
                            @guest
                                <a href="{{ route('login') }}" class="custom-auth-btn btn-login-custom">Login</a>
                                <a href="{{ route('register') }}"
                                    class="custom-auth-btn btn-register-custom">Register</a>
                            @else
                                @if (auth()->user()->role === 'admin')
                                    <a href="{{ route('admin.testimonials.index') }}" target="_blank"
                                        class="custom-auth-btn btn-login-custom">Dashboard</a>
                                @endif
                                <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
                                    @csrf
                                    <button type="submit" class="custom-auth-btn btn-register-custom">Logout</button>
                                </form>
                            @endguest
                        </div>

                    </div>
                </div>
            </div>
            <div class="logo-bg" data-mask-src="assets/img/logo_bg_mask.png"></div>
        </div>
    </div>
</header>
