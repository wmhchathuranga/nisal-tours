<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('partials.head')

    <link rel="stylesheet" href="{{ asset('css/page/resort-details.css') }}">
</head>

<body>

    @include('partials.loader')
    @php
        $page = 'resort-details';
    @endphp
    @include('partials.menu')

    

    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/hero/hero_bg_3_3.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Resort Details</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-travel.html">Home</a></li>
                    <li>Resort Details</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
tour Area
==============================-->
    <section class="space">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="page-single">
                        <div class="service-img global-img"><img src="assets/img/accommodation/arces.jpg" alt=""></div>
                        <div class="page-content d-block">
                            <h3 class="box-title mt-20"><a href="resort-details.html">98 Acres Resort & Spa</a></h3>
                            <p class="blog-text mb-30">This luxury resort is set on a private island in the South Pacific.
                                The overwater bungalows and beachfront villas offer stunning views of the turquoise lagoon
                                and the surrounding mountains.
                                Highlights: Snorkeling, spa treatments, and romantic dining experiences overlooking the
                                ocean.
                                This luxurious private island resort in Tetiaroa offers pristine beaches and a lagoon with
                                incredible ocean views. It’s an eco-friendly resort focused on sustainability.
                                Highlights: Snorkeling, kayaking, and luxurious spa treatments with an ocean backdrop.</p>
                            <p class="blog-text mb-35">Ocean View Resort typically refers to a coastal resort that provides
                                stunning views of the ocean from its accommodations and facilities. These resorts are often
                                situated in prime locations along beaches, cliffs, or coastal areas, allowing guests to
                                enjoy the natural beauty of the sea from their rooms, restaurants, pools, and other areas
                                within the property.</p>
                            <h4 class="">Children and extra beds.</h4>
                            <p class="blog-text mb-35">Children are welcome Kids stay free! Children stay free when using
                                existing bedding; children may not be eligible for complimentary breakfast Rollaway/extra
                                beds are available for $ 10 per day.</p>
                            
                        </div>
                        <div class="destination-gallery-wrapper">
                            <h3 class="page-title mt-30 mb-30">From our gallery</h3>
                            <div class="row gy-4 gallery-row filter-active">
                                <div class="col-xxl-auto filter-item">
                                    <div class="gallery-box style3">
                                        <div class="gallery-img global-img">
                                            <img style="width: 312px;height:215px;" src="assets/img/accommodation/resort-01/034.jpg" alt="gallery image">
                                            <a href="assets/img/accommodation/resort-01/034.jpg" class="icon-btn popup-image"><i class="fal fa-magnifying-glass-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-auto filter-item">
                                    <div class="gallery-box style3">
                                        <div class="gallery-img global-img">
                                            <img style="width: 536px;height:215px;" src="assets/img/accommodation/resort-01/56.jpg" alt="gallery image">
                                            <a href="assets/img/accommodation/resort-01/56.jpg" class="icon-btn popup-image"><i class="fal fa-magnifying-glass-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-auto filter-item">
                                    <div class="gallery-box style3">
                                        <div class="gallery-img global-img">
                                            <img style="width: 536px;height:215px;" src="assets/img/accommodation/resort-01/75.jpg" alt="gallery image">
                                            <a href="assets/img/accommodation/resort-01/75.jpg" class="icon-btn popup-image"><i class="fal fa-magnifying-glass-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-auto filter-item">
                                    <div class="gallery-box style3">
                                        <div class="gallery-img global-img">
                                            <img style="width: 312px;height:215px;" src="assets/img/accommodation/resort-01/1556.jpg" alt="gallery image">
                                            <a href="assets/img/accommodation/resort-01/1556.jpg" class="icon-btn popup-image"><i class="fal fa-magnifying-glass-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="th-comments-wrap style2 ">
                            <h2 class="blog-inner-title h4">Reviews (3)</h2>
                            <ul class="comment-list">
                                <li class="th-comment-item">
                                    <div class="th-post-comment">
                                        <div class="comment-avater">
                                            <img src="assets/img/blog/comment-author-1.jpg" alt="Comment Author">
                                        </div>
                                        <div class="comment-content">
                                            <h3 class="name">Adam Jhon</h3>
                                            <div class="commented-wrapp">
                                                <span class="commented-on">20 Jun, 2024</span>
                                                <span class="commented-time">08:56pm </span>
                                                <span class="comment-review">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </span>
                                            </div>
                                            <p class="text">Credibly pontificate transparent quality vectors with quality mindshare. Efficiently
                                                architect worldwide strategic theme areas after user.</p>
                                            <div class="reply_and_edit">
                                                <i class="fa-solid fa-thumbs-up"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="children">
                                        <li class="th-comment-item">
                                            <div class="th-post-comment">
                                                <div class="comment-avater">
                                                    <img src="assets/img/blog/comment-author-4.jpg" alt="Comment Author">
                                                </div>
                                                <div class="comment-content">
                                                    <div class="">
                                                        <h3 class="name">Maria Willson</h3>
                                                        <div class="commented-wrapp">
                                                            <span class="commented-on">23 Jun, 2024</span>
                                                            <span class="commented-time">08:56pm </span>
                                                            <span class="comment-review">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <p class="text">It is different from airport transfer or port transfer, which are services
                                                        that pick you up</p>
                                                    <div class="reply_and_edit">
                                                        <i class="fa-solid fa-thumbs-up"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="th-comment-item">
                                    <div class="th-post-comment">
                                        <div class="comment-avater">
                                            <img src="assets/img/blog/comment-author-5.jpg" alt="Comment Author">
                                        </div>
                                        <div class="comment-content">
                                            <div class="">
                                                <h3 class="name">Michel Edwards</h3>
                                                <div class="commented-wrapp">
                                                    <span class="commented-on">27 Jun, 2024</span>
                                                    <span class="commented-time">08:56pm </span>
                                                    <span class="comment-review">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <p class="text">Credibly pontificate transparent quality vectors with quality mindshare. Efficiently
                                                architect worldwide strategic theme areas after user.</p>
                                            <div class="reply_and_edit">
                                                <i class="fa-solid fa-thumbs-up"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>  --}}
                        <!-- Comment end --> <!-- Comment Form -->
                        {{-- <div class="th-comment-form ">
                            <div class="row">
                                <h3 class="blog-inner-title h4 mb-2">Leave a Reply</h3>
                                <p class="mb-25">Your email address will not be published. Required fields are marked</p>
                                <div class="col-md-6 form-group">
                                    <input type="text" placeholder="Full Name*" class="form-control" required>
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" placeholder="Your Email*" class="form-control" required>
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="col-12 form-group">
                                    <input type="text" placeholder="Website" class="form-control" required>
                                    <i class="far fa-globe"></i>
                                </div>
                                <div class="col-12 form-group">
                                    <textarea placeholder="Comment*" class="form-control"></textarea>
                                    <i class="far fa-pencil"></i>
                                </div>
                                <div class="col-12 form-group">
                                    <input type="checkbox" id="html">
                                    <label for="html">Save my name, email, and website in this browser for the next time I
                                        comment.</label>
                                </div>
                                <div class="col-12 form-group mb-0">
                                    <button class="th-btn-whatsapp">Book Now <i class="fab fa-whatsapp me-2 text-white"></i></button>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area style3">
                        
                        <div class="widget widget_categories  ">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <li>
                                    <a href="blog.html"><img src="assets/img/theme-img/map.svg" alt="">Wildlife Tours</a>
                                    <span>(2)</span>
                                </li>
                                <li>
                                    <a href="blog.html"><img src="assets/img/theme-img/map.svg" alt="">Adventure Tours</a>
                                    <span>(9)</span>
                                </li>
                            </ul>
                        </div>

                        <div class="widget">
                            <h2 class="box-title">Highlights</h2>
                            <ul class="resort-grid-list">
                                <li>
                                    <div class="resort-grid-list-icon">
                                        <img src="assets/img/icon/resort-icon1-1.svg" alt="img">
                                    </div>
                                    <div class="resort-grid-list-details">
                                        <h4 class="resort-grid-list-title">TV</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="resort-grid-list-icon">
                                        <img src="assets/img/icon/resort-icon1-2.svg" alt="img">
                                    </div>
                                    <div class="resort-grid-list-details">
                                        <h4 class="resort-grid-list-title">Free Wifi</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="resort-grid-list-icon">
                                        <img src="assets/img/icon/resort-icon1-3.svg" alt="img">
                                    </div>
                                    <div class="resort-grid-list-details">
                                        <h4 class="resort-grid-list-title">Air Condition</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="resort-grid-list-icon">
                                        <img src="assets/img/icon/resort-icon1-4.svg" alt="img">
                                    </div>
                                    <div class="resort-grid-list-details">
                                        <h4 class="resort-grid-list-title">Heater</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="resort-grid-list-icon">
                                        <img src="assets/img/icon/resort-icon1-5.svg" alt="img">
                                    </div>
                                    <div class="resort-grid-list-details">
                                        <h4 class="resort-grid-list-title">Phone</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="resort-grid-list-icon">
                                        <img src="assets/img/icon/resort-icon1-6.svg" alt="img">
                                    </div>
                                    <div class="resort-grid-list-details">
                                        <h4 class="resort-grid-list-title">Hair Dryer</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="resort-grid-list-icon">
                                        <img src="assets/img/icon/resort-icon1-7.svg" alt="img">
                                    </div>
                                    <div class="resort-grid-list-details">
                                        <h4 class="resort-grid-list-title">Saving Safe</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="resort-grid-list-icon">
                                        <img src="assets/img/icon/resort-icon1-8.svg" alt="img">
                                    </div>
                                    <div class="resort-grid-list-details">
                                        <h4 class="resort-grid-list-title">Towels</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="resort-grid-list-icon">
                                        <img src="assets/img/icon/resort-icon1-9.svg" alt="img">
                                    </div>
                                    <div class="resort-grid-list-details">
                                        <h4 class="resort-grid-list-title">Laundry</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="resort-grid-list-icon">
                                        <img src="assets/img/icon/resort-icon1-10.svg" alt="img">
                                    </div>
                                    <div class="resort-grid-list-details">
                                        <h4 class="resort-grid-list-title">Bath</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        {{-- <div class="widget  ">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-1.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Exploring The Green Spaces Of the island maldives</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="fa-regular fa-calendar"></i>22/6/ 2025</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-2.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Harmony With Nature Of Belgium Tour and travle</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="fa-regular fa-calendar"></i>25/6/ 2025</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-3.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Exploring The Green Spaces Of Realar Residence</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="fa-regular fa-calendar"></i>27/6/ 2025</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="widget widget_tag_cloud  ">
                            <h3 class="widget_title">Popular Tags</h3>
                            <div class="tagcloud">
                                <a href="blog.html">Tour</a>
                                <a href="blog.html">Adventure</a>
                                <a href="blog.html">Rent</a>
                                <a href="blog.html">Innovate</a>
                                <a href="blog.html">Hotel</a>
                                <a href="blog.html">Modern</a>
                                <a href="blog.html">Luxury</a>
                                <a href="blog.html">Travel</a>
                            </div>
                        </div> --}}
                        <div class="widget widget_offer  " data-bg-src="assets/img/bg/widget_bg_1.jpg">
                            <div class="offer-banner">
                                <div class="offer">
                                    <h6 class="box-title">Need Help? We Are Here To Help You</h6>
                                    <div class="banner-logo">
                                        <img src="assets/img/logo2.svg" alt="Tourm">
                                    </div>
                                    <div class="offer">
                                        <h6 class="offer-title">You Get Online support</h6>
                                        <a class="offter-num" href="+01******">+01 ********</a>
                                    </div>
                                    <a href="{{route('contact')}}" class="th-btn style2 th-icon">Contact Us</a>
                                </div>
                            </div>
                        </div>

                    </aside>
                </div>

            </div>
            <div class="shape-mockup shape1 d-none d-xxl-block" data-bottom="35%" data-right="-12%">
                <img src="assets/img/shape/shape_1.png" alt="shape">
            </div>
            <div class="shape-mockup shape2 d-none d-xl-block" data-bottom="31%" data-right="-8%">
                <img src="assets/img/shape/shape_2.png" alt="shape">
            </div>
            <div class="shape-mockup shape3 d-none d-xxl-block" data-bottom="33%" data-right="-5%">
                <img src="assets/img/shape/shape_3.png" alt="shape">
            </div>
        </div>

    </section>




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

    {{-- book now floting --}}
    <div class="book-now-floting">
        <div class="col-12 form-group mt-4">
            <button class="th-btn-whatsapp w-100">Book Now <i class="fab fa-whatsapp me-2 text-white"></i></button>
        </div>
    </div>
        
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
