<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('partials.head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
                        <div class="th-hero-bg" data-bg-src="assets/img/hero/hero_bg_1_2.jpg">
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
                        <div class="th-hero-bg" data-bg-src="assets/img/hero/hero_bg_1_1.jpg">
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
                        <div class="th-hero-bg" data-bg-src="assets/img/hero/hero_bg_1_3.jpg">
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
            {{-- <div class="th-swiper-custom">
                <button data-slider-prev="#heroSlide1" class="slider-arrow slider-prev"><img src="assets/img/icon/right-arrow.svg" alt=""></button>
                <div class="slider-pagination"></div>
                <button data-slider-next="#heroSlide1" class="slider-arrow slider-next"><img src="assets/img/icon/left-arrow.svg" alt=""></button>
            </div> --}}

        </div>
    </div>

    <style>
        /* Scoped Styles */
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
                height: 420px;
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
                <p class="text-white mx-auto " style="text-align: justify;text-indent: 250px;">
                    Because nowhere else on Earth can you experience so much magic, diversity, and adventure packed into
                    one breathtaking island.
                    Start your journey on our sun-drenched,
                    palm-fringed shores-whether you are chasing the perfect surf break in the lively waters of Arugam
                    Bay, swimming with sea turtles in Unawatuna, or watching majestic blue whales glide off the coast of
                    Mirissa.
                    Venture inland, and within just a few hours, the tropical heat gives way to the cool, misty tea
                    hills of the central highlands. Take the world-famous, incredibly scenic train ride to Ella, hike
                    through the emerald valleys of Horton Plains, and wake up to the rolling, romantic landscapes of
                    Nuwara Eliya. Every turn reveals a new natural wonder.
                    For history and culture lovers, stepping into Sri Lanka is like stepping back in time. Conquer the
                    monumental rock fortress of Sigiriya (the 8th wonder of the world), cycle through the sacred,
                    2,500-year-old ruins of Anuradhapura and Polonnaruwa, and discover the spiritual heart of the island
                    in Kandy. Feel the pulse of our vibrant culture alive with rhythmic traditional drums, colorful
                    festivals, and the irresistible flavors of rich, spicy local cuisine.
                    Wrapped in ancient legends and enriched by the warmest, most welcoming smiles that make you feel
                    instantly at home, this island is a treasure trove of experiences. Sri Lanka is more than just a
                    holiday getaway-it’s an unforgettable adventure you simply must feel for yourself.
                </p>
            </div>

            <div class="swiper story-swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide story-slide"
                        style="background-image: url('{{ asset('assets/img/bg/AdobeStock_633483820.jpeg') }}');">
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
                            <p>The majestic Lion Rock, an ancient palace and fortress standing tall above the jungle,
                                boasting incredible ancient engineering.</p>
                        </div>
                    </div>

                    <div class="swiper-slide story-slide"
                        style="background-image: url('{{ asset('assets/img/explore/kandy.jpg') }}');">
                        <div class="story-overlay">
                            <span class="story-tag"><i class="fa-light fa-gavel me-1"></i> Craftsmanship</span>
                            <h3>Ancient Artistry</h3>
                            <p>Discover centuries-old intricate wood carvings at Embekke and the living traditions of
                                the sacred city of Kandy.</p>
                        </div>
                    </div>

                    <div class="swiper-slide story-slide"
                        style="background-image: url('{{ asset('assets/img/explore/Unawatuna-beaches-Sri-Lanka-8-scaled.jpg') }}');">
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
                            <p>Experience thrilling safaris in Yala and Wilpattu, home to majestic elephants, elusive
                                leopards, and exotic birds.</p>
                        </div>
                    </div>

                    <div class="swiper-slide story-slide"
                        style="background-image: url('{{ asset('assets/img/bg/AdobeStock_633483820.jpeg') }}');">
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
                            <p>The majestic Lion Rock, an ancient palace and fortress standing tall above the jungle,
                                boasting incredible ancient engineering.</p>
                        </div>
                    </div>

                    <div class="swiper-slide story-slide"
                        style="background-image: url('{{ asset('assets/img/explore/kandy.jpg') }}');">
                        <div class="story-overlay">
                            <span class="story-tag"><i class="fa-light fa-gavel me-1"></i> Craftsmanship</span>
                            <h3>Ancient Artistry</h3>
                            <p>Discover centuries-old intricate wood carvings at Embekke and the living traditions of
                                the sacred city of Kandy.</p>
                        </div>
                    </div>

                    <div class="swiper-slide story-slide"
                        style="background-image: url('{{ asset('assets/img/explore/Unawatuna-beaches-Sri-Lanka-8-scaled.jpg') }}');">
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
                            <p>Experience thrilling safaris in Yala and Wilpattu, home to majestic elephants, elusive
                                leopards, and exotic birds.</p>
                        </div>
                    </div>
                </div>




                {{-- <div class="swiper-pagination story-swiper-pagination"></div> --}}
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

        .about-section {
            padding: 80px 10%;
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

        .about-content span {
            color: var(--accent-color);
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 2px;
            font-size: 14px;
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
        }

        /* Features Grid */
        .features-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
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

        /* Box ekama hover weddi H4 eke paata wenas kirima */
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
            /* color: var(--primary-color); */
            color: var(--bg-light);
            font-size: 18px;
        }

        .feature-item p {
            font-size: 13px;
            margin: 0;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .about-section {
                padding: 40px 5%;
            }

            .about-image,
            .about-content {
                min-width: 100%;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <section class="about-section">
        <div class="about-image">
            <img src="{{ asset('assets/img/bg/AdobeStock_633483820.jpeg') }}" alt="Sri Lanka Tea Plantation">
        </div>

        <div class="about-content">
            <span class="sub-title text-center"
                style="font-size: 3rem ; color: #113D48 ; margin-bottom: 1.5rem; font-weight: 400;">Why Us <span
                    style="font-size: 4rem; font-weight: 400; margin-bottom: 1.5rem;">?</span></span>
            <h2 class="text-center">Discover Sri Lanka’s Wonders With Your Ultimate Travel Partner</h2>
            {{-- <p>
                At Novara Holidays, we believe that travel is more than just visiting places-it's about creating stories
                that last a lifetime. With over a decade of experience, we specialize in crafting personalized journeys
                across the pearl of the Indian Ocean.
            </p> --}}
            <p class="" style="text-align: justify; text-indent: 200px;">Selecting the right travel partner
                makes all the difference between a simple trip and a lifetime of
                memories. At Novara Holidays, we don’t just provide a vehicle; we provide a complete, worry-free travel
                experience tailored just for you.

                Unmatched Expertise & Protection:
                With years of experience in the industry, we understand the pulse of every traveler. Your safety is our
                top priority, which is why we offer personal coverage and end-to-end protection throughout your entire
                journey. From the moment you land until the moment you leave, you are under our care.

                The Gold Standard of Service:
                Expert Drivers: Our team consists of highly skilled, professional drivers who aren't just experts on the
                road, but also friendly guides who know the hidden gems of every destination.

                Luxury Fleet: Travel in style and comfort with our wide range of luxury vehicles, maintained to the
                highest standards for a smooth and premium ride.

                Responsible & Reliable: We take full responsibility for your tour, ensuring every detail is handled with
                precision so you can relax and enjoy.

                Experience the best. Choose Novara Holidays for a journey as extraordinary as you are.</p>

            {{-- <div class="features-grid">
                <div class="feature-item">
                    <i class="fa-light fa-suitcase-rolling"></i>
                    <div>
                        <h4>Customized Tours</h4>
                        <p>Tailor-made itineraries that match your rhythm and interests.</p>
                    </div>
                </div>

                <div class="feature-item">
                    <i class="fa-light fa-map-location-dot"></i>
                    <div>
                        <h4>Local Expertise</h4>
                        <p>Certified guides who know every hidden gem in Sri Lanka.</p>
                    </div>
                </div>

                <div class="feature-item">
                    <i class="fa-light fa-shield-check"></i>
                    <div>
                        <h4>Safe & Secure</h4>
                        <p>Your safety is our priority with 24/7 on-ground support.</p>
                    </div>
                </div>

                <div class="feature-item">
                    <i class="fa-light fa-hand-holding-heart"></i>
                    <div>
                        <h4>Authentic Experience</h4>
                        <p>Go beyond tourism and connect with the local soul.</p>
                    </div>
                </div>
            </div> --}}
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

    <section class="overflow-hidden space" style="background-color: #0c1524;">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title" style="color: #ffffff">Tropical Paradise Awaits</span>
                <h2 class="sec-title" style="color: #ffffff">Explore Sri Lanka</h2>
            </div>

            <div class="explore-filter-bar mb-5 text-center">
                {{-- <button class="glass-filter-btn active" data-filter="all"><i class="fas fa-th-large"></i> All</button> --}}
                <button class="glass-filter-btn active" data-filter="city"><i class="fas fa-city"></i>
                    Cities</button>
                <button class="glass-filter-btn" data-filter="religion"><i class="fas fa-om"></i> Religious
                    Places</button>
                <button class="glass-filter-btn" data-filter="beach"><i class="fas fa-umbrella-beach"></i>
                    Beaches</button>
                <button class="glass-filter-btn" data-filter="forest"><i class="fas fa-tree"></i> Forests</button>
                <button class="glass-filter-btn" data-filter="mountains"><i class="fa-duotone fa-mountains"></i>
                    Mountains</button>
                <button class="glass-filter-btn" data-filter="ayuruwedic"><i class="fa-duotone fa-leaf"></i>
                    Ayuruwedic</button>
            </div>

            <div class="row" id="explore-grid">

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item"
                    data-category="mountains religion ">
                    <div class="explore-custom-card">
                        <img class="bg-image" src="{{ asset('assets/img/explore/sigiriya.jpg') }}"
                            alt="Sigiriya Rock Fortress">
                        <div class="destination-content">
                            <h3 class="title">
                                <a href="{{ route('documentry', ['doc_id' => '01']) }}">Sigiriya Rock Fortress</a>
                            </h3>
                            <p class="destination-details">
                                Sigiriya Rock Fortress is an ancient palace and UNESCO World Heritage Site, famous for
                                its frescoes and breathtaking summit views.
                            </p>
                            <a href="{{ route('documentry', ['doc_id' => '01']) }}" class="glass-btn">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item" data-category="city beach">
                    <div class="explore-custom-card">
                        <img class="bg-image" src="{{ asset('assets/img/explore/galle_fort.jpg') }}"
                            alt="Galle Fort">
                        <div class="destination-content">
                            <h3 class="title">
                                <a href="{{ route('documentry', ['doc_id' => '02']) }}">Galle Fort</a>
                            </h3>
                            <p class="destination-details">
                                A beautifully preserved Dutch-era fortress with cobbled streets, ramparts, cafes, and
                                boutique shops.
                            </p>
                            <a href="{{ route('documentry', ['doc_id' => '02']) }}" class="glass-btn">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item"
                    data-category="city religion mountains">
                    <div class="explore-custom-card">
                        <img class="bg-image" src="{{ asset('assets/img/explore/kandy.jpg') }}" alt="Kandy">
                        <div class="destination-content">
                            <h3 class="title">
                                <a href="{{ route('documentry', ['doc_id' => '03']) }}">Kandy – The Sacred Heart</a>
                            </h3>
                            <p class="destination-details">
                                Home to the Temple of the Tooth Relic, Kandy blends cool-climate hills, culture, and
                                tradition.
                            </p>
                            <a href="{{ route('documentry', ['doc_id' => '03']) }}" class="glass-btn">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item" data-category="beach">
                    <div class="explore-custom-card">
                        <img class="bg-image"
                            src="{{ asset('assets/img/explore/Unawatuna-beaches-Sri-Lanka-8-scaled.jpg') }}"
                            alt="Unawatuna Beach">
                        <div class="destination-content">
                            <h3 class="title">
                                <a href="{{ route('documentry', ['doc_id' => '04']) }}">Unawatuna Beach</a>
                            </h3>
                            <p class="destination-details">
                                Nestled on the Southern coast, Unawatuna is a picturesque beach famous for its calm
                                turquoise waters, vibrant nightlife, and coral reefs.
                            </p>
                            <a href="{{ route('documentry', ['doc_id' => '04']) }}" class="glass-btn">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item" data-category="mountains city ">
                    <div class="explore-custom-card">
                        <img class="bg-image" src="{{ asset('assets/img/explore/Ella – Hill Country Escape.jpg') }}"
                            alt="Ella">
                        <div class="destination-content">
                            <h3 class="title">
                                <a href="{{ route('documentry', ['doc_id' => '05']) }}">Ella – Hill Country Escape</a>
                            </h3>
                            <p class="destination-details">
                                Surrounded by misty mountains, Ella is famous for tea plantations, waterfalls, hiking
                                trails, and breathtaking views.
                            </p>
                            <a href="{{ route('documentry', ['doc_id' => '05']) }}" class="glass-btn">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item" data-category="beach">
                    <div class="explore-custom-card">
                        <img class="bg-image"
                            src="{{ asset('assets/img/explore/pexels-diego-pontes-901015-7000344.jpg') }}"
                            alt="Trincomalee">
                        <div class="destination-content">
                            <h3 class="title">
                                <a href="{{ route('documentry', ['doc_id' => '06']) }}">Trincomalee</a>
                            </h3>
                            <p class="destination-details">
                                Famous for its stunning natural deep-water harbor, Trincomalee boasts pristine
                                white-sand beaches, historic colonial forts, and whale watching.
                            </p>
                            <a href="{{ route('documentry', ['doc_id' => '06']) }}" class="glass-btn">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item" data-category="beach">
                    <div class="explore-custom-card">
                        <img class="bg-image" src="{{ asset('assets/img/explore/mirissa beach.jpg') }}"
                            alt="Mirissa Beach">
                        <div class="destination-content">
                            <h3 class="title">
                                <a href="{{ route('documentry', ['doc_id' => '07']) }}">Mirissa Beach</a>
                            </h3>
                            <p class="destination-details">
                                A tropical beach paradise known for whale watching, golden sands, and stunning sunsets.
                            </p>
                            <a href="{{ route('documentry', ['doc_id' => '07']) }}" class="glass-btn">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item" data-category="city mountains">
                    <div class="explore-custom-card">
                        <img class="bg-image"
                            src="{{ asset('assets/img/explore/nuwara eliya – little england.jpg') }}"
                            alt="Nuwara Eliya">
                        <div class="destination-content">
                            <h3 class="title">
                                <a href="{{ route('documentry', ['doc_id' => '08']) }}">Nuwara Eliya – Little
                                    England</a>
                            </h3>
                            <p class="destination-details">
                                Known for its cool climate and colonial charm, Nuwara Eliya is surrounded by lush tea
                                estates.
                            </p>
                            <a href="{{ route('documentry', ['doc_id' => '08']) }}" class="glass-btn">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item" data-category="city ayuruwedic">
                    <div class="explore-custom-card">
                        <img class="bg-image" src="{{ asset('assets/img/explore/colombo-2.jpg') }}" alt="Colombo">
                        <div class="destination-content">
                            <h3 class="title">
                                <a href="{{ route('documentry', ['doc_id' => '09']) }}">Colombo</a>
                            </h3>
                            <p class="destination-details">
                                The heart of Sri Lanka, Colombo is a bustling city with a rich history.
                            </p>
                            <a href="{{ route('documentry', ['doc_id' => '09']) }}" class="glass-btn">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item" data-category="forest">
                    <div class="explore-custom-card">
                        <img class="bg-image" src="{{ asset('assets/img/explore/31.jpg') }}" alt="Sinharaja">
                        <div class="destination-content">
                            <h3 class="title">
                                <a href="{{ route('documentry', ['doc_id' => '10']) }}">Sinharaja</a>
                            </h3>
                            <p class="destination-details">
                                A UNESCO World Heritage Site and global biodiversity hotspot, Sinharaja Forest Reserve
                                is the country's last major untouched tropical rainforest.
                            </p>
                            <a href="{{ route('documentry', ['doc_id' => '10']) }}" class="glass-btn">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item" data-category="religion city">
                    <div class="explore-custom-card">
                        <img class="bg-image"
                            src="{{ asset('assets/img/explore/ishan-kahapola-arachchi-fQe-2x2YflU-unsplash.jpg') }}"
                            alt="Anuradhapura">
                        <div class="destination-content">
                            <h3 class="title">
                                <a href="{{ route('documentry', ['doc_id' => '11']) }}">Anuradhapura – Ancient
                                    City</a>
                            </h3>
                            <p class="destination-details">
                                A UNESCO World Heritage Site, Anuradhapura is an ancient city with well-preserved ruins
                                of palaces, temples, and statues.
                            </p>
                            <a href="{{ route('documentry', ['doc_id' => '11']) }}" class="glass-btn">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item"
                    data-category="religion city ayuruwedic forest">
                    <div class="explore-custom-card">
                        <img class="bg-image"
                            src="{{ asset('assets/img/explore/chathuraanuradha-buddha-7490716_1280.jpg') }}"
                            alt="Polonnaruwa">
                        <div class="destination-content">
                            <h3 class="title">
                                <a href="{{ route('documentry', ['doc_id' => '12']) }}">Polonnaruwa</a>
                            </h3>
                            <p class="destination-details">
                                A UNESCO World Heritage Site, Polonnaruwa is an ancient city with well-preserved ruins
                                of palaces, temples, and statues.
                            </p>
                            <a href="{{ route('documentry', ['doc_id' => '12']) }}" class="glass-btn">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item" data-category="city beach forest">
                    <div class="explore-custom-card">
                        <img class="bg-image"
                            src="{{ asset('assets/img/explore/712dc953abbe7abbd93ccedd3c626f16.jpg') }}"
                            alt="Jaffna">
                        <div class="destination-content">
                            <h3 class="title">
                                <a href="{{ route('documentry', ['doc_id' => '13']) }}">Jaffna</a>
                            </h3>
                            <p class="destination-details">
                                Jaffna is a city in the Northern Province of Sri Lanka, known for its rich cultural
                                heritage and historical significance.
                            </p>
                            <a href="{{ route('documentry', ['doc_id' => '13']) }}" class="glass-btn">View More</a>
                        </div>
                    </div>
                </div>



                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item"
                    data-category="mountains ayuruwedic">
                    <div class="explore-custom-card">
                        <img class="bg-image"
                            src="{{ asset('assets/img/explore/pexels-al-moatasem-alaa-el-din-445873-1139429.jpg') }}"
                            alt="Pidurangala Rock">
                        <div class="destination-content">
                            <h3 class="title">
                                <a href="{{ route('documentry', ['doc_id' => '14']) }}">Pidurangala Rock</a>
                            </h3>
                            <p class="destination-details">
                                Pidurangala Rock is a prominent limestone outcrop located near the town of Kandy,
                                offering breathtaking views of the surrounding landscape.
                            </p>
                            <a href="{{ route('documentry', ['doc_id' => '14']) }}" class="glass-btn">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item"
                    data-category="religion forest mountains ayuruwedic">
                    <div class="explore-custom-card">
                        <img class="bg-image"
                            src="{{ asset('assets/img/explore/pexels-dimath-dayananda-245054507-17092145.jpg') }}"
                            alt="Mihintale">
                        <div class="destination-content">
                            <h3 class="title">
                                <a href="{{ route('documentry', ['doc_id' => '15']) }}">Mihintale</a>
                            </h3>
                            <p class="destination-details">
                                Mihintale is an ancient Buddhist site located in the Anuradhapura District, known for
                                its historical significance and beautiful surroundings.
                            </p>
                            <a href="{{ route('documentry', ['doc_id' => '15']) }}" class="glass-btn">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item"
                    data-category="religion forest ayuruwedic">
                    <div class="explore-custom-card">
                        <img class="bg-image" src="{{ asset('assets/img/explore/pexels-kawshika-11013741.jpg') }}"
                            alt="Katharagama">
                        <div class="destination-content">
                            <h3 class="title">
                                <a href="{{ route('documentry', ['doc_id' => '16']) }}">Katharagama</a>
                            </h3>
                            <p class="destination-details">
                                A deeply venerated pilgrimage town, Katharagama unites multiple faiths who gather to
                                seek blessings at the sacred Katharagama Devalaya.
                            </p>
                            <a href="{{ route('documentry', ['doc_id' => '16']) }}" class="glass-btn">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item"
                    data-category="religion ayuruwedic">
                    <div class="explore-custom-card">
                        <img class="bg-image"
                            src="{{ asset('assets/img/explore/free-photo-of-dambulla-cave-temple-complex-in-sri-lanka.jpeg') }}"
                            alt="Dambulla">
                        <div class="destination-content">
                            <h3 class="title">
                                <a href="{{ route('documentry', ['doc_id' => '17']) }}">Dambulla</a>
                            </h3>
                            <p class="destination-details">
                                A UNESCO World Heritage Site, Dambulla is renowned for the magnificent Golden Temple and
                                the largest, best-preserved ancient cave temple complex.
                            </p>
                            <a href="{{ route('documentry', ['doc_id' => '17']) }}" class="glass-btn">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item"
                    data-category="mountains religion">
                    <div class="explore-custom-card">
                        <img class="bg-image" src="{{ asset('assets/img/explore/1774253054527.jpeg') }}"
                            alt="Sri Paada">
                        <div class="destination-content">
                            <h3 class="title">
                                <a href="{{ route('documentry', ['doc_id' => '18']) }}">Sri Paada (Adam's Peak)</a>
                            </h3>
                            <p class="destination-details">
                                A majestic, conical mountain renowned for the sacred footprint at its peak, an ancient
                                pilgrimage site that rewards climbers with a sunrise.
                            </p>
                            <a href="{{ route('documentry', ['doc_id' => '18']) }}" class="glass-btn">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item" data-category="beach">
                    <div class="explore-custom-card">
                        <img class="bg-image"
                            src="{{ asset('assets/img/explore/pexels-genine-alyssa-pedreno-andrada-1263127-2932486.jpg') }}"
                            alt="Weligama">
                        <div class="destination-content">
                            <h3 class="title">
                                <a href="{{ route('documentry', ['doc_id' => '19']) }}">Weligama</a>
                            </h3>
                            <p class="destination-details">
                                Weligama is a coastal town in the Southern Province of Sri Lanka, known for its
                                beautiful beaches and relaxed atmosphere.
                            </p>
                            <a href="{{ route('documentry', ['doc_id' => '19']) }}" class="glass-btn">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item" data-category="beach">
                    <div class="explore-custom-card">
                        <img class="bg-image"
                            src="{{ asset('assets/img/explore/360_F_217638969_rfRP2xj50HvZweJiRct8SWjXmG6OfydM.jpg') }}"
                            alt="Arugam Bay">
                        <div class="destination-content">
                            <h3 class="title">
                                <a href="{{ route('documentry', ['doc_id' => '20']) }}">Arugam Bay</a>
                            </h3>
                            <p class="destination-details">
                                Arugam Bay is a popular destination for surfers and nature lovers, known for its
                                pristine beaches and vibrant marine life.
                            </p>
                            <a href="{{ route('documentry', ['doc_id' => '20']) }}" class="glass-btn">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item" data-category="beach">
                    <div class="explore-custom-card">
                        <img class="bg-image"
                            src="{{ asset('assets/img/explore/10302182-Tourists-at-Hikkaduwa-beach-with-palm-trees-Sri-Lanka.jpg') }}"
                            alt="Hikkaduwa Beach">
                        <div class="destination-content">
                            <h3 class="title">
                                <a href="{{ route('documentry', ['doc_id' => '21']) }}">Hikkaduwa Beach</a>
                            </h3>
                            <p class="destination-details">
                                A lively coastal hub, Hikkaduwa is celebrated for its dynamic surf scene, colorful
                                marine sanctuary, and highly energetic beachside nightlife.
                            </p>
                            <a href="{{ route('documentry', ['doc_id' => '21']) }}" class="glass-btn">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item" data-category="forest ayuruwedic">
                    <div class="explore-custom-card">
                        <img class="bg-image" src="{{ asset('assets/img/explore/Yala National Park.jpg') }}"
                            alt="Yala National Park">
                        <div class="destination-content">
                            <h3 class="title">
                                <a href="{{ route('documentry', ['doc_id' => '22']) }}">Yala National Park</a>
                            </h3>
                            <p class="destination-details">
                                One of the best places in the world to spot leopards, Yala offers thrilling safaris and
                                rich wildlife.
                            </p>
                            <a href="{{ route('documentry', ['doc_id' => '22']) }}" class="glass-btn">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item" data-category="forest">
                    <div class="explore-custom-card">
                        <img class="bg-image" src="{{ asset('assets/img/explore/wilpattu.jpg') }}"
                            alt="Wilpattu National Park">
                        <div class="destination-content">
                            <h3 class="title">
                                <a href="{{ route('documentry', ['doc_id' => '23']) }}">Wilpattu National Park</a>
                            </h3>
                            <p class="destination-details">
                                Sri Lanka’s largest national park, famous for natural lakes, leopards, and untouched
                                wilderness.
                            </p>
                            <a href="{{ route('documentry', ['doc_id' => '23']) }}" class="glass-btn">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4 explore-item"
                    data-category="forest mountains ayuruwedic ">
                    <div class="explore-custom-card">
                        <img class="bg-image" src="{{ asset('assets/img/explore/horton-plains.jpg') }}"
                            alt="Horton Plains">
                        <div class="destination-content">
                            <h3 class="title">
                                <a href="{{ route('documentry', ['doc_id' => '24']) }}">Horton Plains National
                                    Park</a>
                            </h3>
                            <p class="destination-details">
                                A UNESCO World Heritage Site, Horton Plains is home to the largest wildlife reserve in
                                Sri Lanka.
                            </p>
                            <a href="{{ route('documentry', ['doc_id' => '24']) }}" class="glass-btn">View More</a>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const filterBtns = document.querySelectorAll('.glass-filter-btn');
            const items = document.querySelectorAll('.explore-item');

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

    {{-- <section class="testimonial-area2 overflow-hidden space" id="testi-sec">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Testimonial</span>
                <h2 class="sec-title">What Client Say About us</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="testi-review" data-bg-src="assets/img/bg/map.png"
                        style="position: relative; min-height: 500px;">

                        @foreach ($testimonials as $index => $testi)
                            <div class="testi-box hover-item {{ $index == 0 ? 'item-active' : '' }}"
                                style="position: absolute; top: {{ $testi->top_pos }}%; left: {{ $testi->left_pos }}%;">

                                <div class="testi-box_content feature-card-active-wrap">
                                    <p class="testi-box_text">“{{ $testi->experience }}”</p>

                                    <div class="testi-box_review">
                                        @for ($i = 0; $i < $testi->rating; $i++)
                                            <i class="fa-solid fa-star"></i>
                                        @endfor

                                        @for ($i = $testi->rating; $i < 5; $i++)
                                            <i class="fa-regular fa-star"></i>
                                        @endfor
                                    </div>
                                </div>

                                <div class="testi-box_profile">
                                    <div class="testi-box_avater">
                                        <span></span>
                                        @if ($testi->profile_picture)
                                            <img src="{{ asset('storage/' . $testi->profile_picture) }}"
                                                alt="{{ $testi->full_name }}">
                                        @else
                                            <img src="{{ asset('assets/img/testimonial/default_avatar.png') }}"
                                                alt="{{ $testi->full_name }}">
                                        @endif
                                    </div>
                                    <div class="media-body">
                                        <h3 class="box-title">{{ $testi->full_name }}</h3>
                                        <span class="testi-box_desig">{{ $testi->country }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

            <div class="shape-mockup movingX d-none d-xl-block" data-top="30%" data-left="-9%">
                <img class="gmovingX" src="assets/img/shape/shape_7.png" alt="shape">
            </div>
            <div class="shape-mockup spin d-none d-xl-block" data-bottom="30%" data-right="-10%">
                <img src="assets/img/shape/shape_2_5.png" alt="shape">
            </div>
            <div class="shape-mockup jump d-none d-xl-block" data-bottom="0%" data-left="-5%">
                <img src="assets/img/shape/shape_2_2.png" alt="shape">
            </div>
        </div>


        <div class="shape-mockup movingX d-none d-xl-block" data-top="30%" data-left="-9%">
            <img class="gmovingX" src="assets/img/shape/shape_7.png" alt="shape">
        </div>

    </section> --}}

    <style>
        /* Section Background & Overlay */
        .nh-testimonial-section {
            position: relative;
            padding: 100px 0;
            background-image: url('{{ asset('assets/img/2149153258.jpg') }}');
            /* මෙතනට ඔයාගේ background image path එක දෙන්න */
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
            border-radius: 100px;
            /* Pill shape */
            display: flex;
            align-items: center;
            padding: 15px 30px 15px 15px;
            gap: 25px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            height: 100%;
            min-height: auto;
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
            height: 110px;
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

        /* Responsive tweaks */
        @media (max-width: 768px) {
            .nh-card {
                flex-direction: column;
                border-radius: 30px;
                text-align: center;
                padding: 30px 20px;
            }

            .nh-header {
                flex-direction: column;
                align-items: center;
                gap: 15px;
            }

            .nh-quote {
                display: none;
            }
        }
    </style>

    <section class="nh-testimonial-section">
        <div class="container">
            <div class="nh-title-wrap nh-text-center">
                <div class="nh-badge">
                    <i class="fa-solid fa-plane"></i> TESTIMONIALS
                </div>
                <h2 class="nh-main-title">What Our Customers Are Saying<br>About Us?</h2>
            </div>

            <div class="swiper nh-swiper nh-relative-wrap">
                <div class="swiper-wrapper">

                    @foreach ($testimonials as $testi)
                        @php
                            $linkedUser = \App\Models\User::where('name', $testi->full_name)->first();
                        @endphp
                        <div class="swiper-slide">
                            <div class="nh-card">
                                <div class="nh-avatar-wrap">
                                    <div class="nh-curve-border"></div>
                                    {{-- @if ($testi->profile_picture)
                                        <img src="{{ asset('storage/' . $testi->profile_picture) }}"
                                            alt="{{ $testi->full_name }}" class="nh-img">
                                    @else
                                        <img src="{{ auth()->user()?->profile_photo ? asset('storage/' . auth()->user()->profile_photo) : asset('assets/img/testimonial/default_avatar.png') }}"
                                            alt="{{ $testi->full_name }}" class="nh-img">
                                    @endif --}}
                                    @if ($testi->profile_picture)
                                        <img src="{{ asset('storage/' . $testi->profile_picture) }}"
                                            alt="{{ $testi->full_name }}" class="nh-img">
                                    @elseif ($linkedUser && $linkedUser->profile_photo)
                                        <img src="{{ asset('storage/' . $linkedUser->profile_photo) }}"
                                            alt="{{ $testi->full_name }}" class="nh-img">
                                    @else
                                        <img src="{{ asset('assets/img/testimonial/default_avatar.png') }}"
                                            alt="{{ $testi->full_name }}" class="nh-img">
                                    @endif
                                </div>

                                <div class="nh-content">
                                    <div class="nh-header">
                                        <div class="nh-user-info">
                                            <h3 class="nh-name">{{ $testi->full_name }}</h3>
                                            <span class="nh-desig">{{ $testi->country }}</span>
                                        </div>
                                        <div class="nh-quote">
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
                                        </div>
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
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var swiper = new Swiper(".nh-swiper", {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: ".nh-nav-next",
                    prevEl: ".nh-nav-prev",
                },
                breakpoints: {
                    992: {
                        slidesPerView: 2,
                        spaceBetween: 40,
                    }
                }
            });
        });
    </script>

    <div class="row mt-4 mt-md-5">
        <div class="col-12 text-center " style="height: 5rem">
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
                            {{-- <label for="ecoProfileUpload" class="eco-img-preview" id="ecoImgContainer">
                                <i class="fa-solid fa-camera"></i>
                                <img id="ecoPreviewImg" src="" alt="Profile Preview"
                                    style="display: none; max-width: 200px; border-radius: 50%;">
                            </label>
                            <p class="eco-upload-text">Upload Profile Picture</p>
                            <span class="text-danger small error-text" id="error-profile_picture"></span> --}}
                            <input type="file" id="ecoProfileUpload" name="profile_picture" class="d-none"
                                value="{{ old('profile_photo') }}" accept="image/*">
                            {{-- @if (auth()->user()?->profile_photo)
                                <img src="{{ auth()->user()->profile_photo ? asset('storage/' . auth()->user()->profile_photo) : 'https://ui-avatars.com/api/?name=' . urlencode(auth()->user()->name) . '&background=random' }}"
                                    alt="Profile Picture" class="rounded-circle"
                                    style="width: 150px; height: 150px; object-fit: cover;">
                            @else
                                <img src="{{ 'https://ui-avatars.com/api/?name=' . urlencode(auth()->user()->name) . '&background=random' }}" alt="Default Profile Picture"
                                    class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                            @endif --}}
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
                            {{-- @auth
                                <input type="hidden" name="full_name" value="{{ auth()->user()->name }}">
                                <input type="hidden" name="phone_number"
                                    value="{{ auth()->user()->phone_number ?? '' }}">
                            @endauth --}}

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

                            {{-- <div class="col-md-12 eco-custom-form-group mb-3">
                                <label class="eco-custom-label">Country</label>
                                <input type="text" id="country" name="country"
                                    class="form-control eco-custom-input" placeholder="e.g. Sri Lanka">
                                <span class="text-danger small error-text" id="error-country"></span>
                            </div> --}}

                            <div class="col-md-12 eco-custom-form-group mb-3">
                                <label class="eco-custom-label">Country</label>

                                <select id="country_id" name="country" class="form-control eco-custom-input">
                                    <option value="">Select Country</option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}" data-lat="{{ $country->latitude }}"
                                            data-lng="{{ $country->longitude }}"
                                            data-flag="{{ $country->flag_url }}"> {{ $country->name }}
                                        </option>
                                    @endforeach
                                </select>

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
    </script>

    <!--========== Footer Area ==========-->
    @include('partials.footer')

    <!--========== All Js File =========== -->
    @include('partials.scripts')


</body>

</html>
