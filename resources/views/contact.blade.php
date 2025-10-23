<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('partials.head')
</head>

<body>

    @include('partials.loader')
    @php
        $page = 'contact';
    @endphp
    @include('partials.menu')

    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper" style="background-position:center;" data-bg-src="assets/img/hero/hero_bg_1_1.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact Us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
Contact Area
==============================-->
    <div class="space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Get In Touch</span>
                <h2 class="sec-title">Our Contact Information</h2>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-xl-4 col-lg-6">
                    <div class="about-contact-grid style2">
                        <div class="about-contact-icon">
                            <img src="assets/img/icon/location-dot2.svg" alt="">
                        </div>
                        <div class="about-contact-details">
                            <h6 class="box-title">Our Address</h6>
                            <p class="about-contact-details-text">......</p>
                            <p class="about-contact-details-text">........</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="about-contact-grid">
                        <div class="about-contact-icon">
                            <img src="assets/img/icon/call.svg" alt="">
                        </div>
                        <div class="about-contact-details">
                            <h6 class="box-title">Phone Number</h6>
                            <p class="about-contact-details-text"><a href="tel:01234567890">+01 ************</a></p>
                            <p class="about-contact-details-text"><a href="tel:01234567890">+09 ************</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="about-contact-grid">
                        <div class="about-contact-icon">
                            <img src="assets/img/icon/mail.svg" alt="">
                        </div>
                        <div class="about-contact-details">
                            <h6 class="box-title">Email Address</h6>
                            <p class="about-contact-details-text"><a href="mailto:mailinfo***.com">mailinfo***.com</a>
                            </p>
                            <p class="about-contact-details-text"><a href="mailto:support***.com">support***.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
Video Area
==============================-->

    <div class="space-extra2-top space-extra2-bottom" data-bg-src="assets/img/hero/hero_bg_1_3.jpg">
        <div class="container">
            <div class="row flex-row-reverse justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="video-box1">
                        <a href="https://www.youtube-nocookie.com/embed/OxFOuZCokLk?si=i-wpwrqSWKA0vaOR"
                            class="play-btn style2 popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div>
                        <form action="mail.php" method="POST" class="contact-form style2 ajax-contact">
                            <h3 class="sec-title mb-30 text-capitalize">Book a tour</h3>
                            <div class="row">
                                <div class="col-12 form-group">
                                    <input type="text" class="form-control" name="name" id="name3"
                                        placeholder="First Name">
                                    <img src="assets/img/icon/user.svg" alt="">
                                </div>
                                <div class="col-12 form-group">
                                    <input type="email" class="form-control" name="email3" id="email3"
                                        placeholder="Your Mail">
                                    <img src="assets/img/icon/mail.svg" alt="">
                                </div>
                                {{-- <div class="form-group col-12">
                                    <select name="subject" id="subject" class="form-select nice-select">
                                        <option value="Select Tour Type" selected disabled>Select Tour Type
                                        </option>
                                        <option value="Africa Adventure">Africa Adventure</option>
                                        <option value="Africa Wild">Africa Wild</option>
                                        <option value="Asia">Asia</option>
                                        <option value="Scandinavia">Scandinavia</option>
                                        <option value="Western Europe">Western Europe</option>
                                    </select>
                                </div> --}}
                                <div class="form-group col-12">
                                    <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message"></textarea>
                                    <img src="assets/img/icon/chat.svg" alt="">
                                </div>
                                <div class="form-btn col-12 mt-24">
                                    <button type="submit" class="th-btn-whatsapp">
                                        <i class="fab fa-whatsapp me-2 text-white"></i> Send message
                                   </button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--============================== Map Area ==============================-->
    {{-- <div class="">
        <div class="container-fluid">
            <div class="contact-map style2">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sAngfuztheme!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd"
                    allowfullscreen="" loading="lazy"></iframe>
                <div class="contact-icon">
                    <img src="assets/img/icon/location-dot3.svg" alt="">
                </div>
            </div>
        </div>
    </div> --}}
    <!--============================== Footer Area ==============================-->
    <footer class="footer-wrapper bg-title footer-layout2">
        <div class="widget-area">
            <div class="container">
                <div class="newsletter-area">
                    <div class="newsletter-top">
                        <div class="row gy-4 align-items-center">
                            <div class="col-lg-5">
                                <h2 class="newsletter-title text-white text-capitalize mb-0">get updated the latest
                                    newsletter</h2>
                            </div>
                            <div class="col-lg-7">
                                <form class="newsletter-form style2">
                                    <input class="form-control " type="email" placeholder="Enter Email"
                                        required="">
                                    <button type="submit" class="th-btn style1">Subscribe Now <img
                                            src="assets/img/icon/plane2.svg" alt=""></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo">
                                    <a href="home-travel.html"><img src="assets/img/logo-white.svg"
                                            alt="Tourm"></a>
                                </div>
                                <p class="about-text">Rapidiously myocardinate cross-platform intellectual capital
                                    model. Appropriately create interactive infrastructures</p>
                                <div class="th-social">
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                                    <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Quick Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">

                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About us</a></li>
                                    <li><a href="service.html">Our Service</a></li>
                                    <li><a href="contact.html">Terms of Service</a></li>
                                    <li><a href="contact.html">Tour Booking Now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
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
                                        <p><a href="mailto:mailinfo***.com" class="info-box_link">mailinfo***.com</a>
                                        </p>
                                        <p><a href="mailto:support***.com" class="info-box_link">support***.com</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="info-box_text">
                                    <div class="icon"><img src="assets/img/icon/location-dot.svg" alt="img">
                                    </div>
                                    <div class="details">
                                        <p>789 Inner Lane, Holy park, California, USA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Instagram Post</h3>
                            <div class="sidebar-gallery">
                                <div class="gallery-thumb">
                                    <img src="assets/img/widget/gallery_1_1.jpg" alt="Gallery Image">
                                    <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="assets/img/widget/gallery_1_2.jpg" alt="Gallery Image">
                                    <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="assets/img/widget/gallery_1_3.jpg" alt="Gallery Image">
                                    <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="assets/img/widget/gallery_1_4.jpg" alt="Gallery Image">
                                    <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="assets/img/widget/gallery_1_5.jpg" alt="Gallery Image">
                                    <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="assets/img/widget/gallery_1_6.jpg" alt="Gallery Image">
                                    <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6">
                        <p class="copyright-text">Copyright 2025 <a href="home-travel.html">Tourm</a>. All Rights
                            Reserved.</p>
                    </div>
                    <div class="col-md-6 text-end d-none d-md-block">
                        <div class="footer-card">
                            <span class="title">We Accept</span>
                            <img src="assets/img/shape/cards.png" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="shape-mockup movingX d-none d-xxl-block" data-top="24%" data-left="5%">
            <img src="assets/img/shape/shape_8.png" alt="shape">
        </div>
    </footer>

    <!--********************************
   Code End  Here
 ******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
    <!--==============================
