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
            <h1 class="breadcumb-title">Kandy</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Kandy</li>
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
                        <div class="swiper th-slider mb-4" id="tourSlider6"
                             data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-03/78f78d7e-8944-4dd2-ac84-fbefce9b46ee.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Temple of the Tooth Relic">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-03/dance-6983578_1280.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Kandy Lake">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-03/pexels-freestockpro-322437.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Kandy City View">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-03/pexels-gihans-27907347.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Esala Perahera">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-03/pexels-thilina-alagiyawanna-3266092-31001481.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Esala Perahera">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-03/sri-lanka-6250244_1280.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Esala Perahera">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="swiper th-slider tour-thumb-slider"
                             data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"autoplayDisableOnInteraction":"true"}'>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-03/78f78d7e-8944-4dd2-ac84-fbefce9b46ee.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-03/dance-6983578_1280.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-03/pexels-freestockpro-322437.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-03/pexels-gihans-27907347.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-03/pexels-thilina-alagiyawanna-3266092-31001481.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-03/sri-lanka-6250244_1280.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <button data-slider-prev="#tourSlider6"
                                class="slider-arrow style3 slider-prev">
                            <img src="assets/img/icon/hero-arrow-left.svg" alt="">
                        </button>

                        <button data-slider-next="#tourSlider6"
                                class="slider-arrow style3 slider-next">
                            <img src="assets/img/icon/hero-arrow-right.svg" alt="">
                        </button>
                    </div>

                    <!-- Content -->
                    <div class="page-content">

                        <!-- Meta -->
                        <div class="page-meta mb-30">
                            <a class="page-tag" href="#">UNESCO World Heritage City</a>
                            <span class="ratting">
                                <i class="fa-solid fa-landmark"></i>
                                <span>Sacred City</span>
                            </span>
                        </div>

                        <!-- Title -->
                        <h2 class="box-title mb-20">
                            Kandy – The Sacred Heart of Sri Lanka
                        </h2>

                        <!-- Intro -->
                        <p class="box-text mb-30">
                            Kandy is the last royal capital of Sri Lanka and one of the country’s most sacred
                            and culturally significant cities. Nestled among misty hills, it has long been
                            a center of religion, governance, and tradition.
                        </p>

                        <p class="box-text mb-40">
                            Best known as the home of the Temple of the Sacred Tooth Relic, Kandy remains a
                            living symbol of Sri Lanka’s Buddhist heritage and royal legacy.
                        </p>

                        <!-- Key Facts -->
                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Location</li>
                                    <li>Historical Role</li>
                                    <li>Religion</li>
                                    <li>Main Landmark</li>
                                    <li>UNESCO Status</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>Central Province, Sri Lanka</li>
                                    <li>Last Royal Capital</li>
                                    <li>Buddhism</li>
                                    <li>Temple of the Tooth Relic</li>
                                    <li>World Heritage Site (1988)</li>
                                </ul>
                            </div>
                        </div>

                        <!-- History -->
                        <h3 class="box-title">Historical Background</h3>
                        <p class="box-text mb-30">
                            Kandy rose to prominence in the 15th century and became the final stronghold of
                            the Sinhalese monarchy. Protected by natural terrain, it resisted European
                            colonial powers for centuries.
                        </p>

                        <p class="box-text mb-40">
                            In 1815, Kandy fell to the British, marking the end of Sri Lanka’s monarchy.
                            Despite this, the city preserved its spiritual importance and cultural traditions.
                        </p>

                        <!-- Highlights -->
                        <h3 class="box-title">Cultural & Architectural Highlights</h3>
                        <div class="checklist mb-50">
                            <ul>
                                <li>Temple of the Sacred Tooth Relic</li>
                                <li>Kandy Lake and royal palace complex</li>
                                <li>Annual Esala Perahera festival</li>
                                <li>Traditional Kandyan dance</li>
                                <li>Colonial and Kandyan architecture</li>
                            </ul>
                        </div>

                        <!-- Cultural Importance -->
                        <h3 class="box-title">Cultural & Religious Importance</h3>
                        <p class="box-text mb-40">
                            Kandy is one of the most sacred Buddhist cities in the world. The annual Esala
                            Perahera, featuring dancers, drummers, and adorned elephants, is among Asia’s
                            grandest religious festivals.
                        </p>

                        <!-- Visiting Info -->
                        <h3 class="box-title">Kandy Today</h3>
                        <p class="box-text mb-50">
                            Today, Kandy blends spirituality, history, and modern life. Visitors can explore
                            sacred temples, scenic viewpoints, museums, and vibrant cultural performances.
                        </p>

                        <!-- Map View -->
                        <h3 class="box-title">Location Map</h3>
                        <div class="mb-10">
                            <div class="ratio ratio-16x9 rounded overflow-hidden">
                                <iframe
                                    src="https://www.google.com/maps?q=Kandy+Sri+Lanka&output=embed"
                                    style="border:0;"
                                    allowfullscreen=""
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
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
