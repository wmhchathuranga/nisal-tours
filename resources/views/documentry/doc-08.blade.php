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
            <h1 class="breadcumb-title">Nuwara Eliya – Little England</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Nuwara Eliya</li>
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
                        <div class="swiper th-slider mb-4" id="tourSlider11"
                             data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-08/nuwara eliya – little england.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Nuwara Eliya Landscape">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-08/123915899_1789279167901829_2310814119958175871_n.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Nuwara Eliya Landscape">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-08/481281960_940585051580432_7693049892894760360_n.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Tea Plantation">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-08/483567094_10212911253172391_2944520306870981252_n.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Gregory Lake">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-08/483649632_10212911256332470_3398724623747307803_n.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Victoria Park">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-08/BH-Blog-thumb-10-1024x576.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Victoria Park">
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
                                        <img src="{{ asset('assets/img/documentary/doc-08/nuwara eliya – little england.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Nuwara Eliya Landscape">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-08/123915899_1789279167901829_2310814119958175871_n.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Nuwara Eliya Landscape">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-08/481281960_940585051580432_7693049892894760360_n.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Tea Plantation">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-08/483567094_10212911253172391_2944520306870981252_n.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Gregory Lake">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-08/483649632_10212911256332470_3398724623747307803_n.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Victoria Park">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-08/BH-Blog-thumb-10-1024x576.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Victoria Park">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Arrows -->
                        <button data-slider-prev="#tourSlider11"
                                class="slider-arrow style3 slider-prev">
                            <img src="assets/img/icon/hero-arrow-left.svg" alt="">
                        </button>

                        <button data-slider-next="#tourSlider11"
                                class="slider-arrow style3 slider-next">
                            <img src="assets/img/icon/hero-arrow-right.svg" alt="">
                        </button>
                    </div>

                    <!-- Content -->
                    <div class="page-content">

                        <!-- Meta -->
                        <div class="page-meta mb-30">
                            <a class="page-tag" href="#">Hill Country</a>
                            <span class="ratting">
                                <i class="fa-solid fa-mountain"></i>
                                <span>Tea & Nature</span>
                            </span>
                        </div>

                        <!-- Title -->
                        <h2 class="box-title mb-20">
                            Nuwara Eliya – Little England of Sri Lanka
                        </h2>

                        <!-- Intro -->
                        <p class="box-text mb-30">
                            Nuwara Eliya is a charming hill country town known as “Little England” due to
                            its colonial architecture, cool climate, and scenic landscapes.
                        </p>

                        <p class="box-text mb-40">
                            Surrounded by tea plantations, lakes, and waterfalls, it offers a peaceful
                            retreat for nature lovers and travelers seeking tranquility.
                        </p>

                        <!-- Key Facts -->
                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Location</li>
                                    <li>Altitude</li>
                                    <li>Main Attractions</li>
                                    <li>Climate</li>
                                    <li>Activities</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>Central Province</li>
                                    <li>1,868 m</li>
                                    <li>Tea Plantations, Gregory Lake</li>
                                    <li>Cool & Misty</li>
                                    <li>Hiking, Sightseeing, Boating</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Attractions -->
                        <h3 class="box-title">Top Attractions</h3>
                        <div class="checklist mb-50">
                            <ul>
                                <li>Gregory Lake</li>
                                <li>Tea Estates & Plantations</li>
                                <li>Victoria Park</li>
                                <li>Lovers’ Leap Waterfall</li>
                                <li>Nuwara Eliya Golf Club</li>
                            </ul>
                        </div>

                        <!-- Visiting -->
                        <h3 class="box-title">Visiting Nuwara Eliya</h3>
                        <p class="box-text mb-50">
                            The town is best visited during the dry season from December to April. Stroll
                            through colonial-era streets, explore tea factories, and enjoy the serene
                            landscapes of Sri Lanka’s hill country.
                        </p>

                        <!-- Map -->
                        <h3 class="box-title">Location Map</h3>
                        <div class="mb-10">
                            <div class="ratio ratio-16x9 rounded overflow-hidden">
                                <iframe
                                    src="https://www.google.com/maps?q=Nuwara+Eliya+Sri+Lanka&output=embed"
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