modal Area
==============================-->
    <div id="login-form" class="popup-login-register mfp-hide">
        <ul class="nav" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-menu" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="false">Login</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-menu active" id="pills-profile-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                    aria-selected="true">Register</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <h3 class="box-title mb-30">Sign in to your account</h3>
                <div class="th-login-form">
                    <form action="mail.php" method="POST" class="login-form ajax-contact">
                        <div class="row">
                            <div class="form-group col-12">
                                <label>Username or email</label>
                                <input type="text" class="form-control" name="email" id="email"
                                    required="required">
                            </div>
                            <div class="form-group col-12">
                                <label>Password</label>
                                <input type="password" class="form-control" name="pasword" id="pasword"
                                    required="required">
                            </div>

                            <div class="form-btn mb-20 col-12">
                                <button class="th-btn btn-fw th-radius2 ">Send Message</button>
                            </div>
                        </div>
                        <div id="forgot_url">
                            <a href="my-account.html">Forgot password?</a>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade active show" id="pills-profile" role="tabpanel"
                aria-labelledby="pills-profile-tab">
                <h3 class="th-form-title mb-30">Sign in to your account</h3>
                <form action="mail.php" method="POST" class="login-form ajax-contact">
                    <div class="row">
                        <div class="form-group col-12">
                            <label>Username*</label>
                            <input type="text" class="form-control" name="usename" id="usename"
                                required="required">
                        </div>
                        <div class="form-group col-12">
                            <label>First name*</label>
                            <input type="text" class="form-control" name="firstname" id="firstname"
                                required="required">
                        </div>
                        <div class="form-group col-12">
                            <label>Last name*</label>
                            <input type="text" class="form-control" name="lastname" id="lastname"
                                required="required">
                        </div>
                        <div class="form-group col-12">
                            <label for="new_email">Your email*</label>
                            <input type="text" class="form-control" name="new_email" id="new_email"
                                required="required">
                        </div>
                        <div class="form-group col-12">
                            <label for="new_email_confirm">Confirm email*</label>
                            <input type="text" class="form-control" name="new_email_confirm"
                                id="new_email_confirm" required="required">
                        </div>
                        <div class="statement">
                            <span class="register-notes">A password will be emailed to you.</span>
                        </div>

                        <div class="form-btn mt-20 col-12">
                            <button class="th-btn btn-fw th-radius2 ">Sign up</button>
                        </div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </form>
            </div>
        </div>
    </div>

    <!--========== All Js File =========== -->
    @include('partials.scripts')

</body>

</html>
