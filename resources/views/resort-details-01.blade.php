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
    </div>
    

    @if(session('success'))
        <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content text-center">
                    <div class="modal-body p-5">
                        
                        {{-- Success Animation --}}
                        <div class="success-animation mb-4">
                            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                            </svg>
                        </div>

                        {{-- Success Message --}}
                        <h3 class="fw-bold mb-3">You can start conversation now!</h3>
                        <p class="mb-0">{{ session('success') }}</p>
                        
                    </div>
                </div>
            </div>
        </div>
        <script>
            var whatsappLink = "{{ session('whatsapp_link') }}";
            var a = document.createElement('a');
            if (whatsappLink) {
                a.href = whatsappLink;
                a.target = '_blank';
                setTimeout(function() {
                    a.click();
                }, 2500);
            }
        </script>
    @endif

    <!--============================== tour Area ==============================-->
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

                        <div class="container px-0 mb-30">
                            <div id="form-block-3" class="transition-col">
                                <div class="booking-form-wrap style2 bg-smoke p-4" style="border-radius: 8px;">
                                    <div class="title-area text-center">
                                        <h3 class="sec-title mb-30">Accommodation Quotation</h3>
                                    </div>
                                    
                                    <form action="{{ route('accommodation-booking.submit') }}" method="POST" class="th-form">
                                        @csrf
                                        <input type="hidden" name="accommodation_id" value="1">

                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                name="name" placeholder="Name*" required>
                                            </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control"
                                                name="pax" placeholder="Pax (Number of People)*" required min="1">
                                            </div>
                                        
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="arrival_date">Arrival Date*</label>
                                                <input type="date" class="form-control"
                                                    id="arrival_date" name="arrival_date" required>
                                                </div>
                                            <div class="form-group col-md-6">
                                                <label for="departure_date">Departure Date*</label>
                                                <input type="date" class="form-control"
                                                    id="departure_date" name="departure_date" required>
                                                </div>
                                            </div>
                                        
                                        <div class="form-group mb-30">
                                            
                                            <textarea name="message" cols="30" rows="3" class="form-control"
                                                placeholder="Specific Accommodation Requirements (e.g., room type, star rating, location preference)..."></textarea>
                                            
                                        </div>
                                        
                                        
                                        <button type="submit"
                                            class="th-btn-whatsapp w-100">
                                            <i class="fab fa-whatsapp me-2"></i> Get Quotation
                                            </button>
                                    </form>
                                    </div>
                                </div>
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
                                        <img src="assets/img/logo2.svg" alt="Bitrate">
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
    @include('partials.footer')

    {{-- book now floting --}}
    <div class="book-now-floting">
        <div class="w-100 h-100 form-group text-center mt-4">
            <button class="th-btn-whatsapp w-100"><i class="fab fa-whatsapp text-white"></i></button>
        </div>
    </div>

    <!--========== All Js File =========== -->
    @include('partials.scripts')

    {{-- alert message --}}
    @if(session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // 1. Get the modal element
                var successModal = document.getElementById('successModal');
                
                if (successModal) {
                    // 2. Use Bootstrap's Modal function to show it
                    var modal = new bootstrap.Modal(successModal);
                    modal.show();

                    // 3. Set a timeout to automatically close the modal after 3 seconds
                    setTimeout(function() {
                        modal.hide();
                    }, 3000); 
                }
            });
        </script>
    @endif
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('.th-form');

            if (form) {
                form.addEventListener('submit', function() {
                    // Store the current vertical scroll position in localStorage
                    localStorage.setItem('scrollPosition', window.scrollY);
                });
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const scrollPosition = localStorage.getItem('scrollPosition');

            if (scrollPosition) {
                // Restore the scroll position
                window.scrollTo(0, parseInt(scrollPosition));
                
                // Clean up the storage item immediately after restoring the position
                localStorage.removeItem('scrollPosition');
            }
        });

    </script>
</body>

</html>
