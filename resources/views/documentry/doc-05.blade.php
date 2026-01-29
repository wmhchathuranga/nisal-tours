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
            <h1 class="breadcumb-title">Ella – Hill Country Escape</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Ella</li>
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
                        <div class="swiper th-slider mb-4" id="tourSlider8"
                             data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/411178251_388706746931617_4801495365530956364_n.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Ella Landscape">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/dilhan-sariffodeen-fDI98ucdsTU-unsplash-1024x576.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Nine Arch Bridge">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/DSC9904-scaled.webp') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Little Adam’s Peak">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/ella-4788958_1920.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Ella Rock">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/Ella-Rock-view.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Ella Landscape">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/ella-sri-lanka-evening-rain-reflections-photo.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Nine Arch Bridge">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/LS_Ella-Rock_Desktop_1920x700.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Little Adam’s Peak">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/ravana-cave-in-ella-1-1200_orig.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Ella Rock">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/ravana-falls-6.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Nine Arch Bridge">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/Ravana_waterfalls_ella.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Little Adam’s Peak">
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
                                        <img src="{{ asset('assets/img/documentary/doc-05/411178251_388706746931617_4801495365530956364_n.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Ella Landscape">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/dilhan-sariffodeen-fDI98ucdsTU-unsplash-1024x576.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Nine Arch Bridge">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/DSC9904-scaled.webp') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Little Adam’s Peak">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/ella-4788958_1920.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Ella Rock">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/Ella-Rock-view.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Ella Landscape">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/ella-sri-lanka-evening-rain-reflections-photo.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Nine Arch Bridge">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/LS_Ella-Rock_Desktop_1920x700.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Little Adam’s Peak">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/ravana-cave-in-ella-1-1200_orig.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Ella Rock">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/ravana-falls-6.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Nine Arch Bridge">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-05/Ravana_waterfalls_ella.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Little Adam’s Peak">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Arrows -->
                        <button data-slider-prev="#tourSlider8"
                                class="slider-arrow style3 slider-prev">
                            <img src="assets/img/icon/hero-arrow-left.svg" alt="">
                        </button>

                        <button data-slider-next="#tourSlider8"
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
                                <span>Nature Escape</span>
                            </span>
                        </div>

                        <!-- Title -->
                        <h2 class="box-title mb-20">
                            Ella – A Scenic Hill Country Retreat
                        </h2>

                        <!-- Intro -->
                        <p class="box-text mb-30">
                            Ella is a charming hill town in Sri Lanka’s central highlands, known for its cool
                            climate, misty mountains, and breathtaking landscapes.
                        </p>

                        <p class="box-text mb-40">
                            Surrounded by tea plantations, waterfalls, and hiking trails, Ella offers a perfect
                            blend of relaxation and adventure.
                        </p>

                        <!-- Key Facts -->
                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Location</li>
                                    <li>Elevation</li>
                                    <li>Climate</li>
                                    <li>Main Attractions</li>
                                    <li>Best For</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>Badulla District</li>
                                    <li>1,041 m</li>
                                    <li>Cool & Misty</li>
                                    <li>Nine Arch Bridge</li>
                                    <li>Hiking & Nature</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Landscape -->
                        <h3 class="box-title">Landscape & Scenery</h3>
                        <p class="box-text mb-40">
                            Ella is surrounded by rolling hills, deep valleys, and lush green tea estates.
                            Sunrise hikes and scenic train journeys make it one of Sri Lanka’s most photogenic
                            destinations.
                        </p>

                        <!-- Highlights -->
                        <h3 class="box-title">Highlights</h3>
                        <div class="checklist mb-50">
                            <ul>
                                <li>Nine Arch Bridge</li>
                                <li>Little Adam’s Peak</li>
                                <li>Ella Rock</li>
                                <li>Ravana Falls</li>
                                <li>Tea Plantations</li>
                            </ul>
                        </div>

                        <!-- Visiting Info -->
                        <h3 class="box-title">Visiting Ella</h3>
                        <p class="box-text mb-50">
                            Ella can be visited year-round, but clear mornings are best for hiking. The train
                            ride to Ella is considered one of the most scenic rail journeys in the world.
                        </p>

                        <!-- Map -->
                        <h3 class="box-title">Location Map</h3>
                        <div class="mb-10">
                            <div class="ratio ratio-16x9 rounded overflow-hidden">
                                <iframe
                                    src="https://www.google.com/maps?q=Ella+Sri+Lanka&output=embed"
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
