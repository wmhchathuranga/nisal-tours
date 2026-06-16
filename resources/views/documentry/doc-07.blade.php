<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('partials.head')
</head>

<body>

    @include('partials.loader')

    @php
        $page = 'documentary';
    @endphp

    @include('partials.menu')

    <!--==============================
Breadcumb
==============================-->
    <div style="background-position: center;" class="breadcumb-wrapper"
        data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Mirissa Beach</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Mirissa Beach</li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
Documentary Details Area
==============================-->
    <section class="space">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-xl-10">
                    <div class="tour-page-single">

                        <!-- Documentary Slider -->
                        <div class="slider-area tour-slider1 mb-40">
                            <div class="swiper th-slider mb-4" id="tourSlider10"
                                data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-07/476149187_1142645844219985_5987073497758971170_n.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Mirissa Beach">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-07/coco.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Whale Watching Mirissa">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-07/DSC_8786.jpg.webp') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Coconut Tree Hill">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-07/mirissa-beach-southern-province-sri-lanka-2018-beautiful-colorful-sunset-on-the-beach-mirissa-beach-sri-lanka-free-photo.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Mirissa Sunset">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-07/mirissa-beach-sri-lanka-1.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Mirissa Beach">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-07/Mirissa_beach_Sri_Lanka.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Whale Watching Mirissa">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-07/TheCommonWanderer-160.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Coconut Tree Hill">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Thumbnails -->
                            <div class="swiper th-slider tour-thumb-slider"
                                data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":2},"768":{"slidesPerView":3},"992":{"slidesPerView":3}}}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-07/476149187_1142645844219985_5987073497758971170_n.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Mirissa Beach">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-07/coco.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Whale Watching Mirissa">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-07/DSC_8786.jpg.webp') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Coconut Tree Hill">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-07/mirissa-beach-southern-province-sri-lanka-2018-beautiful-colorful-sunset-on-the-beach-mirissa-beach-sri-lanka-free-photo.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Mirissa Sunset">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-07/mirissa-beach-sri-lanka-1.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Mirissa Beach">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-07/Mirissa_beach_Sri_Lanka.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Whale Watching Mirissa">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-07/TheCommonWanderer-160.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Coconut Tree Hill">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Arrows -->
                            <button data-slider-prev="#tourSlider10" class="slider-arrow style3 slider-prev">
                                <img src="assets/img/icon/hero-arrow-left.svg" alt="">
                            </button>

                            <button data-slider-next="#tourSlider10" class="slider-arrow style3 slider-next">
                                <img src="assets/img/icon/hero-arrow-right.svg" alt="">
                            </button>
                        </div>

                        <!-- Content -->
                        <div class="page-content">

                            <!-- Meta -->
                            <div class="page-meta mb-30">
                                <a class="page-tag" href="#">Beach Destination</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-water"></i>
                                    <span>Coastal Paradise</span>
                                </span>
                            </div>

                            <!-- Title -->
                            <h2 class="box-title mb-20">
                                Mirissa Beach – Tropical Escape by the Ocean
                            </h2>

                            <!-- Intro -->
                            <p class="box-text mb-30">
                                Mirissa is widely regarded as one of the most vibrant and visually stunning coastal
                                towns in Sri Lanka. Nestled along the southern coast, it is a perfect blend of a sleepy
                                fishing village and a trendy, bohemian traveler's paradise. With its iconic
                                crescent-shaped beach, swaying palm trees, and clear turquoise waters, Mirissa offers an
                                incredible escape for anyone looking to soak up the sun and enjoy the rhythmic pulse of
                                the Indian Ocean.
                            </p>

                            <p class="box-text mb-40">
                                Beyond being a postcard-perfect beach, Mirissa is globally famous as Sri Lanka’s premier
                                hub for whale and dolphin watching. Every morning, boats set sail into the deep blue,
                                offering travelers the chance to witness the ocean’s greatest giants in their natural
                                habitat. Whether you’re chasing adventures on the high seas or just looking to lounge in
                                a hammock with a book, Mirissa is a place that stays in your heart long after you leave.
                            </p>

                            <!-- Key Facts -->
                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Location</li>
                                        <li>Best Time to Visit</li>
                                        <li>Main Attraction</li>
                                        <li>Famous For</li>
                                        <li>Activities</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>Southern Province</li>
                                        <li>November – April</li>
                                        <li>Whale & Dolphin Watching</li>
                                        <li>Sunsets & Beach Vibe</li>
                                        <li>Swimming, Surfing, Snorkeling</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Activities -->
                            <h3 class="box-title">Things to Do</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li><strong>Whale & Dolphin Watching:</strong> Sail out at sunrise to catch
                                        sightings of Blue Whales, Sperm Whales, and pods of playful Spinner Dolphins.
                                    </li>
                                    <li><strong>Coconut Tree Hill:</strong> Hike up this famous headland for the most
                                        iconic, panoramic photo opportunity in Mirissa overlooking the ocean.</li>
                                    <li><strong>Parrot Rock:</strong> A small, rocky island accessible by wading through
                                        the water at low tide, offering a great view of the entire coastline.</li>
                                    <li><strong>Surfing & Snorkeling:</strong> Enjoy beginner-friendly surf breaks or
                                        explore the shallow rocky reefs along the beach for snorkeling.</li>
                                    <li><strong>Beachside Dining:</strong> Spend your evenings at one of the many
                                        restaurants right on the sand, enjoying fresh seafood and vibrant island music.
                                    </li>
                                </ul>
                            </div>

                            <!-- Visiting -->
                            {{-- <h3 class="box-title">Visiting Mirissa</h3>
                        <p class="box-text mb-50">
                            Mirissa is the ideal spot to disconnect and unwind. The early morning whale-watching trips are a "must-do," but be prepared to head out before dawn to catch the best sightings. Evenings in Mirissa are all about the beach lifestyle-find a cozy chair at a café, order a fresh king coconut or a cocktail, and watch as the sun paints the sky in shades of gold and violet.
                        </p> --}}

                            <!-- Map -->
                            <h3 class="box-title">Location Map</h3>
                            <div class="mb-10">
                                <div class="ratio ratio-16x9 rounded overflow-hidden">
                                    <iframe src="https://www.google.com/maps?q=Mirissa+Beach+Sri+Lanka&output=embed"
                                        style="border:0;" allowfullscreen loading="lazy">
                                    </iframe>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('partials.footer')
    @include('partials.scripts')

</body>

</html>
