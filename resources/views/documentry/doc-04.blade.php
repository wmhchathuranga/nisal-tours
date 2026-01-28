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
            <h1 class="breadcumb-title">Wilpattu National Park</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Wilpattu</li>
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
                        <div class="swiper th-slider mb-4" id="tourSlider7"
                             data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-04/14.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Wilpattu Landscape">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-04/19546.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Wilpattu Leopard">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-04/44936510_2328767640685183_6872562867535609856_n.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Wilpattu Villu">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-04/45118426_2328767650685182_5860683467544592384_n.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Wilpattu Wildlife">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-04/831.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Wilpattu Wildlife">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-04/asdfg.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Wilpattu Wildlife">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-04/Leapords-in-Wilpattu-national-park-Sri-Lanka.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Wilpattu Wildlife">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-04/Wilpattu-National-Park-hele-of-halve-dag-safari.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Wilpattu Wildlife">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="swiper th-slider tour-thumb-slider"
                             data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"autoplayDisableOnInteraction":"true"}'>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-04/14.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-04/19546.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-04/44936510_2328767640685183_6872562867535609856_n.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-04/45118426_2328767650685182_5860683467544592384_n.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-04/831.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-04/asdfg.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-04/Leapords-in-Wilpattu-national-park-Sri-Lanka.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:200px;">
                                        <img src="{{ asset('assets/img/documentary/doc-04/Wilpattu-National-Park-hele-of-halve-dag-safari.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;" alt="">
                                    </div>
                                </div>


                            </div>
                        </div>

                        <button data-slider-prev="#tourSlider7"
                                class="slider-arrow style3 slider-prev">
                            <img src="assets/img/icon/hero-arrow-left.svg" alt="">
                        </button>

                        <button data-slider-next="#tourSlider7"
                                class="slider-arrow style3 slider-next">
                            <img src="assets/img/icon/hero-arrow-right.svg" alt="">
                        </button>
                    </div>

                    <!-- Content -->
                    <div class="page-content">

                        <!-- Meta -->
                        <div class="page-meta mb-30">
                            <a class="page-tag" href="#">Wildlife Sanctuary</a>
                            <span class="ratting">
                                <i class="fa-solid fa-paw"></i>
                                <span>National Park</span>
                            </span>
                        </div>

                        <!-- Title -->
                        <h2 class="box-title mb-20">
                            Wilpattu National Park – Land of Natural Lakes
                        </h2>

                        <!-- Intro -->
                        <p class="box-text mb-30">
                            Wilpattu National Park is Sri Lanka’s largest and one of its oldest national parks,
                            known for its untouched wilderness, dense forests, and unique natural lakes known
                            as “villus.”
                        </p>

                        <p class="box-text mb-40">
                            Unlike other parks, Wilpattu offers a quieter, more immersive safari experience,
                            where wildlife thrives in a calm and expansive natural setting.
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
                                    <li>North Western Province</li>
                                    <li>1938</li>
                                    <li>1,317 km²</li>
                                    <li>Natural Villus (Lakes)</li>
                                    <li>Leopards, Sloth Bears</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Landscape -->
                        <h3 class="box-title">Landscape & Ecosystem</h3>
                        <p class="box-text mb-30">
                            The defining feature of Wilpattu is its network of villus — shallow natural lakes
                            that collect rainwater and support diverse wildlife throughout the year.
                        </p>

                        <p class="box-text mb-40">
                            The park’s terrain consists of dry-zone forest, open plains, and coastal scrubland,
                            creating a rich and balanced ecosystem.
                        </p>

                        <!-- Wildlife -->
                        <h3 class="box-title">Wildlife Highlights</h3>
                        <div class="checklist mb-50">
                            <ul>
                                <li>Sri Lankan Leopard</li>
                                <li>Sloth Bear</li>
                                <li>Asian Elephant</li>
                                <li>Spotted & Barking Deer</li>
                                <li>Crocodiles and Birdlife</li>
                            </ul>
                        </div>

                        <!-- Conservation -->
                        <h3 class="box-title">Conservation Importance</h3>
                        <p class="box-text mb-40">
                            Wilpattu plays a vital role in Sri Lanka’s wildlife conservation efforts. Its vast
                            and less crowded environment allows animals to behave naturally, making it an
                            important refuge for endangered species.
                        </p>

                        <!-- Visiting Info -->
                        <h3 class="box-title">Visiting Wilpattu</h3>
                        <p class="box-text mb-50">
                            The best time to visit Wilpattu is during the dry season when animals gather near
                            villus. Jeep safaris offer visitors a chance to explore the park while maintaining
                            strict conservation guidelines.
                        </p>

                        <!-- Map View -->
                        <h3 class="box-title">Location Map</h3>
                        <div class="mb-10">
                            <div class="ratio ratio-16x9 rounded overflow-hidden">
                                <iframe
                                    src="https://www.google.com/maps?q=Wilpattu+National+Park+Sri+Lanka&output=embed"
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
