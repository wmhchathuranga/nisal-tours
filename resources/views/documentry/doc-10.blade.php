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
            <h1 class="breadcumb-title">Horton Plains National Park</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Horton Plains</li>
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
                        <div class="swiper th-slider mb-4" id="tourSlider13"
                             data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-10/313310326_5959735470737138_2706836965884889269_n.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-10/hoton-plains.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-10/3e861126-0912-45ce-bbda-67d19ad4970a.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-10/Horton.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-10/horton-plains-min.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-10/horton-plains-national.jpg') }}"
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
                                        <img src="{{ asset('assets/img/documentary/doc-10/313310326_5959735470737138_2706836965884889269_n.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;">
                                    </div>
                                </div>
                                
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-10/hoton-plains.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-10/3e861126-0912-45ce-bbda-67d19ad4970a.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-10/Horton.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-10/horton-plains-min.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-10/horton-plains-national.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Arrows -->
                        <button data-slider-prev="#tourSlider13"
                                class="slider-arrow style3 slider-prev">
                            <img src="assets/img/icon/hero-arrow-left.svg" alt="">
                        </button>

                        <button data-slider-next="#tourSlider13"
                                class="slider-arrow style3 slider-next">
                            <img src="assets/img/icon/hero-arrow-right.svg" alt="">
                        </button>
                    </div>

                    <!-- Content -->
                    <div class="page-content">

                        <!-- Meta -->
                        <div class="page-meta mb-30">
                            <a class="page-tag" href="#">National Park</a>
                            <span class="ratting">
                                <i class="fa-solid fa-leaf"></i>
                                <span>Highland Nature</span>
                            </span>
                        </div>

                        <!-- Title -->
                        <h2 class="box-title mb-20">
                            Horton Plains – The Cloud Forest of Sri Lanka
                        </h2>

                        <!-- Intro -->
                        <p class="box-text mb-30">
                            Horton Plains National Park is a UNESCO World Heritage Site located in
                            Sri Lanka’s central highlands, famous for misty grasslands, cloud forests,
                            and breathtaking escarpments.
                        </p>

                        <p class="box-text mb-40">
                            The park is home to unique biodiversity and iconic landmarks such as
                            World’s End and Baker’s Falls.
                        </p>

                        <!-- Key Facts -->
                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Province</li>
                                    <li>Elevation</li>
                                    <li>Famous Landmarks</li>
                                    <li>Climate</li>
                                    <li>Activities</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>Central Province</li>
                                    <li>2,100 – 2,300 m</li>
                                    <li>World’s End, Baker’s Falls</li>
                                    <li>Cool & Misty</li>
                                    <li>Hiking, Photography, Nature Walks</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Wildlife -->
                        <h3 class="box-title">Wildlife & Nature</h3>
                        <div class="checklist mb-50">
                            <ul>
                                <li>Sambar Deer</li>
                                <li>Endemic Bird Species</li>
                                <li>Reptiles & Amphibians</li>
                                <li>Montane Forest Flora</li>
                                <li>Rare Medicinal Plants</li>
                            </ul>
                        </div>

                        <!-- Visiting -->
                        <h3 class="box-title">Visiting Horton Plains</h3>
                        <p class="box-text mb-50">
                            Early morning visits are recommended to catch clear views at World’s End.
                            The best time to visit is from January to March, when visibility is highest.
                        </p>

                        <!-- Map -->
                        <h3 class="box-title">Location Map</h3>
                        <div class="mb-10">
                            <div class="ratio ratio-16x9 rounded overflow-hidden">
                                <iframe
                                    src="https://www.google.com/maps?q=Horton+Plains+National+Park+Sri+Lanka&output=embed"
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
