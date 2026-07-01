<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('partials.head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        html {
            scroll-behavior: smooth !important;
        }

        #tour-packages {
            scroll-margin-top: 210px;
        }

        /* Custom Auth Buttons Styling */
        .custom-auth-btn {
            padding: 15px 24px;
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

        .btn-register-custom {
            background-color: #0c333a;
            color: #ffffff !important;
            border: 1px solid #0c333a;
            box-shadow: 0 2px 4px rgba(29, 177, 208, 0.2);
        }

        .btn-register-custom:hover {
            background-color: #1796b0;
            border-color: #1796b0;
            box-shadow: 0 4px 6px rgba(29, 177, 208, 0.3);
            transform: translateY(-1px);
        }
    </style>
</head>

<body>

    @include('partials.loader')

    @php
        $page = 'home';
    @endphp
    @include('partials.menu')

    <!--======== / Hero Section ========-->
    <div class="th-hero-wrapper hero-1" id="hero">
        <div class="swiper th-slider hero-slider-1" id="heroSlide1"
            data-slider-options='{"effect":"fade","menu": ["", "", ""],"heroSlide1": {"swiper-container": {"pagination": {"el": ".swiper-pagination", "clickable": true }}}}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg"
                            data-bg-src="{{ asset('assets/img/hero/pexels-rajee-kumar-1029496084-33130315.jpg') }}">
                        </div>
                        <div class="container">
                            <div class="hero-style1">
                                {{-- <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">Get unforgetable pleasure with us</span> --}}
                                <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">Make
                                    unforgetable memories with us</span>
                                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">
                                    Let’s make your best trip with us </h1>
                                {{-- <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                                    <a href="tour.html" class="th-btn th-icon">Transport Services</a>
                                    <a href="service.html" class="th-btn style2 th-icon">Accomodation</a>
                                </div> --}}

                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="{{ asset('assets/img/hero/hero_bg_1_1.jpg') }}">
                        </div>
                        <div class="container">
                            <div class="hero-style1">
                                <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">Make
                                    unforgetable memories with us</span>
                                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">
                                    Natural Wonder of the world </h1>
                                {{-- <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                                    <a href="tour.html" class="th-btn th-icon">Transport Services</a>
                                    <a href="service.html" class="th-btn style2 th-icon">Accomodation</a>
                                </div> --}}

                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg"
                            data-bg-src="{{ asset('assets/img/hero/sebastian-latorre-qI6aWFDs7pY-unsplash.jpg') }}">
                        </div>
                        <div class="container">
                            <div class="hero-style1">
                                <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">Make
                                    unforgetable memories with us</span>
                                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">
                                    Explore beauty of the whole world </h1>
                                {{-- <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                                    <a href="tour.html" class="th-btn th-icon">Transport Services</a>
                                    <a href="service.html" class="th-btn style2 th-icon">Accomodation</a>
                                </div> --}}

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Scoped Styles */

        /* Wrapper styling to give room for the arrows so they don't overlap the first/last slides */
        .story-swiper-wrapper {
            position: relative;
            padding: 0 40px;
        }

        /* Base styling for professional looking arrows */
        .story-arrow-prev,
        .story-arrow-next {
            color: #ffffff;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(8px);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease-in-out;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        /* Adjusting the default swiper icon sizes inside the arrows */
        .story-arrow-prev:after,
        .story-arrow-next:after {
            font-size: 20px;
            font-weight: 900;
        }

        /* Hover effects matching the theme */
        .story-arrow-prev:hover,
        .story-arrow-next:hover {
            /* background: #00d2ff; */
            /* color: #000000; */
            transform: scale(1.1);
            /* border-color: #00d2ff; */
        }

        /* Positioning them outside the inner swiper track */
        .story-arrow-prev {
            left: -20px;
        }

        .story-arrow-next {
            right: -20px;
        }

        /* Mobile Responsiveness: Hide arrows on small screens, rely on touch swipe */
        @media (max-width: 768px) {
            .story-swiper-wrapper {
                padding: 0 10px;
            }

            .story-arrow-prev,
            .story-arrow-next {
                display: none;
            }
        }

        .sri-lanka-story-section {
            padding: 80px 0;
            background-color: #0c1524;
            /* Elegant deep background for contrast */
            position: relative;
            overflow: hidden;
        }

        .sri-lanka-story-section .sec-title {
            color: #ffffff;
            font-size: 3rem;
            margin-bottom: 10px;
        }

        .sri-lanka-story-section .sub-title {
            color: #10b981;
            /* Emerald green accent */
            font-size: 1.2rem;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        /* Swiper Carousel Customization */
        .story-swiper {
            width: 100%;
            padding-top: 40px;
            padding-bottom: 60px;
        }

        .story-slide {
            background-position: center;
            background-size: cover;
            width: 350px;
            height: 500px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.6);
            position: relative;
            display: flex;
            /* Fixes alignment */
        }

        /* Gradient overlay to make text readable */
        .story-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.95) 0%, rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0) 100%);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 30px;
            transition: all 0.4s ease;
        }

        .swiper-slide-active .story-overlay {
            background: linear-gradient(to top, rgba(0, 0, 0, 0.95) 0%, rgba(0, 0, 0, 0.5) 60%, rgba(0, 0, 0, 0) 100%);
        }

        .story-tag {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 15px;
            display: inline-block;
            width: max-content;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .story-slide h3 {
            font-size: 26px;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 10px;
            line-height: 1.2;
        }

        .story-slide p {
            font-size: 0.9rem;
            color: #d1d5db;
            line-height: 1.6;
            margin-bottom: 0;
        }

        /* Pagination dots color */
        .story-swiper .swiper-pagination-bullet {
            background: #ffffff;
            opacity: 0.5;
        }

        .story-swiper .swiper-pagination-bullet-active {
            background: #10b981;
            opacity: 1;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .story-slide {
                width: 280px;
                /* height: 420px; */
            }

            .sri-lanka-story-section .sec-title {
                font-size: 2.2rem;
            }
        }
    </style>

    <section class="sri-lanka-story-section">
        <div class="container">
            <div class="title-area text-center">
                <h2 class="sub-title" style="font-size: 2.5rem; color: #ffffff; padding: 20px 0;text-align: center;">Sri
                    Lanka...
                    {{-- <span style="font-size: 4rem">?</span>  --}}
                </h2>
                <span class="sub-title">The Pearl of the Indian Ocean</span>
                <p class="text-white mx-auto " style="text-align:justify;">
                    Discover a land where extraordinary diversity unfolds within a single island. Sri Lanka offers an
                    unparalleled blend of pristine beaches, lush mountains, ancient heritage, vibrant culture, and
                    unforgettable wildlife experiences making it one of the world’s most captivating travel
                    destinations.

                    Begin your journey along our sun-kissed coastline, where golden beaches meet the turquoise waters of
                    the Indian Ocean. Surf the renowned waves of Arugam Bay, swim alongside sea turtles in Unawatuna, or
                    witness magnificent blue whales off the shores of Mirissa.

                    Travel inland and experience a remarkable transformation of scenery. Within just a few hours,
                    tropical landscapes give way to cool mist-covered mountains and endless tea plantations. Embark on
                    the world-famous scenic train journey to Ella, explore the breathtaking beauty of Horton Plains
                    National Park, and unwind amidst the charming colonial atmosphere of Nuwara Eliya.

                    For history and culture enthusiasts, Sri Lanka offers a journey through more than two millennia of
                    civilization. Ascend the iconic Sigiriya, explore the sacred ancient cities of Anuradhapura and
                    Polonnaruwa, and experience the spiritual and cultural heritage of Kandy, home to some of the
                    island’s most treasured traditions.

                    Beyond its landscapes and monuments, Sri Lanka captivates visitors with its rich cultural heritage,
                    colorful festivals, rhythmic traditional performances, and world-renowned cuisine. Above all, it is
                    the warmth and hospitality of its people that leave a lasting impression, welcoming every traveler
                    with genuine smiles and unforgettable experiences.

                    Whether you seek adventure, relaxation, wildlife, culture, or luxury, Sri Lanka offers a unique
                    journey unlike anywhere else in the world.

                    Come and experience the wonder of Sri Lanka - where every destination tells a story, and every
                    moment becomes a cherished memory.

                </p>
            </div>

            <div class="story-swiper-wrapper position-relative">

                <div class="swiper story-swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide story-slide"
                            style="background-image: url('{{ asset('assets/img/bg/bala-karthikeya-pavan-guda-rfObRW_1YXE-unsplash.webp') }}');">
                            <div class="story-overlay">
                                <span class="story-tag"><i class="fa-light fa-leaf me-1"></i> Nature</span>
                                <h3>Emerald Hills</h3>
                                <p>Endless rolling hills covered in world-famous Ceylon tea, wrapped in morning mist in
                                    places like Nuwara Eliya and Ella.</p>
                            </div>
                        </div>

                        <div class="swiper-slide story-slide"
                            style="background-image: url('{{ asset('assets/img/explore/sigiriya.jpg') }}');">
                            <div class="story-overlay">
                                <span class="story-tag"><i class="fa-light fa-fort me-1"></i> Heritage</span>
                                <h3>Sigiriya Rock</h3>
                                <p>The majestic Lion Rock, an ancient palace and fortress standing tall above the
                                    jungle,
                                    boasting incredible ancient engineering.</p>
                            </div>
                        </div>

                        <div class="swiper-slide story-slide"
                            style="background-image: url('{{ asset('assets/img/explore/HD-wallpaper-dalada-maligawa-buddha-iphone-kandy-lanka-mobile-srilanka-srilankan-temple.jpg') }}');">
                            <div class="story-overlay">
                                <span class="story-tag"><i class="fa-light fa-gavel me-1"></i> Craftsmanship</span>
                                <h3>Ancient Artistry</h3>
                                <p>Discover centuries-old intricate wood carvings at Embekke and the living traditions
                                    of
                                    the sacred city of Kandy.</p>
                            </div>
                        </div>

                        <div class="swiper-slide story-slide"
                            style="background-image: url('{{ asset('assets/img/explore/ocean-reef.jpg') }}');">
                            <div class="story-overlay">
                                <span class="story-tag"><i class="fa-light fa-water me-1"></i> Marine Life</span>
                                <h3>Vibrant Coral Reefs</h3>
                                <p>Dive into the colorful underwater worlds of Pigeon Island and Hikkaduwa, teeming with
                                    exotic marine biodiversity.</p>
                            </div>
                        </div>

                        <div class="swiper-slide story-slide"
                            style="background-image: url('{{ asset('assets/img/explore/Yala National Park.jpg') }}');">
                            <div class="story-overlay">
                                <span class="story-tag"><i class="fa-light fa-camera me-1"></i> Wildlife</span>
                                <h3>Untamed Wilderness</h3>
                                <p>Experience thrilling safaris in Yala and Wilpattu, home to majestic elephants,
                                    elusive
                                    leopards, and exotic birds.</p>
                            </div>
                        </div>

                        <div class="swiper-slide story-slide"
                            style="background-image: url('{{ asset('assets/img/explore/demodara-nine-arch-bridge-ella-sri-lanka_131985-429.avif') }}');">
                            <div class="story-overlay">
                                <span class="story-tag"><i class="fa-light fa-landmark me-1"></i> Iconic Landmark</span>
                                <h3>Architectural Marvel</h3>
                                <p>Witness the stunning Nine Arches Bridge in Ella, a spectacular colonial-era railway
                                    viaduct hidden amidst lush green tea plantations.</p>
                            </div>
                        </div>

                        <div class="swiper-slide story-slide"
                            style="background-image: url('{{ asset('assets/img/bg/bala-karthikeya-pavan-guda-rfObRW_1YXE-unsplash.webp') }}');">
                            <div class="story-overlay">
                                <span class="story-tag"><i class="fa-light fa-leaf me-1"></i> Nature</span>
                                <h3>Emerald Hills</h3>
                                <p>Endless rolling hills covered in world-famous Ceylon tea, wrapped in morning mist in
                                    places like Nuwara Eliya and Ella.</p>
                            </div>
                        </div>

                        <div class="swiper-slide story-slide"
                            style="background-image: url('{{ asset('assets/img/explore/sigiriya.jpg') }}');">
                            <div class="story-overlay">
                                <span class="story-tag"><i class="fa-light fa-fort me-1"></i> Heritage</span>
                                <h3>Sigiriya Rock</h3>
                                <p>The majestic Lion Rock, an ancient palace and fortress standing tall above the
                                    jungle,
                                    boasting incredible ancient engineering.</p>
                            </div>
                        </div>

                        <div class="swiper-slide story-slide"
                            style="background-image: url('{{ asset('assets/img/explore/HD-wallpaper-dalada-maligawa-buddha-iphone-kandy-lanka-mobile-srilanka-srilankan-temple.jpg') }}');">
                            <div class="story-overlay">
                                <span class="story-tag"><i class="fa-light fa-gavel me-1"></i> Craftsmanship</span>
                                <h3>Ancient Artistry</h3>
                                <p>Discover centuries-old intricate wood carvings at Embekke and the living traditions
                                    of
                                    the sacred city of Kandy.</p>
                            </div>
                        </div>

                        <div class="swiper-slide story-slide"
                            style="background-image: url('{{ asset('assets/img/explore/ocean-reef.jpg') }}');">
                            <div class="story-overlay">
                                <span class="story-tag"><i class="fa-light fa-water me-1"></i> Marine Life</span>
                                <h3>Vibrant Coral Reefs</h3>
                                <p>Dive into the colorful underwater worlds of Pigeon Island and Hikkaduwa, teeming with
                                    exotic marine biodiversity.</p>
                            </div>
                        </div>

                        <div class="swiper-slide story-slide"
                            style="background-image: url('{{ asset('assets/img/explore/Yala National Park.jpg') }}');">
                            <div class="story-overlay">
                                <span class="story-tag"><i class="fa-light fa-camera me-1"></i> Wildlife</span>
                                <h3>Untamed Wilderness</h3>
                                <p>Experience thrilling safaris in Yala and Wilpattu, home to majestic elephants,
                                    elusive
                                    leopards, and exotic birds.</p>
                            </div>
                        </div>

                        <div class="swiper-slide story-slide"
                            style="background-image: url('{{ asset('assets/img/explore/demodara-nine-arch-bridge-ella-sri-lanka_131985-429.avif') }}');">
                            <div class="story-overlay">
                                <span class="story-tag"><i class="fa-light fa-landmark me-1"></i> Iconic
                                    Landmark</span>
                                <h3>Architectural Marvel</h3>
                                <p>Witness the stunning Nine Arches Bridge in Ella, a spectacular colonial-era railway
                                    viaduct hidden amidst lush green tea plantations.</p>
                            </div>
                        </div>
                    </div>




                    {{-- <div class="swiper-pagination story-swiper-pagination"></div> --}}
                </div>
                <div class="swiper-button-prev story-arrow-prev"></div>
                <div class="swiper-button-next story-arrow-next"></div>
            </div>

        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Wait for existing theme scripts to load, then initialize our custom Story Carousel
            if (typeof Swiper !== 'undefined') {
                var storySwiper = new Swiper(".story-swiper", {
                    effect: "coverflow",
                    grabCursor: true,
                    centeredSlides: true,
                    slidesPerView: "auto",
                    loop: true,
                    loopedSlides: 5,
                    initialSlide: 0, // Starts at the 2nd image (Sigiriya)
                    coverflowEffect: {
                        rotate: 20,
                        stretch: 0,
                        depth: 200,
                        modifier: 1,
                        slideShadows: true,
                    },
                    autoplay: {
                        delay: 3500,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: ".story-swiper-pagination",
                        clickable: true,
                    },

                    navigation: {
                        nextEl: '.story-arrow-next',
                        prevEl: '.story-arrow-prev',
                    },
                });
            }
        });
    </script>

    {{-- about us section --}}

    <style>
        :root {
            --primary-color: #2c3e50;
            /* Dark Blue/Grey */
            --accent-color: #0c333a;
            /* Adventure Orange */
            --text-muted: #7f8c8d;
            --bg-light: #f9f9f9;
        }

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            background-color: #fff;
        }

        /* Main Heading Wrapper for "Why Us ?" */
        .main-heading-wrapper {
            text-align: center;
            padding: 60px 10% 10px;
            /* Uda idan loku gap eka */
        }

        /* Gaps adu kara (padding 80px idan 40px walata adu kala) */
        .about-section {
            padding: 40px 10%;
            display: flex;
            align-items: center;
            gap: 50px;
            flex-wrap: wrap;
        }

        /* Image Side */
        .about-image {
            flex: 1;
            min-width: 400px;
            position: relative;
        }

        .about-image img {
            width: 100%;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .about-image img:hover {
            transform: scale(1.02);
        }

        /* Content Side */
        .about-content {
            flex: 1;
            min-width: 400px;
        }

        .about-content h2 {
            font-size: 36px;
            color: var(--primary-color);
            margin: 10px 0 20px;
            line-height: 1.2;
        }

        .about-content p {
            color: var(--text-muted);
            line-height: 1.6;
            margin-bottom: 30px;
            text-align: justify;
            /* Text lassanata block wenna */
        }

        /* Features Grid - Pahalata list wenna haduwa */
        .features-grid {
            display: flex;
            flex-direction: column;
            /* Box thuna pahalata enna */
            gap: 20px;
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            padding: 15px;
            border-radius: 12px;
            transition: background 0.3s;
            background: #222d3f;
        }

        .feature-item:hover {
            background: var(--bg-light);
            color: var(--primary-color);
            cursor: pointer;
        }

        .feature-item:hover h4 {
            color: var(--accent-color);
            transition: color 0.3s ease;
        }

        .feature-item:hover i {
            background: #222d3f;
            color: var(--bg-light);
            transition: color 0.3s ease;
        }

        .feature-item i {
            font-size: 24px;
            color: var(--accent-color);
            background: #ffffff;
            padding: 12px;
            border-radius: 10px;
        }

        .feature-item h4 {
            margin: 0 0 5px;
            color: var(--bg-light);
            font-size: 18px;
        }

        .feature-item p {
            font-size: 13px;
            margin: 0;
            color: var(--text-muted);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .about-section {
                padding: 30px 5%;
                /* Mobile gap eka */
            }

            .about-image,
            .about-content {
                min-width: 100%;
            }
        }
    </style>

    <style>
        /* Isolated Scoped CSS for Accordion Section */
        .wcu-section {
            padding: 10px;
            padding-bottom: 40px;
            padding-top: 40px;
            /* Idapatha adu kala */
            display: flex;
            flex-direction: column;
            /* Title eka udata ganna */
            align-items: center;
            background-color: transparent;
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
        }

        .wcu-section *,
        .wcu-section *::before,
        .wcu-section *::after {
            box-sizing: border-box;
        }

        /* FAQ Title Styling */
        .wcu-main-title {
            text-align: center;
            width: 100%;
            color: #242D40;
            font-size: 36px;
            font-weight: 700;
            /* text-transform: uppercase; */
            letter-spacing: 1px;
            margin-bottom: 30px;
        }

        .wcu-container {
            max-width: 1400px;
            width: 100%;
            display: flex;
            align-items: center;
            gap: 40px;
        }

        /* Accordion Styles */
        .wcu-accordion-wrapper {
            flex: 1.2;
        }

        .wcu-accordion-item {
            background-color: #07869f;
            border-radius: 12px;
            margin-bottom: 15px;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .wcu-accordion-header {
            display: flex;
            align-items: center;
            padding: 18px 25px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .wcu-accordion-header:hover {
            background-color: #07869f;
        }

        .wcu-icon-box {
            background-color: #ffffff;
            width: 40px;
            height: 40px;
            border-radius: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .wcu-icon-box i {
            color: #242D40;
            font-size: 18px;
        }

        .wcu-header-text {
            color: #ffffff;
            font-size: 17px;
            font-weight: 600;
            flex: 1;
            margin: 0;
        }

        .wcu-arrow-icon {
            color: #ffffff;
            transition: transform 0.3s ease;
        }

        .wcu-accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            background-color: #1796b0;
        }

        .wcu-desc-text {
            color: #ffffff;
            padding: 10px 50px;
            font-size: 15px;
            line-height: 1.6;
            margin: 0;
        }

        /* Active State */
        .wcu-accordion-item.active .wcu-arrow-icon {
            transform: rotate(180deg);
        }

        /* Image Styles - Custom Mask Shape */
        .wcu-image-wrapper {
            flex: 1;
            display: flex;
            justify-content: center;
            position: relative;
        }

        .wcu-masked-image {
            width: 100%;
            max-width: 500px;
            height: auto;
            aspect-ratio: 1/1;
            object-fit: cover;
            border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
            position: relative;
            z-index: 2;
            display: block;
            transition: border-radius 1s ease-in-out;
        }

        .wcu-masked-image:hover {
            border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .wcu-container {
                flex-direction: column-reverse;
                gap: 30px;
            }

            .wcu-main-title {
                font-size: 28px;
            }

            .wcu-desc-text {
                color: #ffffff;
            }
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const accordionItems = document.querySelectorAll(".wcu-accordion-item");

            // Initialize the active item on load
            accordionItems.forEach(item => {
                if (item.classList.contains('active')) {
                    let content = item.querySelector('.wcu-accordion-content');
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });

            accordionItems.forEach((item) => {
                const header = item.querySelector(".wcu-accordion-header");

                header.addEventListener("click", () => {
                    const isActive = item.classList.contains("active");

                    // Close all items first
                    accordionItems.forEach((otherItem) => {
                        otherItem.classList.remove("active");
                        otherItem.querySelector(".wcu-accordion-content").style.maxHeight =
                            0;
                    });

                    // If it wasn't active, open it
                    if (!isActive) {
                        item.classList.add("active");
                        const content = item.querySelector(".wcu-accordion-content");
                        content.style.maxHeight = content.scrollHeight + "px";
                    }
                });
            });
        });
    </script>

    <div class="main-heading-wrapper">
        <span class="sub-title text-center"
            style="font-size: 3rem; color: #113D48; margin-bottom: 0.5rem; font-weight: 400; display: block;">
            WHY US <span style="font-size: 4rem; font-weight: 400;">...?</span>
        </span>
    </div>

    <section class="d-none d-md-flex about-section">
        <div class="about-image">
            <img src="{{ asset('assets/img/bg/wp8780766-tea-estate-wallpapers.jpg') }}"
                style="height: 100%; object-fit: cover;" alt="Sri Lanka Tea Plantation">
        </div>

        <div class="about-content">
            <h2 class="text-center">Discover Sri Lanka’s Wonders With Your Ultimate Travel Partner</h2>
            <p>Choosing the right travel partner can make the difference between an ordinary vacation and a journey
                filled with unforgettable memories. At Novara Holidays, we go beyond simply providing transportation. we
                create seamless, worry-free travel experiences designed around your interests, comfort, and budget.
                From the golden beaches of the south coast and the misty tea-covered hills of the central highlands to
                ancient cultural treasures and breathtaking wildlife encounters, we help you experience the very best of
                Sri Lanka. Whether you’re planning a family holiday, romantic getaway, adventure tour, business trip, or
                customized private excursion, our dedicated team ensures every detail is handled with care and
                professionalism.
                With reliable vehicles, experienced drivers, personalized itineraries, and local expertise, we make
                exploring Sri Lanka safe, comfortable, and truly memorable. Let Novara Holidays be your trusted
                companion as you discover the beauty, culture, and hospitality of this remarkable island paradise.
                Travel with confidence. Explore with passion. Create memories that last a lifetime.</p>
        </div>
    </section>

    <section class="about-section">
        <div class="about-content">
            <h2 class="text-center">Unmatched Expertise & Care</h2>
            <p>With years of experience in Sri Lanka’s tourism industry, we understand what travelers truly
                value -comfort, safety, reliability, and authentic local experiences. Our commitment goes beyond
                transportation and tour arrangements; we strive to provide exceptional service that allows you to relax
                and enjoy every moment of your journey.
                Your safety, convenience, and peace of mind remain our highest priorities. From the moment you arrive in
                Sri Lanka until the day you depart, our dedicated team is available to assist you with personalized
                guidance, local insights, and responsive support whenever you need it. Whether it’s recommending hidden
                gems, adapting your itinerary, or ensuring smooth travel logistics, we are committed to making your
                experience effortless and memorable.
                At Novara Holidays, we treat every traveler as our valued guest, delivering professional service with
                genuine Sri Lankan hospitality to create journeys you’ll cherish for years to come.
                Experience Sri Lanka with confidence, comfort, and care.</p>
        </div>

        <div class="about-image">
            <img src="{{ asset('assets/img/3192.jpg') }}" style="height: 100%; object-fit: cover;"
                alt="Sri Lanka Tea Plantation">
        </div>
    </section>

    <section class="about-section">
        <div class="about-image d-none d-md-block">
            <img src="{{ asset('assets/img/Hospitality_Trends_Sri_Lanka.jpeg') }}"
                style="height: 100%; object-fit: cover;" alt="Sri Lanka Tea Plantation">
        </div>

        <div class="about-content">
            <h2 class="text-center">The Gold Standard of Service</h2>
            <p>With years of experience in the tourism industry, we understand what travelers truly value: comfort,
                safety, reliability, and authentic experiences. Your safety and peace of mind is our top priorities.
                From the moment you arrive in Sri Lanka until your departure, our team is there to support and assist
                you throughout your journey.</p>

            <div class="wcu-accordion-wrapper">
                <div class="wcu-accordion">
                    <div class="wcu-accordion-item">
                        <div class="wcu-accordion-header">
                            <div class="wcu-icon-box"><i class="fa-solid fa-suitcase-rolling"></i></div>
                            <h3 class="wcu-header-text">Expert Drivers & Local Knowledge</h3>
                            <i class="fa-solid fa-chevron-down wcu-arrow-icon"></i>
                        </div>
                        <div class="wcu-accordion-content">
                            <p class="wcu-desc-text text-white">Our professional drivers are highly experienced,
                                friendly, and
                                knowledgeable. Beyond safe driving, they help you discover the hidden gems, culture, and
                                beauty of Sri Lanka.
                            </p>
                        </div>
                    </div>

                    <div class="wcu-accordion-item">
                        <div class="wcu-accordion-header">
                            <div class="wcu-icon-box"><i class="fa-solid fa-map-marked-alt"></i></div>
                            <h3 class="wcu-header-text">Luxury & Comfortable Vehicles</h3>
                            <i class="fa-solid fa-chevron-down wcu-arrow-icon"></i>
                        </div>
                        <div class="wcu-accordion-content">
                            <p class="wcu-desc-text text-white">Travel in comfort and style with our carefully
                                maintained fleet of
                                modern vehicles, designed to provide a smooth, relaxing, and enjoyable journey.

                            </p>
                        </div>
                    </div>

                    <div class="wcu-accordion-item">
                        <div class="wcu-accordion-header">
                            <div class="wcu-icon-box"><i class="fa-solid fa-shield"></i></div>
                            <h3 class="wcu-header-text">Reliable & Hassle-Free Travel</h3>
                            <i class="fa-solid fa-chevron-down wcu-arrow-icon"></i>
                        </div>
                        <div class="wcu-accordion-content">
                            <p class="wcu-desc-text text-white">We take full responsibility for organizing your tour
                                with
                                attention to every detail, allowing you to relax and enjoy your holiday stress-free.</p>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </section>

    <style>
        /* Filter Bar Styles (Glassmorphism) */
        .explore-filter-bar {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
            margin-bottom: 30px;
        }

        .glass-filter-btn {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #b0b0b0;
            padding: 10px 24px;
            border-radius: 30px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .glass-filter-btn i {
            font-size: 14px;
        }

        .glass-filter-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            color: #ffffff;
            transform: translateY(-2px);
        }

        /* Active State for Filter Button */
        .glass-filter-btn.active {
            background: rgba(255, 255, 255, 0.3);
            border-color: #ffffff;
            color: #ffffff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }

        /* Custom Styles for Background Image Card */
        .explore-custom-card {
            position: relative;
            border-radius: 24px;
            overflow: hidden;
            height: 500px;
            /* Adjust height if needed */
            display: flex;
            align-items: end;
            justify-content: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .explore-custom-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
        }

        /* Background Image setup */
        .explore-custom-card .bg-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
            transition: transform 0.5s ease;
        }

        .explore-custom-card:hover .bg-image {
            transform: scale(1.05);
            /* Slight zoom on hover */
        }

        /* Dark gradient overlay so text is readable */
        .explore-custom-card::after {
            content: '';
            position: absolute;
            inset: 0;
            /* background: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.4) 50%, rgba(0,0,0,0.85) 100%); */
            z-index: 2;
        }

        /* Center Content Area */
        .explore-custom-card .destination-content {
            position: relative;
            z-index: 3;
            text-align: left;
            padding: 24px;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .explore-custom-card .title {
            margin-bottom: 12px;
        }

        .explore-custom-card .title a {
            color: #ffffff;
            font-size: 24px;
            font-weight: 700;
            text-decoration: none;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
        }

        .explore-custom-card .destination-details {
            color: #e6e6e6;
            font-size: 15px;
            line-height: 1.5;
            margin-bottom: 20px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
        }

        .destination-content a {
            align-self: flex-end;
        }

        /* Glassmorphism View More Button (Matches old badge style) */
        .explore-custom-card .glass-btn {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: #ffffff;
            padding: 8px 24px;
            border-radius: 30px;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }

        .explore-custom-card .glass-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            border-color: #ffffff;
            color: #ffffff;
        }
    </style>

    <section class="overflow-hidden space" style="background-color: #0c1524; margin-top:10px">
        <div class="container">
            <!-- Tab Header -->
            <div class="mt-2 tab-header">
                <div class="title-area text-center">
                    <span class="sub-title" style="color: #ffffff">Seamless Journeys</span>
                    <h2 class="sec-title" style="color: #ffffff">Your Journey, Our Priority</h2>
                </div>
                <ul class="nav nav-pills align-items-center h-100" id="bookingTab" role="tablist"
                    style="scale: 0.8;">

                    <!-- Tour packages tab -->
                    <li class="nav-item col-12 col-md-6 col-lg-3 p-2 text-center h-100" role="presentation">
                        <button
                            class="nav-link d-flex align-items-center justify-content-center gap-2 border-0 w-100 h-100 active"
                            id="tour-packages-tab" data-bs-toggle="pill" data-bs-target="#tour-packages"
                            type="button" role="tab" aria-controls="tour-packages" aria-selected="false">
                            <div class="icon mb">
                                <i class="fa-light fa-suitcase-rolling fa-2x text-theme"></i>
                            </div>
                            <span class="fs-5 fw-bold text-dark">Tour Packages</span>
                        </button>
                    </li>

                    <!-- Customize Tour tab -->
                    <li class="nav-item col-12 col-md-6 col-lg-3 p-2 text-center h-100" role="presentation">
                        <button
                            class="nav-link d-flex align-items-center justify-content-center gap-2 border-0 w-100 h-100"
                            id="customize-tour-tab" data-bs-toggle="pill" data-bs-target="#customize-tour"
                            type="button" role="tab" aria-controls="customize-tour" aria-selected="false">
                            <div class="icon mb">
                                <i class="fa-light fa-list-timeline fa-2x text-theme"></i>
                            </div>
                            <span class="fs-5 fw-bold text-dark">Customize Tour</span>
                        </button>
                    </li>

                    <!-- Arrival Departure tab -->
                    <li class="nav-item col-12 col-md-6 col-lg-3 p-2 text-center h-100" role="presentation">
                        <button
                            class="nav-link d-flex align-items-center justify-content-center gap-2 border-0 w-100 h-100"
                            id="transport-tab" data-bs-toggle="pill" data-bs-target="#transport" type="button"
                            role="tab" aria-controls="transport" aria-selected="false">
                            <div class="icon mb">
                                <i class="fa-light fa-plane-arrival fa-2x text-theme"></i>
                            </div>
                            <span class="fs-5 fw-bold text-dark">Arrival</span>
                        </button>
                    </li>

                    <!--  Departure tab -->
                    <li class="nav-item col-12 col-md-6 col-lg-3 p-2 text-center h-100" role="presentation">

                        <button
                            class="nav-link d-flex align-items-center justify-content-center gap-2 border-0 w-100 h-100"
                            id="transport-tab" data-bs-toggle="pill" data-bs-target="#transport2" type="button"
                            role="tab" aria-controls="transport2" aria-selected="false">
                            <div class="icon mb">
                                <i class="fa-light fa-plane-departure fa-2x text-theme"></i>
                            </div>
                            <span class="fs-5 fw-bold text-dark">Departure</span>
                        </button>
                    </li>

                </ul>
            </div>
        </div>

        <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content text-center">
                    <div class="modal-body p-5">

                        {{-- Success Animation --}}
                        <div class="success-animation mb-4">
                            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                <circle class="checkmark__circle" cx="26" cy="26" r="25"
                                    fill="none" />
                                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                            </svg>
                        </div>

                        {{-- Success Message --}}
                        <h3 class="fw-bold mb-3">You can start conversation now!</h3>
                        <p class="mb-0" id="success-message"></p>

                    </div>
                </div>
            </div>
        </div>



        <div class="tab-content" id="bookingTabContent">

            <!-- tour-packages Tab Pane -->
            <div class="tab-pane fade show active" id="tour-packages" role="tabpanel"
                aria-labelledby="tour-packages-tab">
                <section class="category-area2 bg-top-center position-relative overflow-hidden space-extra-bottom">
                    <div class="container th-container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="title-area text-center">
                                    <span class="sub-title" style="color: #0c1524;">.</span>
                                    <h2 class="sec-title" style="color: #0c1524;">.</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container py-4">
                        <div class="row g-4">

                            <style>
                                .glass-filter-btn {
                                    background: rgba(255, 255, 255, 0.08);
                                    backdrop-filter: blur(12px);
                                    -webkit-backdrop-filter: blur(12px);
                                    border: 1px solid rgba(255, 255, 255, 0.2);
                                    color: #b0b0b0;
                                    padding: 10px 24px;
                                    border-radius: 30px;
                                    font-size: 15px;
                                    font-weight: 600;
                                    cursor: pointer;
                                    transition: all 0.3s ease;
                                    display: inline-flex;
                                    align-items: center;
                                    gap: 8px;
                                }

                                .glass-filter-btn i {
                                    font-size: 14px;
                                }

                                .glass-filter-btn:hover {
                                    background: rgba(255, 255, 255, 0.2);
                                    color: #ffffff;
                                    transform: translateY(-2px);
                                }

                                /* Active State for Filter Button */
                                .glass-filter-btn.active {
                                    background: rgba(255, 255, 255, 0.3);
                                    border-color: #ffffff;
                                    color: #ffffff;
                                    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
                                }

                                /* Custom Styles for Background Image Card */
                                .explore-custom-card {
                                    position: relative;
                                    border-radius: 24px;
                                    overflow: hidden;
                                    height: 500px;
                                    /* Adjust height if needed */
                                    display: flex;
                                    align-items: end;
                                    justify-content: center;
                                    transition: transform 0.3s ease, box-shadow 0.3s ease;
                                }

                                .explore-custom-card:hover {
                                    transform: translateY(-5px);
                                    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
                                }

                                /* Background Image setup */
                                .explore-custom-card .bg-image {
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    width: 100%;
                                    height: 100%;
                                    object-fit: cover;
                                    z-index: 1;
                                    transition: transform 0.5s ease;
                                }

                                .explore-custom-card:hover .bg-image {
                                    transform: scale(1.05);
                                    /* Slight zoom on hover */
                                }

                                /* Dark gradient overlay so text is readable */
                                .explore-custom-card::after {
                                    content: '';
                                    position: absolute;
                                    inset: 0;
                                    /* background: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.4) 50%, rgba(0,0,0,0.85) 100%); */
                                    z-index: 2;
                                }

                                /* Center Content Area */
                                .explore-custom-card .destination-content {
                                    position: relative;
                                    z-index: 3;
                                    text-align: left;
                                    padding: 24px;
                                    width: 100%;
                                    display: flex;
                                    flex-direction: column;
                                    align-items: flex-start;
                                }

                                .explore-custom-card .title {
                                    margin-bottom: 12px;
                                }

                                .explore-custom-card .title a {
                                    color: #ffffff;
                                    font-size: 24px;
                                    font-weight: 700;
                                    text-decoration: none;
                                    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
                                }

                                .explore-custom-card .destination-details {
                                    color: #e6e6e6;
                                    font-size: 15px;
                                    line-height: 1.5;
                                    margin-bottom: 20px;
                                    display: -webkit-box;
                                    -webkit-line-clamp: 3;
                                    -webkit-box-orient: vertical;
                                    overflow: hidden;
                                    text-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
                                }

                                .destination-content a {
                                    align-self: flex-end;
                                }

                                /* Glassmorphism View More Button (Matches old badge style) */
                                .explore-custom-card .glass-btn {
                                    background: rgba(255, 255, 255, 0.15);
                                    backdrop-filter: blur(10px);
                                    -webkit-backdrop-filter: blur(10px);
                                    border: 1px solid rgba(255, 255, 255, 0.3);
                                    color: #ffffff;
                                    padding: 8px 24px;
                                    border-radius: 30px;
                                    font-size: 14px;
                                    font-weight: 600;
                                    text-decoration: none;
                                    display: inline-block;
                                    transition: all 0.3s ease;
                                }

                                .explore-custom-card .glass-btn:hover {
                                    background: rgba(255, 255, 255, 0.3);
                                    border-color: #ffffff;
                                    color: #ffffff;
                                }
                            </style>

                            <!-- Card 01 -->
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item"
                                data-category="mountains religion ">
                                <div class="explore-custom-card">
                                    <img class="bg-image"
                                        src="{{ asset('assets/img/documentary/doc-01/sigiriya-rock-2.jpg') }}"
                                        alt="Sigiriya Rock Fortress">
                                    <div class="destination-content">
                                        <h3 class="title">
                                            <a href="{{ route('tour-details', ['tour_id' => '01']) }}">3 Days Kandy
                                                and
                                                Sigiriya tour</a>
                                        </h3>
                                        <p class="destination-details">
                                            Experience the cultural heart of Sri Lanka with iconic landmarks and
                                            authentic village life.
                                        </p>
                                        <a href="{{ route('tour-details', ['tour_id' => '01']) }}"
                                            class="glass-btn">View
                                            More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item" data-category="">
                                <div class="explore-custom-card">
                                    <img class="bg-image"
                                        src="{{ asset('assets/img/explore/pexels-genine-alyssa-pedreno-andrada-1263127-2932486.jpg') }}"
                                        alt="3 Days South Coast & Kandy Tour">
                                    <div class="destination-content">
                                        <h3 class="title">
                                            <a href="{{ route('tour-details', ['tour_id' => '02']) }}">3 Days South
                                                Coast &
                                                Kandy Tour</a>
                                        </h3>
                                        <p class="destination-details">
                                            Discover southern coast beauty combined with cultural charm and sacred
                                            temples.
                                        </p>
                                        <a href="{{ route('tour-details', ['tour_id' => '02']) }}"
                                            class="glass-btn">View
                                            More</a>
                                    </div>
                                </div>
                            </div>



                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item" data-category="">
                                <div class="explore-custom-card">
                                    <img class="bg-image" src="{{ asset('assets/img/Gallefort/IMG_2486.jpg') }}"
                                        alt="5 Days Cultural & Coastal Tour">
                                    <div class="destination-content">
                                        <h3 class="title">
                                            <a href="{{ route('tour-details', ['tour_id' => '04']) }}">5 Days
                                                Cultural &
                                                Coastal Tour</a>
                                        </h3>
                                        <p class="destination-details">
                                            Perfect mix of Sri Lanka’s heritage, wildlife, and beautiful southern
                                            beaches.
                                        </p>
                                        <a href="{{ route('tour-details', ['tour_id' => '04']) }}"
                                            class="glass-btn">View
                                            More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item" data-category="">
                                <div class="explore-custom-card">
                                    <img class="bg-image"
                                        src="{{ asset('assets/img/tour/tour-03/pinnawala-elephant-orphanage.jpg') }}"
                                        alt="6 Days Classic Sri Lanka Tour">
                                    <div class="destination-content">
                                        <h3 class="title">
                                            <a href="{{ route('tour-details', ['tour_id' => '03']) }}">6 Days Classic
                                                Sri
                                                Lanka Tour</a>
                                        </h3>
                                        <p class="destination-details">
                                            A balanced journey of culture, hill country, wildlife, and coastal
                                            destinations.
                                        </p>
                                        <a href="{{ route('tour-details', ['tour_id' => '03']) }}"
                                            class="glass-btn">View
                                            More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item" data-category="">
                                <div class="explore-custom-card">
                                    <img class="bg-image" src="{{ asset('assets/img/tour/tour-06/ella-train.jpg') }}"
                                        alt="8 Days Cultural, Wildlife & Coastal Tour">
                                    <div class="destination-content">
                                        <h3 class="title">
                                            <a href="{{ route('tour-details', ['tour_id' => '06']) }}">8 Days
                                                Cultural,
                                                Wildlife & Coastal Tour</a>
                                        </h3>
                                        <p class="destination-details">
                                            A perfect balance of adventure, nature, and relaxation across Sri Lanka.
                                        </p>
                                        <a href="{{ route('tour-details', ['tour_id' => '06']) }}"
                                            class="glass-btn">View
                                            More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item" data-category="">
                                <div class="explore-custom-card">
                                    <img class="bg-image"
                                        src="{{ asset('assets/img/tour/tour-05/anuradhapura.jpg') }}"
                                        alt="10 Days Grand Sri Lanka Tour">
                                    <div class="destination-content">
                                        <h3 class="title">
                                            <a href="{{ route('tour-details', ['tour_id' => '05']) }}">10 Days Grand
                                                Sri
                                                Lanka Tour</a>
                                        </h3>
                                        <p class="destination-details">
                                            Explore ancient kingdoms, hill country, wildlife safaris, and coastal
                                            relaxation.
                                        </p>
                                        <a href="{{ route('tour-details', ['tour_id' => '05']) }}"
                                            class="glass-btn">View
                                            More</a>
                                    </div>
                                </div>
                            </div>



                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item" data-category="">
                                <div class="explore-custom-card">
                                    <img class="bg-image" src="{{ asset('assets/img/tour/tour-07/negombo.jpg') }}"
                                        alt="13 Days Grand Sri Lanka Tour">
                                    <div class="destination-content">
                                        <h3 class="title">
                                            <a href="{{ route('tour-details', ['tour_id' => '07']) }}">13 Days Grand
                                                Sri
                                                Lanka Tour</a>
                                        </h3>
                                        <p class="destination-details">
                                            A complete island experience with culture, wildlife, and pristine beaches.
                                        </p>
                                        <a href="{{ route('tour-details', ['tour_id' => '07']) }}"
                                            class="glass-btn">View
                                            More</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item" data-category="">
                                <div class="explore-custom-card">
                                    <img class="bg-image"
                                        src="{{ asset('assets/img/tour/tour-08/pigeon-island.jpg') }}"
                                        alt="15 Days Grand Sri Lanka Tour">
                                    <div class="destination-content">
                                        <h3 class="title">
                                            <a href="{{ route('tour-details', ['tour_id' => '08']) }}">15 Days Grand
                                                Sri
                                                Lanka Tour</a>
                                        </h3>
                                        <p class="destination-details">
                                            This 15-day Sri Lanka tour offers a deep exploration of the island with
                                            comfort
                                            and expert guidance.
                                        </p>
                                        <a href="{{ route('tour-details', ['tour_id' => '08']) }}"
                                            class="glass-btn">View
                                            More</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </section>
            </div>

            <!-- customize tour Tab Pane -->
            <div class="tab-pane fade show" id="customize-tour" role="tabpanel"
                aria-labelledby="customize-tour-tab">
                <section class="category-area2 bg-top-center position-relative overflow-hidden space-extra-bottom">
                    <div class="container th-container mb-5">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="title-area text-center">
                                    <span class="sub-title" style="color: #0c1524;">.</span>
                                    <h2 class="sec-title" style="color: #0c1524;">.</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container" style="min-height: 700px;">

                        <div class="row transition-col block-active" id="about-block-1">
                            <div class="col-xl-6">
                                <div class="img-box1">
                                    <div class="img1">
                                        <img src="{{ asset('assets/img/normal/about_3_1.jpg') }}" alt="About">
                                    </div>
                                    <div class="img2">
                                        <img src="{{ asset('assets/img/normal/about_3_2.jpg') }}" alt="About">
                                    </div>
                                    <div class="img3">
                                        <img src="{{ asset('assets/img/normal/about_3_3.jpg') }}" alt="About">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="ps-xl-4 ms-xl-2">
                                    <div class="title-area mb-20 pe-xl-5 me-xl-5">
                                        <span class="sub-title style1 text-light">How It Works</span>
                                        <h2 class="text-light sec-title mb-20 pe-xl-5 me-xl-5 heading">Plan Your Trip
                                            With us</h2>

                                        <p class="sec-text mb-30">There are many variations of passages of available
                                            but
                                            the majority
                                            have
                                            suffered alteration in some form, by injected hum randomised words which
                                            don't
                                            look even
                                            slightly.
                                        </p>
                                    </div>
                                    <div class="about-item-wrap">
                                        <div class="about-item">
                                            <div class="about-item_img"><img
                                                    src="{{ asset('assets/img/icon/map3.svg') }}" alt="">
                                            </div>
                                            <div class="about-item_centent">
                                                <h5 class="box-title">Exclusive Trip</h5>
                                                <p class="about-item_text">There are many variations of passages of
                                                    available but the
                                                    majority.</p>
                                            </div>
                                        </div>
                                        <div class="about-item">
                                            <div class="about-item_img"><img
                                                    src="{{ asset('assets/img/icon/guide.svg') }}" alt="">
                                            </div>
                                            <div class="about-item_centent">
                                                <h5 class="box-title">Professional Guide</h5>
                                                <p class="about-item_text">There are many variations of passages of
                                                    available but the
                                                    majority.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center mt-45">
                                        <button id="show-form-btn" class="th-btn style3 th-icon">Book Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="form-block-1" class="col-xl-7 mx-auto transition-col block-collapsed d-none">
                            <div class="booking-form-wrap style2 bg-smoke p-5">
                                <div class="title-area text-center">
                                    <h3 class="sec-title mb-30">Tour Plan</h3>
                                </div>

                                <form id="custom-tour-booking-form" class="th-form">
                                    @csrf
                                    <input type="hidden" name="form_type" value="Custom_Tour">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Name*" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="number" class="form-control" name="pax"
                                                placeholder="Pax*" required min="1">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="arrival_date">Arrival Date</label>
                                            <input type="date" class="form-control" name="arrival_date"
                                                placeholder="Arrival Date*" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="departure_date">Departure Date</label>
                                            <input type="date" class="form-control" name="departure_date"
                                                placeholder="Departure Date*" required>
                                        </div>
                                    </div>

                                    <div class="form-group mb-30">
                                        <textarea name="message" cols="30" rows="3" class="form-control" placeholder="Message..."></textarea>
                                    </div>

                                    <div class="d-flex justify-content-around gap-3">
                                        <button type="button" id="hide-form-btn" class="th-btn style-alt w-100">
                                            <i class="fas fa-arrow-left me-2"></i> How It Works
                                        </button>
                                        <button type="submit" id="submit-btn" class="th-btn-whatsapp w-100">
                                            <i class="fab fa-whatsapp me-2"></i> Get Quotation
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </section>
            </div>

            <!-- Transport Tab Pane -->
            <div class="tab-pane fade show" id="transport" role="tabpanel" aria-labelledby="transport-tab">
                <section class="category-area2 bg-top-center position-relative overflow-hidden space-extra-bottom">
                    <div class="container th-container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="title-area text-center">
                                    <span class="sub-title" style="color: #0c1524;">.</span>
                                    <h2 class="sec-title" style="color: #0c1524;">.</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="nav nav-tabs tour-tabs style3" id="nav-tab" role="tablist">
                            {{-- <button class="nav-link th-btn active" id="nav-step-transport1-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-step-transport1" type="button">Arrival</button> --}}
                            {{-- <button class="nav-link th-btn" id="nav-step-transport2-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-step-transport2" type="button">Departure</button> --}}
                            {{-- <button class="nav-link th-btn" id="nav-step-transport3-tab" data-bs-toggle="tab" data-bs-target="#nav-step-transport3" type="button">Tour</button>
                      <button class="nav-link th-btn" id="nav-step-transport4-tab" data-bs-toggle="tab" data-bs-target="#nav-step-transport4" type="button">Excision</button> --}}
                        </div>

                        <div class="tab-content" id="nav-tabContent">

                            <div class="tab-pane fade active show" id="nav-step-transport1" role="tabpanel">
                                <div class="container" style="min-height: 1100px;">

                                    <div class="row transition-col block-active" id="about-block-2">
                                        <div class="col-xl-7">
                                            <div class="img-box2">
                                                <div class="img1 d-none d-md-block">
                                                    <img style="width: 585px;"
                                                        src="{{ asset('assets/img/normal/WhatsApp-Image-2024-06-12-at-1sdfsd5.53.54_86a7873012.jpg') }}"
                                                        alt="About">
                                                </div>
                                                <div class="img2">
                                                    <img style="width:393px;"
                                                        src="{{ asset('assets/img/normal/maxresdefault (1).jpg') }}"
                                                        alt="About">
                                                    {{-- <a href="https://www.youtube.com/watch?v=cQfIUPw72Dk" class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-5">
                                            <div class="row">
                                                <div id="arrival-content-wrapper" class="row w-100 mx-auto">
                                                    <div class="col-xl-12 transition-col">
                                                        <div class="pe-xl-5">
                                                            <div class="title-area mb-20 text-center text-xl-start">
                                                                <span class="text-light sub-title style1 ">How It
                                                                    Works</span>
                                                                <h2 class="text-light sec-title mb-20">Your
                                                                    Hassle-Free
                                                                    Arrival in
                                                                    3
                                                                    Easy Steps</h2>
                                                            </div>
                                                            <p class="sec-text mb-30 text-center text-xl-start">From
                                                                booking to boarding, we make your transfer experience
                                                                simple
                                                                and transparent.</p>

                                                            <div class="about-item-wrap">
                                                                <div class="about-item style2">
                                                                    <div class="about-item_img"><img
                                                                            src="{{ asset('assets/img/icon/about_1_11.svg') }}"
                                                                            alt="Book Icon"></div>
                                                                    <div class="about-item_centent">
                                                                        <h5 class="box-title">Book & Track</h5>
                                                                        <p class="about-item_text">Provide your flight
                                                                            number during booking. We monitor arrivals
                                                                            in
                                                                            real-time, guaranteeing your driver is ready
                                                                            when you land, regardless of delays.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="about-item style2">
                                                                    <div class="about-item_img"><img
                                                                            src="{{ asset('assets/img/icon/about_1_22.svg') }}"
                                                                            alt="Meet Icon"></div>
                                                                    <div class="about-item_centent">
                                                                        <h5 class="box-title">Meet & Greet</h5>
                                                                        <p class="about-item_text">Look for your
                                                                            dedicated
                                                                            driver upon clearing baggage claim. They
                                                                            will be
                                                                            holding a personalized sign for immediate,
                                                                            stress-free assistance.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="about-item style2">
                                                                    <div class="about-item_img"><img
                                                                            src="{{ asset('assets/img/icon/about_1_33.svg') }}"
                                                                            alt="Transfer Icon"></div>
                                                                    <div class="about-item_centent">
                                                                        <h5 class="box-title">Direct Transfer</h5>
                                                                        <p class="about-item_text">Relax in a
                                                                            high-quality
                                                                            vehicle. Your driver handles the luggage and
                                                                            takes you straight to your stop, ensuring
                                                                            your
                                                                            vacation starts instantly.</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="text-center mt-45">
                                                                <button id="show-form-btn"
                                                                    class="th-btn style3 th-icon">Book Now</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="form-block-2"
                                        class="col-xl-7 mx-auto transition-col block-collapsed d-none">
                                        <div class="booking-form-wrap style2 bg-smoke p-5">
                                            <div class="title-area text-center">
                                                <h3 class="sec-title">Book Your Arrival Transfer Now</h3>
                                            </div>

                                            <form class="th-form">
                                                @csrf
                                                <input type="hidden" name="form_type" value="Arrival">
                                                <div class="row">
                                                    <div class="form-group col-md-6"><input type="text"
                                                            class="form-control" name="name"
                                                            placeholder="Full Name*" required></div>
                                                    <div class="form-group col-md-6"><input type="number"
                                                            class="form-control" name="pax"
                                                            placeholder="No. of Passengers (Pax)*" required
                                                            min="1"></div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-md-4"><input type="text"
                                                            class="form-control" name="flight_no"
                                                            placeholder="Flight No.*" required></div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label class="form-label">Arrival Date:</label>
                                                        <input type="date" class="form-control date-picker"
                                                            name="date" placeholder="Arrival Date*" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label
                                                            class="block text-sm font-medium text-gray-700 mb-1">Arrival
                                                            Time (24h format):</label>
                                                        <input type="time"
                                                            class="form-control time-picker border w-full"
                                                            name="time" placeholder="Time (24h format)*" required>
                                                    </div>
                                                </div>

                                                <div class="form-group mb-30">
                                                    <input type="text" class="form-control" name="pickup_address"
                                                        value="Bandaranaike International Airport (BIA)"
                                                        placeholder="Pickup Location*" readonly>
                                                </div>

                                                <div class="form-group mb-30">
                                                    <input type="text" class="form-control" name="drop_address"
                                                        placeholder="Drop-off Address (Hotel Name/Location)*" required>
                                                </div>

                                                <div class="form-group mb-30">
                                                    <label class="form-label mb-3">Luggage Details:</label>
                                                    <div class="row">
                                                        <div class="col-6"><input type="number"
                                                                class="form-control" name="luggage_large"
                                                                placeholder="Large" min="0">
                                                        </div>
                                                        <div class="col-6"><input type="number"
                                                                class="form-control" name="luggage_small"
                                                                placeholder="Small" min="0">
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- <div class="form-group mb-30">
                                                <label class="form-label mb-3">Preferred Vehicle Type:</label>
                                                <select name="vehicle_type" class="form-select" required>
                                                    <option value="" disabled selected>Select Vehicle...</option>
                                                    <option value="car">Car (1-2 Pax)</option>
                                                    <option value="van_small">Van (3-5 Pax)</option>
                                                    <option value="van_large">Large Van (6-8 Pax)</option>
                                                    <option value="bus">Mini Bus (9-15 Pax)</option>
                                                </select>
                                            </div> --}}

                                                <div class="form-group mb-30 vehicle-selector">
                                                    <label class="form-label mb-3 **professional-label**">Preferred
                                                        Vehicle
                                                        Type:</label>

                                                    <div class="vehicle-scroller-container">
                                                        <button type="button" class="scroll-btn scroll-left"
                                                            id="scroll-left-btn" aria-label="Scroll left">
                                                            <i class="fa-solid fa-chevron-left"></i>
                                                        </button>

                                                        <div class="vehicle-selection-wrapper pb-4"
                                                            id="vehicle-scroller">

                                                            <input type="radio" id="vehicle-car"
                                                                name="vehicle_type" value="car"
                                                                class="vehicle-radio" hidden required checked>
                                                            <label for="vehicle-car" class="vehicle-card-label">
                                                                <div class="tour-box vehicle-tour-card">
                                                                    <div class="tour-box_img vehicle-img-area">
                                                                        <img src="{{ asset('assets/img/vehicle/car01.jpg') }}"
                                                                            alt="Car Image">
                                                                        <div class="selection-checkmark"><i
                                                                                class="fa-solid fa-check"></i></div>
                                                                    </div>
                                                                    <div
                                                                        class="vehicle-content **professional-content**">
                                                                        <h3 class="box-title vehicle-title">Car</h3>
                                                                        <p class="vehicle-subtitle">Honda Civic</p>
                                                                        <div class="vehicle-pax-info">
                                                                            <i class="fa-solid fa-user-group"></i> 1-2
                                                                            Pax
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </label>

                                                            <input type="radio" id="vehicle-van-small"
                                                                name="vehicle_type" value="van_small"
                                                                class="vehicle-radio" hidden>
                                                            <label for="vehicle-van-small" class="vehicle-card-label">
                                                                <div class="tour-box vehicle-tour-card">
                                                                    <div class="tour-box_img vehicle-img-area">
                                                                        <img src="{{ asset('assets/img/vehicle/van01.jpg') }}"
                                                                            alt="Small Van Image">
                                                                        <div class="selection-checkmark"><i
                                                                                class="fa-solid fa-check"></i></div>
                                                                    </div>
                                                                    <div
                                                                        class="vehicle-content **professional-content**">
                                                                        <h3 class="box-title vehicle-title">Van</h3>
                                                                        <p class="vehicle-subtitle">Toyota Hiace</p>
                                                                        <div class="vehicle-pax-info">
                                                                            <i class="fa-solid fa-user-group"></i> 3-5
                                                                            Pax
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </label>

                                                            <input type="radio" id="vehicle-van-large"
                                                                name="vehicle_type" value="van_large"
                                                                class="vehicle-radio" hidden>
                                                            <label for="vehicle-van-large" class="vehicle-card-label">
                                                                <div class="tour-box vehicle-tour-card">
                                                                    <div class="tour-box_img vehicle-img-area">
                                                                        <img src="{{ asset('assets/img/vehicle/van02.jpg') }}"
                                                                            alt="Large Van Image">
                                                                        <div class="selection-checkmark"><i
                                                                                class="fa-solid fa-check"></i></div>
                                                                    </div>
                                                                    <div
                                                                        class="vehicle-content **professional-content**">
                                                                        <h3 class="box-title vehicle-title">Large Van
                                                                        </h3>
                                                                        <p class="vehicle-subtitle">Mercedes Sprinter
                                                                        </p>
                                                                        <div class="vehicle-pax-info">
                                                                            <i class="fa-solid fa-user-group"></i> 6-8
                                                                            Pax
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </label>

                                                            <input type="radio" id="vehicle-bus-1"
                                                                name="vehicle_type" value="bus1"
                                                                class="vehicle-radio" hidden>
                                                            <label for="vehicle-bus-1" class="vehicle-card-label">
                                                                <div class="tour-box vehicle-tour-card">
                                                                    <div class="tour-box_img vehicle-img-area">
                                                                        <img src="{{ asset('assets/img/vehicle/bus01.jpg') }}"
                                                                            alt="Mini Bus Image">
                                                                        <div class="selection-checkmark"><i
                                                                                class="fa-solid fa-check"></i></div>
                                                                    </div>
                                                                    <div
                                                                        class="vehicle-content **professional-content**">
                                                                        <h3 class="box-title vehicle-title">Mini Bus
                                                                        </h3>
                                                                        <p class="vehicle-subtitle">Mitsubishi Fuso
                                                                        </p>
                                                                        <div class="vehicle-pax-info">
                                                                            <i class="fa-solid fa-user-group"></i>
                                                                            9-15 Pax
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </label>

                                                        </div>

                                                        <button type="button" class="scroll-btn scroll-right"
                                                            id="scroll-right-btn" aria-label="Scroll right">
                                                            <i class="fa-solid fa-chevron-right"></i>
                                                        </button>

                                                    </div>
                                                </div>

                                                <div class="form-group mb-4">
                                                    <textarea name="special_requirements" id="special_requirements" cols="30" rows="3" class="form-control"
                                                        placeholder="Special Requirements (Baby Seat, Wheelchair access, etc.)"></textarea>
                                                </div>

                                                <div class="d-md-flex justify-content-around gap-3">
                                                    <button type="button" id="hide-form-btn"
                                                        class="th-btn style-alt w-100 mb-1">
                                                        <i class="fas fa-arrow-left me-2"></i> How It Works
                                                    </button>
                                                    <button type="submit" id="submit-btn"
                                                        class="th-btn-whatsapp w-100 mb-1">
                                                        <i class="fab fa-whatsapp me-2"></i> Get Quotation
                                                    </button>
                                                </div>
                                                {{-- <button type="submit" id="submit-btn" class="th-btn-whatsapp w-100" >
                                                 <i class="fab fa-whatsapp me-2"></i> Get Quotation
                                            </button>
                                                
                                            <button type="button" id="hide-form-btn" class="th-btn style-alt w-100 mt-2">
                                                <i class="fas fa-arrow-left me-2"></i> How It Works
                                            </button> --}}
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>

            <!-- departure Tab Pane -->
            <div class="tab-pane fade show" id="transport2" role="tabpanel" aria-labelledby="transport-tab">
                <section class="category-area2 bg-top-center position-relative overflow-hidden space-extra-bottom">
                    <div class="container th-container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="title-area text-center">
                                    <span class="sub-title" style="color: #0c1524;">.</span>
                                    <h2 class="sec-title" style="color: #0c1524;">.</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="nav nav-tabs tour-tabs style3" id="nav-tab" role="tablist">
                            {{-- <button class="nav-link th-btn active" id="nav-step-transport1-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-step-transport1" type="button">Arrival</button> --}}
                            {{-- <button class="nav-link th-btn" id="nav-step-transport2-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-step-transport2" type="button">Departure</button> --}}
                            {{-- <button class="nav-link th-btn" id="nav-step-transport3-tab" data-bs-toggle="tab" data-bs-target="#nav-step-transport3" type="button">Tour</button>
                      <button class="nav-link th-btn" id="nav-step-transport4-tab" data-bs-toggle="tab" data-bs-target="#nav-step-transport4" type="button">Excision</button> --}}
                        </div>

                        <div class="tab-content" id="nav-tabContent">

                            <div class="tab-pane fade active show" id="nav-step-transport2" role="tabpanel">
                                <div class="container" style="min-height: 1100px;">

                                    <div class="row transition-col block-active" id="about-block-3">
                                        <div class="col-xl-7">
                                            <div class="img-box2">
                                                <div class="img1">
                                                    <img style="width: 585px;"
                                                        src="{{ asset('assets/img/normal/byee2.png') }}"
                                                        alt="About">
                                                </div>
                                                <div class="img2 d-none d-md-block">
                                                    <img style="width:400px; height:300px;"
                                                        src="{{ asset('assets/img/normal/39330.jpg') }}"
                                                        alt="About">
                                                    {{-- <a href="https://www.youtube.com/watch?v=cQfIUPw72Dk" class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-5">
                                            <div class="row">
                                                <div id="arrival-content-wrapper" class="row w-100 mx-auto">
                                                    <div class="col-xl-12 transition-col">
                                                        <div class="pe-xl-5">
                                                            <div class="title-area mb-20 text-center text-xl-start">
                                                                <span class="text-light sub-title style1 ">How It
                                                                    Works</span>
                                                                <h2 class="text-light sec-title mb-20">Your
                                                                    Stress-Free Departure
                                                                    in 3
                                                                    Easy Steps</h2>
                                                            </div>
                                                            <p class="sec-text mb-30 text-center text-xl-start">We
                                                                ensure
                                                                you get to the airport with plenty of time and zero
                                                                hassle.
                                                            </p>

                                                            <div class="about-item-wrap">
                                                                <div class="about-item style2">
                                                                    <div class="about-item_img"><img
                                                                            src="{{ asset('assets/img/icon/about_1_11.svg') }}"
                                                                            alt="Book Icon"></div>
                                                                    <div class="about-item_centent">
                                                                        <h5 class="box-title">Confirm & Schedule</h5>
                                                                        <p class="about-item_text">Book your transfer
                                                                            time
                                                                            based on your flight's departure. We factor
                                                                            in
                                                                            local traffic to ensure a timely arrival at
                                                                            the
                                                                            airport.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="about-item style2">
                                                                    <div class="about-item_img"><img
                                                                            src="{{ asset('assets/img/icon/about_2_22.svg') }}"
                                                                            alt="Meet Icon"></div>
                                                                    <div class="about-item_centent">
                                                                        <h5 class="box-title">Hotel Pick-up</h5>
                                                                        <p class="about-item_text">Your driver will
                                                                            arrive
                                                                            at your specified location (hotel/residence)
                                                                            at
                                                                            the scheduled time, ready to assist with
                                                                            your
                                                                            luggage.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="about-item style2">
                                                                    <div class="about-item_img"><img
                                                                            src="{{ asset('assets/img/icon/about_1_33.svg') }}"
                                                                            alt="Transfer Icon"></div>
                                                                    <div class="about-item_centent">
                                                                        <h5 class="box-title">Direct to Terminal</h5>
                                                                        <p class="about-item_text">Enjoy a relaxing
                                                                            ride
                                                                            straight to the departure terminal. We
                                                                            handle
                                                                            the transport so you can focus on your
                                                                            journey
                                                                            ahead.</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="text-center mt-45">
                                                                <button id="show-form-btn"
                                                                    class="th-btn style3 th-icon">Book Now</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="form-block-3"
                                        class="col-xl-7 mx-auto transition-col block-collapsed d-none">
                                        <div class="booking-form-wrap style2 bg-smoke p-5">
                                            <div class="title-area text-center">
                                                <h3 class="sec-title mb-30">Book Your Departure Transfer Now</h3>
                                            </div>

                                            <form class="th-form">
                                                @csrf
                                                <input type="hidden" name="form_type" value="Departure">
                                                <div class="row">
                                                    <div class="form-group col-md-6"><input type="text"
                                                            class="form-control" name="name"
                                                            placeholder="Full Name*" required></div>
                                                    <div class="form-group col-md-6"><input type="number"
                                                            class="form-control" name="pax"
                                                            placeholder="No. of Passengers (Pax)*" required
                                                            min="1"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-4"><input type="text"
                                                            class="form-control" name="flight_no"
                                                            placeholder="Flight No.*" required></div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label class="form-label">Departure Date:</label>
                                                        <input type="date" class="form-control date-picker"
                                                            name="date" placeholder="Departure Date*" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="form-label">Departure Time:</label>
                                                        <input type="time" class="form-control time-picker"
                                                            name="time" placeholder="Time (24h format)*" required>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-30">
                                                    <input type="text" class="form-control" name="pickup_address"
                                                        placeholder="Pick-up Address (Hotel Name/Location)*" required>
                                                </div>
                                                <div class="form-group mb-30">
                                                    <input type="text" class="form-control" name="drop_address"
                                                        value="Bandaranaike International Airport (BIA)"
                                                        placeholder="Drop-off Location*" readonly>
                                                </div>
                                                <div class="form-group mb-30">
                                                    <label class="form-label">Luggage Details:</label>
                                                    <div class="row">
                                                        <div class="col-6"><input type="number"
                                                                class="form-control" name="luggage_large"
                                                                placeholder="Large" min="0">
                                                        </div>
                                                        <div class="col-6"><input type="number"
                                                                class="form-control" name="luggage_small"
                                                                placeholder="Small" min="0">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group mb-30 vehicle-selector">
                                                    <label class="form-label mb-3 **professional-label**">Preferred
                                                        Vehicle
                                                        Type:</label>

                                                    <div class="vehicle-scroller-container">
                                                        <button type="button" class="scroll-btn scroll-left"
                                                            id="scroll-left-btn" aria-label="Scroll left">
                                                            <i class="fa-solid fa-chevron-left"></i>
                                                        </button>

                                                        <div class="vehicle-selection-wrapper pb-4"
                                                            id="vehicle-scroller">

                                                            <input type="radio" id="vehicle-car2"
                                                                name="vehicle_type" value="car"
                                                                class="vehicle-radio" hidden required checked>
                                                            <label for="vehicle-car2" class="vehicle-card-label">
                                                                <div class="tour-box vehicle-tour-card">
                                                                    <div class="tour-box_img vehicle-img-area">
                                                                        <img src="{{ asset('assets/img/vehicle/car01.jpg') }}"
                                                                            alt="Car Image">
                                                                        <div class="selection-checkmark"><i
                                                                                class="fa-solid fa-check"></i></div>
                                                                    </div>
                                                                    <div
                                                                        class="vehicle-content **professional-content**">
                                                                        <h3 class="box-title vehicle-title">Car</h3>
                                                                        <p class="vehicle-subtitle">Honda Civic</p>
                                                                        <div class="vehicle-pax-info">
                                                                            <i class="fa-solid fa-user-group"></i> 1-2
                                                                            Pax
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </label>

                                                            <input type="radio" id="vehicle-van-small2"
                                                                name="vehicle_type" value="van_small"
                                                                class="vehicle-radio" hidden>
                                                            <label for="vehicle-van-small2"
                                                                class="vehicle-card-label">
                                                                <div class="tour-box vehicle-tour-card">
                                                                    <div class="tour-box_img vehicle-img-area">
                                                                        <img src="{{ asset('assets/img/vehicle/van01.jpg') }}"
                                                                            alt="Small Van Image">
                                                                        <div class="selection-checkmark"><i
                                                                                class="fa-solid fa-check"></i></div>
                                                                    </div>
                                                                    <div
                                                                        class="vehicle-content **professional-content**">
                                                                        <h3 class="box-title vehicle-title">Van</h3>
                                                                        <p class="vehicle-subtitle">Toyota Hiace</p>
                                                                        <div class="vehicle-pax-info">
                                                                            <i class="fa-solid fa-user-group"></i> 3-5
                                                                            Pax
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </label>

                                                            <input type="radio" id="vehicle-van-large2"
                                                                name="vehicle_type" value="van_large"
                                                                class="vehicle-radio" hidden>
                                                            <label for="vehicle-van-large2"
                                                                class="vehicle-card-label">
                                                                <div class="tour-box vehicle-tour-card">
                                                                    <div class="tour-box_img vehicle-img-area">
                                                                        <img src="{{ asset('assets/img/vehicle/van02.jpg') }}"
                                                                            alt="Large Van Image">
                                                                        <div class="selection-checkmark"><i
                                                                                class="fa-solid fa-check"></i></div>
                                                                    </div>
                                                                    <div
                                                                        class="vehicle-content **professional-content**">
                                                                        <h3 class="box-title vehicle-title">Large Van
                                                                        </h3>
                                                                        <p class="vehicle-subtitle">Mercedes Sprinter
                                                                        </p>
                                                                        <div class="vehicle-pax-info">
                                                                            <i class="fa-solid fa-user-group"></i> 6-8
                                                                            Pax
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </label>

                                                            <input type="radio" id="vehicle-bus-12"
                                                                name="vehicle_type" value="bus1"
                                                                class="vehicle-radio" hidden>
                                                            <label for="vehicle-bus-12" class="vehicle-card-label">
                                                                <div class="tour-box vehicle-tour-card">
                                                                    <div class="tour-box_img vehicle-img-area">
                                                                        <img src="{{ asset('assets/img/vehicle/bus01.jpg') }}"
                                                                            alt="Mini Bus Image">
                                                                        <div class="selection-checkmark"><i
                                                                                class="fa-solid fa-check"></i></div>
                                                                    </div>
                                                                    <div
                                                                        class="vehicle-content **professional-content**">
                                                                        <h3 class="box-title vehicle-title">Mini Bus
                                                                        </h3>
                                                                        <p class="vehicle-subtitle">Mitsubishi Fuso
                                                                        </p>
                                                                        <div class="vehicle-pax-info">
                                                                            <i class="fa-solid fa-user-group"></i>
                                                                            9-15 Pax
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </label>

                                                        </div>

                                                        <button type="button" class="scroll-btn scroll-right"
                                                            id="scroll-right-btn" aria-label="Scroll right">
                                                            <i class="fa-solid fa-chevron-right"></i>
                                                        </button>

                                                    </div>
                                                </div>

                                                <div class="form-group mb-4">
                                                    <textarea name="special_requirements" cols="30" rows="3" class="form-control"
                                                        placeholder="Special Requirements..."></textarea>
                                                </div>

                                                <div class="d-md-flex justify-content-around gap-3">
                                                    <button type="button" id="hide-form-btn"
                                                        class="th-btn style-alt w-100 mb-1">
                                                        <i class="fas fa-arrow-left me-2"></i> How It Works
                                                    </button>
                                                    <button type="submit" id="submit-btn"
                                                        class="th-btn-whatsapp w-100 mb-1">
                                                        <i class="fab fa-whatsapp me-2"></i> Get Quotation
                                                    </button>
                                                </div>
                                                {{-- <button type="submit" id="submit-btn" class="th-btn-whatsapp w-100" >
                                                <i class="fab fa-whatsapp me-2"></i> Get Quotation
                                            </button>
                                            <button type="button" id="hide-form-btn" class="th-btn style-alt w-100 mt-2">
                                                <i class="fas fa-arrow-left me-2"></i> How It Works
                                            </button> --}}
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const filterBtns = document.querySelectorAll('.glass-filter-btn');
            const items = document.querySelectorAll('.explore-item swiper-slide story-slide');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // 1. Remove 'active' class from all buttons and add to the clicked one
                    filterBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');

                    // 2. Get the filter category
                    const filterValue = this.getAttribute('data-filter');

                    // 3. Show/Hide items based on category (UPDATE KARAPU KALLA)
                    items.forEach(item => {
                        // Card eke thiyena categories tika gannawa (e.g., "city religion")
                        const itemCategories = item.getAttribute('data-category');

                        // Space eken wen karala array ekak hadagena, eke ape filterValue eka thiyenawada balanawa
                        if (filterValue === 'all' || itemCategories.split(' ').includes(
                                filterValue)) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });

            // 4. Page load weddima active button eka auto click karanna
            const defaultActiveBtn = document.querySelector('.glass-filter-btn.active');
            if (defaultActiveBtn) {
                defaultActiveBtn.click();
            }
        });
    </script>

    <style>
        /* --- New Section Button Styles (Responsive & Left Aligned) --- */
        .eco-section-btn {
            background-color: #0b5e65;
            color: #ffffff;
            border: none;
            border-radius: 50px;
            padding: 12px 28px;
            margin-left: 2%;
            font-size: 16px;
            /*font-weight: 600;*/
            box-shadow: 0 8px 25px rgba(11, 94, 101, 0.3);
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            /* Phone eke responsive wenna */
            max-width: 100%;
        }

        .eco-section-btn:hover {
            background-color: #1ca8cb;
            box-shadow: 0 10px 30px rgba(245, 138, 44, 0.4);
            transform: translateY(-4px);
            color: #ffffff;
        }

        /* --- SUPER HIGH Z-INDEX FOR MODAL TO ALWAYS BE ON TOP --- */
        .eco-custom-modal-wrapper {
            z-index: 999999 !important;
        }

        .modal-backdrop {
            z-index: 999998 !important;
            /* Modal eke kalu background eka */
        }

        /* --- Modal Base Styles --- */
        .eco-custom-modal-content {
            border: none;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        }

        .eco-custom-modal-header {
            background-color: #f8fafb;
            border-bottom: 1px solid #e9ecef;
            padding: 20px 30px;
            text-align: center;
            display: flex;
            justify-content: center;
            /* align-items: center; */
        }

        .eco-custom-modal-header .modal-title {
            color: #0b5e65;
            font-weight: 700;
            font-size: 1.5rem;
            text-align: center;
        }

        .eco-custom-modal-body {
            padding: 20px 30px;
            background-color: #ffffff;
        }

        /* --- Form Elements Styles --- */
        .eco-custom-form-group {
            margin-bottom: 20px;
        }

        .eco-custom-label {
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
            font-size: 0.95rem;
            display: block;
            text-align: left;
        }

        .eco-custom-input {
            border-radius: 12px !important;
            border: 1px solid #dce1e6 !important;
            padding: 12px 18px !important;
            font-size: 1rem !important;
            color: #555 !important;
            transition: all 0.3s ease !important;
            background-color: #fbfdff !important;
        }

        .eco-custom-input:focus {
            border-color: #0b5e65 !important;
            box-shadow: 0 0 0 4px rgba(11, 94, 101, 0.1) !important;
            background-color: #ffffff !important;
        }

        /* --- Image Upload Area Styles --- */
        .eco-img-upload-wrapper {
            text-align: center;
            margin-bottom: 30px;
        }

        .eco-img-preview {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 2px dashed #0b5e65;
            background-color: #f0f5f6;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            overflow: hidden;
            position: relative;
            transition: all 0.3s ease;
        }

        .eco-img-preview:hover {
            background-color: #e4edf0;
            border-color: #f58a2c;
        }

        .eco-img-preview i {
            font-size: 30px;
            color: #0b5e65;
            transition: 0.3s;
        }

        .eco-img-preview:hover i {
            color: #f58a2c;
        }

        .eco-img-preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
        }

        .eco-upload-text {
            font-size: 0.85rem;
            color: #777;
            margin-top: 10px;
            font-weight: 500;
        }

        /* --- Submit Button --- */
        .eco-custom-submit-btn {
            background-color: #0b5e65;
            color: #ffffff;
            border: none;
            border-radius: 12px;
            padding: 14px 40px;
            font-size: 1.1rem;
            /* font-weight: 600; */
            transition: all 0.3s ease;
            cursor: pointer;
            width: 100%;
            max-width: 300px;
        }

        .eco-custom-submit-btn:hover {
            background-color: #1ca8cb;
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(245, 138, 44, 0.3);
        }

        /* --- Star Rating Styles --- */
        .eco-star-rating-container {
            display: flex;
            gap: 8px;
            margin-top: 5px;
        }

        .eco-star-rating-container .eco-star {
            font-size: 24px;
            color: #dce1e6;
            /* Default gray color */
            cursor: pointer;
            transition: color 0.2s ease-in-out, transform 0.2s ease;
        }

        /* Hover wela thiyeddith, Click karala select unamath enna one color eka */
        .eco-star-rating-container .eco-star.active {
            color: #f58a2c;
            /* Theme orange color */
        }

        /* Podi pop effect ekak hover karaddi */
        .eco-star-rating-container .eco-star:hover {
            transform: scale(1.1);
        }
    </style>


    <!--========== Testimonial Area ============-->

    <style>
        /* Section Background & Overlay */
        .nh-testimonial-section {
            position: relative;
            padding: 100px 0;
            background-image: url('{{ asset('assets/img/2149153258.jpg') }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .nh-testimonial-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(30, 41, 65, 0.85);
            /* Dark blue transparency */
        }

        .nh-testimonial-section .container {
            max-width: 1500px;
            margin: 0 auto;
            position: relative;
            z-index: 10;
            padding: 0 40px;
        }

        /* Titles */
        .nh-text-center {
            text-align: center;
        }

        .nh-badge {
            display: inline-block;
            background: #13b5b1;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 15px;
            letter-spacing: 1px;
        }

        .nh-main-title {
            color: #ffffff;
            font-size: 36px;
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 50px;
        }

        /* Testimonial Card */
        .nh-card {
            background: #ffffff;
            border-radius: 34px;
            display: flex;
            align-items: center;
            padding: 34px 42px;
            gap: 28px;
            box-shadow: 0 18px 45px rgba(0, 0, 0, 0.12);
            max-width: 900px;
            min-height: 230px;
            margin: 0 auto;
        }

        /* Avatar Wrapper (Fixed for squash issue) */

        .nh-curve-border {
            position: absolute;
            width: 140px;
            height: 140px;
            border: 3px solid #13b5b1;
            border-radius: 50%;
            border-right-color: transparent;
            border-bottom-color: transparent;
            transform: rotate(-45deg);
        }

        .nh-img {
            width: 110px;
            height: 110px !important;
            min-width: 110px;
            min-height: 110px;
            border-radius: 50%;
            object-fit: cover;
            z-index: 2;
            flex-shrink: 0;
        }

        .nh-avatar-wrap {
            position: relative;
            flex: 0 0 120px;
            width: 120px;
            height: 120px;
            min-width: 120px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-shrink: 0;
        }

        /* Content Area (Fixed for text overflow) */
        .nh-content {
            flex: 1;
            min-width: 0;
        }

        .nh-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 10px;
        }

        .nh-name {
            color: #1a237e;
            font-size: 20px;
            font-weight: 700;
            margin: 0 0 5px 0;
        }

        .nh-desig {
            color: #13b5b1;
            font-size: 14px;
            font-weight: 500;
        }

        .nh-text {
            color: #555;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 15px;
            font-style: italic;
            word-wrap: break-word;
            overflow-wrap: break-word;
            word-break: break-word;
            max-height: 120px;
            overflow-y: auto;
            padding-right: 10px;
            max-height: 60px;
        }

        .nh-rating {
            color: #13b5b1;
            font-size: 14px;
        }

        /* Swiper Custom Navigation */
        .nh-relative-wrap {
            position: relative;
        }

        .nh-nav-next,
        .nh-nav-prev {
            width: 45px !important;
            height: 45px !important;
            background: #ffffff;
            border-radius: 50%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .nh-nav-next::after,
        .nh-nav-prev::after {
            font-size: 18px !important;
            color: #13b5b1;
            font-weight: bold;
        }

        .nh-nav-prev {
            top: 75%;
            left: -10px !important;
        }

        .nh-nav-next {
            top: 75%;
            right: -10px !important;
        }

        .nh-swiper .swiper-slide {
            display: flex;
            justify-content: center;
        }

        /* Responsive tweaks */
        @media (max-width: 768px) {
            .nh-testimonial-section {
                padding: 70px 0;
                background-attachment: scroll;
            }

            .nh-testimonial-section .container {
                padding: 0 16px;
            }

            .nh-main-title {
                font-size: 28px;
                margin-bottom: 30px;
            }

            .nh-card {
                width: 100%;
                max-height: none;
                height: auto;
                padding: 28px 22px;
                border-radius: 28px;
                flex-direction: column;
                gap: 14px;
                text-align: center;
            }

            .nh-avatar-wrap {
                width: 100px;
                height: 100px;
                min-width: 100px;
                flex: 0 0 100px;
                margin: 0 auto;
            }

            .nh-img {
                width: 100px;
                height: 100px !important;
                min-width: 100px;
                min-height: 100px;
            }

            .nh-content {
                width: 100%;
                flex: unset;
            }

            .nh-header {
                display: block;
                margin-bottom: 10px;
            }

            .nh-name {
                font-size: 22px;
                margin-bottom: 6px;
            }

            .nh-desig {
                justify-content: center;
                font-size: 14px;
            }

            .nh-text {
                max-height: 110px;
                font-size: 15px;
                line-height: 1.7;
                padding-right: 0;
                margin: 14px 0;
                overflow-y: auto;
            }

            .nh-rating {
                text-align: center;
                font-size: 15px;
            }

            .nh-nav-next,
            .nh-nav-prev {
                display: none !important;
            }
        }

        /* Custom Scrollbar for .nh-text */
        .nh-text::-webkit-scrollbar {
            width: 5px;
        }

        .nh-text::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .nh-text::-webkit-scrollbar-thumb {
            background: #13b5b1;
            border-radius: 10px;
        }
    </style>

    <section class="nh-testimonial-section">
        <div class="container mb-5">
            <div class="nh-title-wrap nh-text-center">
                <div class="nh-badge">
                    <i class="fa-solid fa-plane"></i> TESTIMONIALS
                </div>
                <h2 class="nh-main-title">What Our Customers Are Saying<br>About Us?</h2>
            </div>

            <div class="swiper nh-swiper nh-relative-wrap pb-5 pt-5">
                <div class="swiper-wrapper">

                    @foreach ($testimonials as $testi)
                        @php
                            $linkedUser = \App\Models\User::where('name', $testi->full_name)->first();
                        @endphp
                        <div class="swiper-slide">
                            <div class="nh-card">
                                <div class="nh-avatar-wrap">

                                    @if ($linkedUser && $linkedUser->profile_photo)
                                        <img src="{{ Storage::disk('s3')->url($linkedUser->profile_photo) }}"
                                            alt="{{ $testi->full_name }}" class="nh-img">
                                    @else
                                        <img src="{{ asset('assets/img/testimonial/testi-img-2_1.jpg') }}"
                                            alt="{{ $testi->full_name }}" class="nh-img">
                                    @endif
                                </div>

                                <div class="nh-content">
                                    <div class="nh-header">
                                        <div class="nh-user-info">
                                            <h3 class="nh-name">{{ $testi->full_name }}</h3>

                                            <span class="nh-desig"
                                                style="display: flex; align-items: center; gap: 8px;">


                                                <span>{{ $testi->country }}</span>

                                                @if (isset($testi->code))
                                                    <img src="https://flagcdn.com/w20/{{ strtolower($testi->code) }}.png"
                                                        alt="flag"
                                                        style="width: 20px; border-radius: 2px; box-shadow: 0 1px 2px rgba(0,0,0,0.1);">
                                                @endif

                                            </span>
                                        </div>

                                        {{-- <div class="nh-quote">
                                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none"
                                                stroke="#13b5b1" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path
                                                    d="M10 11h-4a3 3 0 0 1 -3 -3v-2a3 3 0 0 1 3 -3h3a3 3 0 0 1 3 3v6a6 6 0 0 1 -6 6h-1">
                                                </path>
                                                <path
                                                    d="M19 11h-4a3 3 0 0 1 -3 -3v-2a3 3 0 0 1 3 -3h3a3 3 0 0 1 3 3v6a6 6 0 0 1 -6 6h-1">
                                                </path>
                                            </svg>
                                        </div> --}}
                                    </div>

                                    <p class="nh-text">"{{ $testi->experience }}"</p>

                                    <div class="nh-rating">
                                        @for ($i = 0; $i < $testi->rating; $i++)
                                            <i class="fa-solid fa-star"></i>
                                        @endfor

                                        @for ($i = $testi->rating; $i < 5; $i++)
                                            <i class="fa-regular fa-star"></i>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
            <div class="swiper-button-next nh-nav-next"></div>
            <div class="swiper-button-prev nh-nav-prev"></div>
        </div>

        <div class="container mt-5 pt-5">
            <div class="col-12 text-center" style="height: 5rem">
                @auth
                    <button class="eco-section-btn" data-bs-toggle="modal" data-bs-target="#ecoTestimonialModal">
                        <i class="fa-solid fa-pen-to-square"></i> Share Your Experience
                    </button>
                @else
                    <button class="eco-section-btn" onclick="requireLogin()">
                        <i class="fa-solid fa-pen-to-square"></i> Share Your Experience
                    </button>
                @endauth

            </div>
        </div>
    </section>



    <!--========== Testimonial form model============-->

    <div class="modal fade eco-custom-modal-wrapper" id="ecoTestimonialModal" tabindex="-1"
        aria-labelledby="ecoTestimonialModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content eco-custom-modal-content">
                <div class="modal-header eco-custom-modal-header">
                    <h5 class="modal-title" id="ecoTestimonialModalLabel">How was your Experience?</h5>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body eco-custom-modal-body">
                    <form id="ecoTestimonialForm">

                        <div class="eco-img-upload-wrapper text-center mb-3">
                            <input type="file" id="ecoProfileUpload" name="profile_picture" class="d-none"
                                value="{{ old('profile_photo') }}" accept="image/*">

                            @auth
                                @if (auth()->user()->profile_photo)
                                    <img src="{{ asset('storage/' . auth()->user()->profile_photo) }}"
                                        alt="Profile Picture" class="rounded-circle"
                                        style="width: 150px; height: 150px; object-fit: cover;">
                                @else
                                    <img src="{{ 'https://ui-avatars.com/api/?name=' . urlencode(auth()->user()->name) . '&background=random' }}"
                                        class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                                @endif
                            @endauth
                        </div>

                        <div class="row">


                            @auth
                                <div class="col-md-6 eco-custom-form-group mb-3">
                                    <label class="eco-custom-label">Full Name</label>
                                    <input type="text" id="full_name" name="full_name"
                                        value="{{ auth()->user()->name }}" class="form-control eco-custom-input"
                                        placeholder="e.g. Michel Carlos" disabled>
                                    <span class="text-danger small error-text" id="error-full_name"></span>
                                </div>
                            @endauth

                            @auth
                                <div class="col-md-6 eco-custom-form-group mb-3">
                                    <label class="eco-custom-label">Phone Number</label>
                                    <input type="number" id="phone_number" name="phone_number"
                                        value="{{ auth()->user()->mobile_no }}" style=""
                                        class="form-control eco-custom-input" disabled>
                                    <span class="text-danger small error-text" id="error-phone_number"></span>
                                </div>
                            @endauth


                            <div class="col-md-12 eco-custom-form-group mb-3" style="position: relative;">
                                <label class="eco-custom-label">Country</label>

                                <input type="hidden" id="country_id" name="country" value="">
                                <input type="hidden" id="country_code_input" name="code" value="">

                                <div id="country_custom_select" class="form-control eco-custom-input"
                                    style="cursor: pointer; display: flex; align-items: center; justify-content: space-between; height: auto; min-height: 45px;"
                                    onclick="toggleCountryDropdown()">
                                    <span id="country_selected_text"
                                        style="display: flex; align-items: center; color: #6c757d;">
                                        Select Country
                                    </span>
                                    <span style="font-size: 12px; color: #6c757d;">▼</span>
                                </div>

                                <ul id="country_dropdown_list"
                                    style="display: none; position: absolute; top: 100%; left: 15px; width: calc(100% - 30px); max-height: 250px; overflow-y: auto; background: #fff; border: 1px solid #ced4da; border-radius: 4px; z-index: 1000; padding: 0; margin-top: 2px; list-style: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                                    @foreach ($countries as $country)
                                        @php
                                            $flagCode = strtolower($country->code);
                                        @endphp

                                        <li style="padding: 10px 15px; cursor: pointer; display: flex; align-items: center; border-bottom: 1px solid #eee;"
                                            onclick="selectCountryItem('{{ $country->id }}', '{{ $country->name }}', '{{ $flagCode }}', '{{ $country->latitude }}', '{{ $country->longitude }}')"
                                            onmouseover="this.style.backgroundColor='#f3f4f6'"
                                            onmouseout="this.style.backgroundColor='transparent'">

                                            <img src="https://flagcdn.com/w40/{{ $flagCode }}.png"
                                                alt="flag"
                                                style="width: 24px; margin-right: 10px; border-radius: 2px; box-shadow: 0 1px 2px rgba(0,0,0,0.1);">

                                            <span style="color: #333;">{{ $country->name }}</span>
                                        </li>
                                    @endforeach
                                </ul>

                                <span class="text-danger small error-text" id="error-country"></span>
                            </div>



                            <div class="col-md-12 eco-custom-form-group d-flex flex-column align-items-center mb-3">
                                <label class="eco-custom-label">Rate Your Experience</label>
                                <div class="eco-star-rating-container">
                                    <i class="fa-solid fa-star eco-star" data-rating="1"></i>
                                    <i class="fa-solid fa-star eco-star" data-rating="2"></i>
                                    <i class="fa-solid fa-star eco-star" data-rating="3"></i>
                                    <i class="fa-solid fa-star eco-star" data-rating="4"></i>
                                    <i class="fa-solid fa-star eco-star" data-rating="5"></i>
                                    <input type="hidden" name="user_rating" id="ecoRatingInput" value="0">
                                </div>
                                <span class="text-danger small error-text" id="error-user_rating"></span>
                            </div>

                            <div class="col-md-12 eco-custom-form-group mb-3">
                                <label class="eco-custom-label">Your Experience</label>
                                <textarea class="form-control eco-custom-input" id="experience" rows="4"
                                    placeholder="Tell us about your amazing experience..." name="experience" maxlength="400"></textarea>
                                <div class="text-muted small mt-1 text-end" id="char-count">0/400</div>
                                <span class="text-danger small error-text" id="error-experience"></span>
                            </div>
                        </div>

                        <div class="text-center mt-3">
                            <button type="submit" class="eco-custom-submit-btn btn btn-primary" id="submitBtn">
                                Submit Testimonial <i class="fa-solid fa-paper-plane ms-2"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            new Swiper(".nh-swiper", {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                autoHeight: true,

                navigation: {
                    nextEl: ".nh-nav-next",
                    prevEl: ".nh-nav-prev",
                },

                breakpoints: {
                    768: {
                        slidesPerView: 1,
                        spaceBetween: 30,
                    },
                    992: {
                        slidesPerView: 1,
                        spaceBetween: 40,
                    }
                }
            });
        });
    </script>


    <script>
        function toggleCountryDropdown() {
            const list = document.getElementById("country_dropdown_list");
            list.style.display = list.style.display === "none" ? "block" : "none";
        }


        function selectCountryItem(id, name, flagCode, lat, lng) {
            const input = document.getElementById("country_id");
            input.value = id;
            input.setAttribute('data-lat', lat);
            input.setAttribute('data-lng', lng);
            input.dispatchEvent(new Event('change'));

            document.getElementById("country_code_input").value = flagCode.toUpperCase();

            const btnText = document.getElementById("country_selected_text");
            btnText.innerHTML = `
            <img src="https://flagcdn.com/w40/${flagCode}.png" style="width: 24px; margin-right: 10px; border-radius: 2px; box-shadow: 0 1px 2px rgba(0,0,0,0.1);"> 
            <span style="color: #495057;">${name}</span>
        `;

            document.getElementById("country_dropdown_list").style.display = "none";
        }

        document.addEventListener('click', function(event) {
            const customSelect = document.getElementById("country_custom_select");
            const list = document.getElementById("country_dropdown_list");

            if (customSelect && list && !customSelect.contains(event.target) && !list.contains(event.target)) {
                list.style.display = "none";
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            // Country eka format karana function eka
            function formatCountry(country) {
                // "Select Country" option eka nam, ehemama pennanna
                if (!country.id) {
                    return country.text;
                }

                // Option eken data-flag attribute eka ganna
                var flagCode = $(country.element).data('flag');

                // Flag eka nathnam namawath pennanna
                if (!flagCode) {
                    return country.text;
                }

                // FlagCDN eken image eka load karala text eka ekka return karanna
                var $countryHtml = $(
                    '<span><img src="https://flagcdn.com/w20/' + flagCode +
                    '.png" style="width: 20px; margin-right: 8px; vertical-align: middle;"/> ' + country.text +
                    '</span>'
                );

                return $countryHtml;
            };

            // Select2 eka initialize karanna
            $('#country_id').select2({
                templateResult: formatCountry, // Dropdown list eke pennana widiha
                templateSelection: formatCountry, // Select karaata passe pennana widiha
                width: '100%' // Responsive wenna
            });
        });
    </script>

    <script>
        document.getElementById('experience').addEventListener('input', function() {
            var maxLength = this.getAttribute('maxlength');
            var currentLength = this.value.length;
            document.getElementById('char-count').innerText = currentLength + '/' + maxLength;
        });
        //require login
        function requireLogin() {
            Swal.fire({
                icon: 'warning',
                title: 'Login Required!',
                text: 'Login first to share your experience.',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Login Now',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Oyage login page eke link ekata meka wenas karanna
                    window.location.href = "{{ route('login') }}";
                }
            });
        }

        // --- Image Preview Logic ---
        document.getElementById('ecoProfileUpload').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const imgElement = document.getElementById('ecoPreviewImg');
                    imgElement.src = e.target.result;
                    imgElement.style.display = 'block';
                }
                reader.readAsDataURL(file);
            }
        });

        // --- Star Rating Logic ---
        const stars = document.querySelectorAll('.eco-star');
        const ratingInput = document.getElementById('ecoRatingInput');

        stars.forEach(star => {
            star.addEventListener('mouseover', function() {
                highlightEcoStars(this.getAttribute('data-rating'));
            });

            star.addEventListener('mouseout', function() {
                highlightEcoStars(ratingInput.value);
            });

            star.addEventListener('click', function() {
                ratingInput.value = this.getAttribute('data-rating');
                highlightEcoStars(this.getAttribute('data-rating'));
                document.getElementById('error-user_rating').innerText = ''; // Clear error if selected
            });
        });

        function highlightEcoStars(rating) {
            stars.forEach(star => {
                if (star.getAttribute('data-rating') <= rating) {
                    star.style.color = '#ffc107'; // Add active star color
                } else {
                    star.style.color = '#ccc'; // Add inactive star color
                }
            });
        }

        // --- Form Submit & AJAX Logic ---
        document.getElementById('ecoTestimonialForm').addEventListener('submit', function(e) {
            e.preventDefault();

            let submitBtn = document.getElementById('submitBtn');
            submitBtn.disabled = true;
            submitBtn.innerHTML = 'Submitting... <i class="fa-solid fa-spinner fa-spin ms-2"></i>';

            // Clear previous errors
            document.querySelectorAll('.error-text').forEach(el => el.innerText = '');

            let formData = new FormData(this);

            fetch('{{ route('testimonials.store') }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json'
                    },
                    body: formData
                })
                .then(async response => {
                    const data = await response.json();

                    if (!response.ok) {
                        // Laravel Validation Error Code eka 422
                        if (response.status === 422) {
                            let errors = data.errors;
                            for (const key in errors) {
                                if (errors.hasOwnProperty(key)) {
                                    document.getElementById(`error-${key}`).innerText = errors[key][0];
                                }
                            }
                        } else {
                            Swal.fire('Error!', 'Something went wrong on the server.', 'error');
                        }
                        throw new Error('Validation or Server Error');
                    }
                    return data;
                })
                .then(data => {
                    if (data.success) {

                        // 1. Modal eka wahaama close kirima (Bootstrap 5 Safer method)
                        let modalElement = document.getElementById('ecoTestimonialModal');
                        let modalInstance = bootstrap.Modal.getInstance(modalElement) || new bootstrap.Modal(
                            modalElement);
                        if (modalInstance) {
                            modalInstance.hide();
                        }

                        // 2. Form Reset kirima
                        document.getElementById('ecoTestimonialForm').reset();

                        // 3. Image & Stars Reset kirima
                        document.getElementById('ecoPreviewImg').style.display = 'none';
                        document.getElementById('ecoPreviewImg').src = '';
                        ratingInput.value = 0;
                        highlightEcoStars(0);

                        // 4. SweetAlert Success Message (Modal eka close unata passe display we)
                        Swal.fire({
                            icon: 'success',
                            title: 'Thank You!',
                            text: 'Your testimonial has been added successfully.',
                            confirmButtonColor: '#3085d6'
                        });
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                })
                .finally(() => {
                    // Button eka ayeth parana thathwayata genima
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = 'Submit Testimonial <i class="fa-solid fa-paper-plane ms-2"></i>';
                });
        });
    </script>

    <script>
        let bookingForms = document.querySelectorAll('.th-form');
        bookingForms.forEach(bookingForm => {

            // let bookingForm = document.getElementById('custom-tour-booking-form');
            bookingForm.addEventListener('submit', function(e) {
                e.preventDefault();
                let modal = document.getElementById('successModal');
                let submitBtn = bookingForm.querySelector('#submit-btn');
                let successMessageElem = modal.querySelector('#success-message');
                let formData = new FormData(this);

                submitBtn.disabled = true;
                submitBtn.innerHTML = 'Please wait...';

                fetch("{{ route('tour-booking.submit') }}", {
                        method: "POST",
                        headers: {
                            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                        },
                        body: formData
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.success) {

                            submitBtn.disabled = false;
                            submitBtn.innerHTML = `<i class="fab fa-whatsapp me-2"></i> Get Quotation`;
                            successMessageElem.textContent = data.message;
                            let bootstrapModal = new bootstrap.Modal(modal);
                            bootstrapModal.show();

                            var whatsappLink = data.whatsapp_link;
                            var a = document.createElement('a');
                            if (whatsappLink) {
                                a.href = whatsappLink;
                                a.target = '_blank';
                                setTimeout(function() {
                                    bootstrapModal.hide();
                                    bookingForm.reset();
                                    a.click();
                                }, 2500);
                            }
                        }
                    })
                    .catch(err => console.error(err));
            });

        });
        $(document).ready(function() {
            // Save karapu value eka ganna
            const savedFilter = localStorage.getItem('activeTab');

            if (savedFilter) {
                // 1. Serama buttons walin 'active' class eka ain karanna
                $('.glass-filter-btn').removeClass('active');

                // 2. Save karapu button ekata 'active' class eka add karanna
                const targetBtn = $(`.glass-filter-btn[data-filter="${savedFilter}"]`);
                targetBtn.addClass('active');

                // 3. Filter logic eka run karanna (oya usage eka anuwa meka wenas wewi)
                // eg: targetBtn.trigger('click'); 
                // nathnam oyaaga filter function eka call karanna: filterItems(savedFilter);
            }
        });
    </script>

    <!--========== Footer Area ==========-->
    @include('partials.footer')

    <!--========== All Js File =========== -->
    @include('partials.scripts')


</body>

</html>
