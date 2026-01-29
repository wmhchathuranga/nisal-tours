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
<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Mirissa Beach</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Mirissa</li>
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
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-07/476149187_1142645844219985_5987073497758971170_n.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Mirissa Beach">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-07/coco.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Whale Watching Mirissa">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-07/DSC_8786.jpg.webp') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Coconut Tree Hill">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-07/mirissa-beach-southern-province-sri-lanka-2018-beautiful-colorful-sunset-on-the-beach-mirissa-beach-sri-lanka-free-photo.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Mirissa Sunset">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-07/mirissa-beach-sri-lanka-1.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Mirissa Beach">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-07/Mirissa_beach_Sri_Lanka.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Whale Watching Mirissa">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
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
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Mirissa Beach">
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
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Mirissa Sunset">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-07/mirissa-beach-sri-lanka-1.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Mirissa Beach">
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
                        <button data-slider-prev="#tourSlider10"
                                class="slider-arrow style3 slider-prev">
                            <img src="assets/img/icon/hero-arrow-left.svg" alt="">
                        </button>

                        <button data-slider-next="#tourSlider10"
                                class="slider-arrow style3 slider-next">
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
                            Mirissa Beach is one of Sri Lanka’s most popular beach destinations, famous for
                            its golden sands, turquoise waters, and relaxed coastal atmosphere.
                        </p>

                        <p class="box-text mb-40">
                            Located along the island’s southern coast, Mirissa is also the country’s top
                            spot for whale and dolphin watching.
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
                                    <li>Whale Watching</li>
                                    <li>Sunsets & Beaches</li>
                                    <li>Swimming, Surfing</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Activities -->
                        <h3 class="box-title">Things to Do</h3>
                        <div class="checklist mb-50">
                            <ul>
                                <li>Whale & Dolphin Watching</li>
                                <li>Relaxing on the Beach</li>
                                <li>Surfing & Snorkeling</li>
                                <li>Visit Coconut Tree Hill</li>
                                <li>Beachside Cafés</li>
                            </ul>
                        </div>

                        <!-- Visiting -->
                        <h3 class="box-title">Visiting Mirissa</h3>
                        <p class="box-text mb-50">
                            Mirissa offers a perfect mix of relaxation and adventure. Early morning boat
                            trips provide unforgettable whale sightings, while evenings are ideal for
                            enjoying sunsets by the sea.
                        </p>

                        <!-- Map -->
                        <h3 class="box-title">Location Map</h3>
                        <div class="mb-10">
                            <div class="ratio ratio-16x9 rounded overflow-hidden">
                                <iframe
                                    src="https://www.google.com/maps?q=Mirissa+Beach+Sri+Lanka&output=embed"
                                    style="border:0;"
                                    allowfullscreen
                                    loading="lazy">
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
