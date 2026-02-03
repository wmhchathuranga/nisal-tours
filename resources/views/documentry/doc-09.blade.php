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
            <h1 class="breadcumb-title">Colombo – The Vibrant Capital</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Colombo</li>
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
                        <div class="swiper th-slider mb-4" id="tourSlider12"
                             data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-09/colombo-2.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-09/Gangaramaya_Temple_6b78a7f138.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-09/colombo.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;">
                                    </div>
                                </div>


                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-09/pexels-thilina-alagiyawanna-3266092-23234938.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-09/pexels-thilina-alagiyawanna-3266092-32451023.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;">
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
                                        <img src="{{ asset('assets/img/documentary/doc-09/colombo-2.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-09/Gangaramaya_Temple_6b78a7f138.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-09/colombo.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-09/pexels-thilina-alagiyawanna-3266092-23234938.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-09/pexels-thilina-alagiyawanna-3266092-32451023.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Arrows -->
                        <button data-slider-prev="#tourSlider12"
                                class="slider-arrow style3 slider-prev">
                            <img src="assets/img/icon/hero-arrow-left.svg" alt="">
                        </button>

                        <button data-slider-next="#tourSlider12"
                                class="slider-arrow style3 slider-next">
                            <img src="assets/img/icon/hero-arrow-right.svg" alt="">
                        </button>
                    </div>

                    <!-- Content -->
                    <div class="page-content">

                        <!-- Meta -->
                        <div class="page-meta mb-30">
                            <a class="page-tag" href="#">Capital City</a>
                            <span class="ratting">
                                <i class="fa-solid fa-city"></i>
                                <span>Urban & Heritage</span>
                            </span>
                        </div>

                        <!-- Title -->
                        <h2 class="box-title mb-20">
                            Colombo – The Commercial Capital of Sri Lanka
                        </h2>

                        <!-- Intro -->
                        <p class="box-text mb-30">
                            Colombo is Sri Lanka’s vibrant capital city, blending colonial heritage,
                            modern skyscrapers, bustling markets, and a scenic oceanfront.
                        </p>

                        <p class="box-text mb-40">
                            From historic temples to lively streets and luxury shopping districts,
                            Colombo represents the dynamic spirit of modern Sri Lanka.
                        </p>

                        <!-- Key Facts -->
                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Province</li>
                                    <li>Population</li>
                                    <li>Main Attractions</li>
                                    <li>Climate</li>
                                    <li>Activities</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>Western Province</li>
                                    <li>Over 5 Million (Metro)</li>
                                    <li>Galle Face, Lotus Tower</li>
                                    <li>Tropical</li>
                                    <li>Sightseeing, Shopping, Dining</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Attractions -->
                        <h3 class="box-title">Top Attractions</h3>
                        <div class="checklist mb-50">
                            <ul>
                                <li>Galle Face Green</li>
                                <li>Gangaramaya Temple</li>
                                <li>Pettah Floating Market</li>
                                <li>Lotus Tower</li>
                                <li>Independence Memorial Hall</li>
                            </ul>
                        </div>

                        <!-- Visiting -->
                        <h3 class="box-title">Visiting Colombo</h3>
                        <p class="box-text mb-50">
                            Colombo can be visited year-round. Evenings at Galle Face,
                            cultural visits to temples, and city shopping experiences make
                            it a must-see destination.
                        </p>

                        <!-- Map -->
                        <h3 class="box-title">Location Map</h3>
                        <div class="mb-10">
                            <div class="ratio ratio-16x9 rounded overflow-hidden">
                                <iframe
                                    src="https://www.google.com/maps?q=Colombo+Sri+Lanka&output=embed"
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
