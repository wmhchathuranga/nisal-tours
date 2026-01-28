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
            <h1 class="breadcumb-title">Galle Fort</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Galle Fort</li>
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
                        <div class="swiper th-slider mb-4" id="tourSlider5"
                             data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-02/galle-5115527_1280.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Galle Lighthouse">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-02/galle-4818526_1280.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Galle Fort Walls">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-02/pexels-batagov-29813518.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Dutch Architecture Galle">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-02/pexels-charithk-6624969.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Galle Fort Streets">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-02/pexels-eslames1-32310277.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Galle Fort Ramparts">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-02/pexels-leefinvrede-18463836.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Galle Fort Viewpoint">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-02/pexels-thilina-alagiyawanna-3266092-27669315(1).jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Galle Fort Streetscape">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-02/pexels-thilina-alagiyawanna-3266092-30858009.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Galle Fort Streetscape">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-02/pexels-thilina-alagiyawanna-3266092-31032907.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Galle Fort Streetscape">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-02/pexels-thilina-alagiyawanna-3266092-31032909.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Galle Fort Streetscape">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="swiper th-slider tour-thumb-slider"
                             data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"autoplayDisableOnInteraction":"true"}'>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-02/galle-5115527_1280.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-02/galle-4818526_1280.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-02/pexels-batagov-29813518.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-02/pexels-charithk-6624969.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-02/pexels-eslames1-32310277.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-02/pexels-leefinvrede-18463836.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-02/pexels-thilina-alagiyawanna-3266092-27669315(1).jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-02/pexels-thilina-alagiyawanna-3266092-30858009.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-02/pexels-thilina-alagiyawanna-3266092-31032907.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-02/pexels-thilina-alagiyawanna-3266092-31032909.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <button data-slider-prev="#tourSlider5"
                                class="slider-arrow style3 slider-prev">
                            <img src="assets/img/icon/hero-arrow-left.svg" alt="">
                        </button>

                        <button data-slider-next="#tourSlider5"
                                class="slider-arrow style3 slider-next">
                            <img src="assets/img/icon/hero-arrow-right.svg" alt="">
                        </button>
                    </div>

                    <!-- Content -->
                    <div class="page-content">

                        <!-- Meta -->
                        <div class="page-meta mb-30">
                            <a class="page-tag" href="#">UNESCO World Heritage Site</a>
                            <span class="ratting">
                                <i class="fa-solid fa-landmark"></i>
                                <span>16th Century</span>
                            </span>
                        </div>

                        <!-- Title -->
                        <h2 class="box-title mb-20">
                            Galle Fort – A Living Colonial Heritage
                        </h2>

                        <!-- Intro -->
                        <p class="box-text mb-30">
                            Galle Fort is the finest surviving example of a fortified city built by Europeans
                            in South and Southeast Asia. Located on Sri Lanka’s southern coast, it represents
                            centuries of maritime history, cultural fusion, and colonial influence.
                        </p>

                        <p class="box-text mb-40">
                            Originally built by the Portuguese in the 16th century and later expanded by the
                            Dutch, Galle Fort stands today as a vibrant, living monument where history and
                            modern life coexist.
                        </p>

                        <!-- Key Facts -->
                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Location</li>
                                    <li>Established</li>
                                    <li>Colonial Powers</li>
                                    <li>Main Features</li>
                                    <li>UNESCO Status</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>Southern Province, Sri Lanka</li>
                                    <li>1588</li>
                                    <li>Portuguese & Dutch</li>
                                    <li>Ramparts, Lighthouse, Old Town</li>
                                    <li>World Heritage Site (1988)</li>
                                </ul>
                            </div>
                        </div>

                        <!-- History -->
                        <h3 class="box-title">Historical Background</h3>
                        <p class="box-text mb-30">
                            Galle Fort was first fortified by the Portuguese after their arrival in Sri Lanka.
                            The Dutch later transformed it into a powerful administrative and military center,
                            constructing massive ramparts, bastions, and drainage systems.
                        </p>

                        <p class="box-text mb-40">
                            Under British rule, the fort retained its importance as a trading port. Unlike many
                            colonial sites, Galle Fort has remained continuously inhabited, preserving its
                            historic character.
                        </p>

                        <!-- Highlights -->
                        <h3 class="box-title">Architectural & Cultural Highlights</h3>
                        <div class="checklist mb-50">
                            <ul>
                                <li>Stone ramparts overlooking the Indian Ocean</li>
                                <li>Historic Dutch Reformed Church</li>
                                <li>Iconic Galle Lighthouse</li>
                                <li>Narrow streets with colonial houses</li>
                                <li>Museums, cafés, and art galleries</li>
                            </ul>
                        </div>

                        <!-- Cultural Importance -->
                        <h3 class="box-title">Cultural & Global Importance</h3>
                        <p class="box-text mb-40">
                            Galle Fort represents a unique blend of European architectural styles with South
                            Asian traditions. It is a living heritage site that showcases the impact of global
                            trade, colonialism, and cultural exchange.
                        </p>

                        <!-- Visiting Info -->
                        <h3 class="box-title">Galle Fort Today</h3>
                        <p class="box-text mb-50">
                            Today, Galle Fort is one of Sri Lanka’s most atmospheric destinations. Visitors can
                            walk along the ramparts, explore museums, enjoy seaside sunsets, and experience a
                            historic city that continues to thrive.
                        </p>

                        <!-- Map View -->
                        <h3 class="box-title">Location Map</h3>
                        <div class="">
                            <div class="ratio ratio-16x9 rounded overflow-hidden">
                                <iframe
                                    src="https://www.google.com/maps?q=Galle+Fort+Sri+Lanka&output=embed"
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
