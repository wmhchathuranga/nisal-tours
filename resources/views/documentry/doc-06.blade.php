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
            <h1 class="breadcumb-title">Yala National Park</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Yala</li>
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
                        <div class="swiper th-slider mb-4" id="tourSlider9"
                             data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-06/Yala-National-Park-Game-drive-peacock.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Yala Landscape">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-06/yala-national-park-located.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Yala Leopard">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-06/yala-national-park-sri-lanka-scenery.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Yala Elephant">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-06/01-1920-760.webp') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Yala Landscape">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-06/25.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Yala Leopard">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-06/ec.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Yala Elephant">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-06/free-photo-of-majestic-leopard-in-sri-lankan-wilderness.jpeg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Yala Birdlife">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-06/Scenery_in_Yala_National_Park.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Yala Landscape">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-06/thumb_16746225_cover_header.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Yala Elephant">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-06/yala-main-entrance-1024x683.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Yala Birdlife">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-06/yala-national-park-sri-lanka-water-buffallo.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Yala Birdlife">
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
                                        <img src="{{ asset('assets/img/documentary/doc-06/Yala-National-Park-Game-drive-peacock.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Yala Landscape">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-06/yala-national-park-located.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Yala Leopard">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-06/yala-national-park-sri-lanka-scenery.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Yala Elephant">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-06/01-1920-760.webp') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Yala Landscape">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-06/25.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Yala Leopard">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-06/ec.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Yala Elephant">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-06/free-photo-of-majestic-leopard-in-sri-lankan-wilderness.jpeg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Yala Birdlife">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-06/Scenery_in_Yala_National_Park.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Yala Landscape">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-06/thumb_16746225_cover_header.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Yala Elephant">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-06/yala-main-entrance-1024x683.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Yala Birdlife">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-06/yala-national-park-sri-lanka-water-buffallo.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Yala Birdlife">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Arrows -->
                        <button data-slider-prev="#tourSlider9"
                                class="slider-arrow style3 slider-prev">
                            <img src="assets/img/icon/hero-arrow-left.svg" alt="">
                        </button>

                        <button data-slider-next="#tourSlider9"
                                class="slider-arrow style3 slider-next">
                            <img src="assets/img/icon/hero-arrow-right.svg" alt="">
                        </button>
                    </div>

                    <!-- Content -->
                    <div class="page-content">

                        <!-- Meta -->
                        <div class="page-meta mb-30">
                            <a class="page-tag" href="#">Wildlife Safari</a>
                            <span class="ratting">
                                <i class="fa-solid fa-paw"></i>
                                <span>National Park</span>
                            </span>
                        </div>

                        <!-- Title -->
                        <h2 class="box-title mb-20">
                            Yala National Park – Land of the Leopard
                        </h2>

                        <!-- Intro -->
                        <p class="box-text mb-30">
                            Yala National Park is Sri Lanka’s most famous wildlife sanctuary and is known for
                            having one of the highest leopard densities in the world.
                        </p>

                        <p class="box-text mb-40">
                            Located in the island’s southeastern region, Yala combines dry forests, grasslands,
                            lagoons, and coastline into a diverse and dramatic ecosystem.
                        </p>

                        <!-- Key Facts -->
                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Location</li>
                                    <li>Established</li>
                                    <li>Park Area</li>
                                    <li>Main Feature</li>
                                    <li>Famous Wildlife</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>Southern Province</li>
                                    <li>1938</li>
                                    <li>978 km²</li>
                                    <li>High Leopard Density</li>
                                    <li>Leopards, Elephants</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Landscape -->
                        <h3 class="box-title">Landscape & Ecosystem</h3>
                        <p class="box-text mb-40">
                            Yala’s landscape ranges from dry monsoon forests and open plains to coastal dunes
                            and freshwater lagoons, supporting an extraordinary range of wildlife.
                        </p>

                        <!-- Wildlife -->
                        <h3 class="box-title">Wildlife Highlights</h3>
                        <div class="checklist mb-50">
                            <ul>
                                <li>Sri Lankan Leopard</li>
                                <li>Asian Elephant</li>
                                <li>Sloth Bear</li>
                                <li>Spotted Deer & Buffalo</li>
                                <li>Birds & Reptiles</li>
                            </ul>
                        </div>

                        <!-- Visiting -->
                        <h3 class="box-title">Visiting Yala</h3>
                        <p class="box-text mb-50">
                            The best time to visit Yala is during the dry season when animals gather around
                            water sources. Jeep safaris provide close encounters while following strict
                            conservation rules.
                        </p>

                        <!-- Map -->
                        <h3 class="box-title">Location Map</h3>
                        <div class="mb-10">
                            <div class="ratio ratio-16x9 rounded overflow-hidden">
                                <iframe
                                    src="https://www.google.com/maps?q=Yala+National+Park+Sri+Lanka&output=embed"
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
