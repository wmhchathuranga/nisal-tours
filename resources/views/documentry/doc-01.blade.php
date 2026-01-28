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
            <h1 class="breadcumb-title">Sigiriya Rock Fortress</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Sigiriya</li>
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
                        <div class="swiper th-slider mb-4" id="tourSlider4" data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-01/lanka-617848_1280.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Sigiriya Rock Fortress">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-01/sigiriya-rock-2.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Sigiriya Frescoes">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-01/monkey-6250238_1280.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Sigiriya Water Gardens">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-01/sigiriya-3607590_1280.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Sigiriya Water Gardens">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-01/sigiriya-459197_1280.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Sigiriya Water Gardens">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-01/sigiriya-5279425_1280.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Sigiriya Water Gardens">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-01/stairs-3209618_1280.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Sigiriya Water Gardens">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-01/stairs-3215722_1280.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Sigiriya Water Gardens">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/documentary/doc-01/take-5200034_1280.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Sigiriya Water Gardens">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="swiper th-slider tour-thumb-slider" data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"autoplayDisableOnInteraction":"true"}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height: 200px;">
                                        <img style="width: 100%; height: 100%; object-fit: cover;" src="{{ asset('assets/img/documentary/doc-01/lanka-617848_1280.jpg') }}" alt="Image">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height: 200px;">
                                        <img style="width: 100%; height: 100%; object-fit: cover;" src="{{ asset('assets/img/documentary/doc-01/sigiriya-rock-2.jpg') }}" alt="Image">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height: 200px;">
                                        <img style="width: 100%; height: 100%; object-fit: cover;" src="{{ asset('assets/img/documentary/doc-01/monkey-6250238_1280.jpg') }}" alt="Image">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height: 200px;">
                                        <img style="width: 100%; height: 100%; object-fit: cover;" src="{{ asset('assets/img/documentary/doc-01/sigiriya-3607590_1280.jpg') }}" alt="Image">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height: 200px;">
                                        <img style="width: 100%; height: 100%; object-fit: cover;" src="{{ asset('assets/img/documentary/doc-01/sigiriya-459197_1280.jpg') }}" alt="Image">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height: 200px;">
                                        <img style="width: 100%; height: 100%; object-fit: cover;" src="{{ asset('assets/img/documentary/doc-01/sigiriya-5279425_1280.jpg') }}" alt="Image">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height: 200px;">
                                        <img style="width: 100%; height: 100%; object-fit: cover;" src="{{ asset('assets/img/documentary/doc-01/stairs-3209618_1280.jpg') }}" alt="Image">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height: 200px;">
                                        <img style="width: 100%; height: 100%; object-fit: cover;" src="{{ asset('assets/img/documentary/doc-01/stairs-3215722_1280.jpg') }}" alt="Image">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height: 200px;">
                                        <img style="width: 100%; height: 100%; object-fit: cover;" src="{{ asset('assets/img/documentary/doc-01/take-5200034_1280.jpg') }}" alt="Image">
                                    </div>
                                </div>

                            </div>
                        </div>
                            
                        <button data-slider-prev="#documentarySlider"
                                class="slider-arrow style3 slider-prev">
                            <img src="assets/img/icon/hero-arrow-left.svg" alt="">
                        </button>

                        <button data-slider-next="#documentarySlider"
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
                                <span>5th Century AD</span>
                            </span>
                        </div>

                        <!-- Title -->
                        <h2 class="box-title mb-20">
                            Sigiriya – The Lion Rock of Sri Lanka
                        </h2>

                        <!-- Intro -->
                        <p class="box-text mb-30">
                            Sigiriya, also known as the Lion Rock, is one of Sri Lanka’s most treasured
                            archaeological wonders. Rising nearly 200 meters above the surrounding plains,
                            this ancient rock fortress reflects the ingenuity, artistry, and ambition of a
                            once-powerful kingdom.
                        </p>

                        <p class="box-text mb-40">
                            Built in the 5th century AD by King Kashyapa, Sigiriya served as a royal palace,
                            fortress, and artistic masterpiece. Today, it stands as a symbol of Sri Lanka’s
                            rich cultural heritage and architectural brilliance.
                        </p>

                        <!-- Key Facts -->
                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Location</li>
                                    <li>Historical Period</li>
                                    <li>Height</li>
                                    <li>Founder</li>
                                    <li>UNESCO Status</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>Central Province, Sri Lanka</li>
                                    <li>5th Century AD</li>
                                    <li>~200 meters</li>
                                    <li>King Kashyapa I</li>
                                    <li>World Heritage Site (1982)</li>
                                </ul>
                            </div>
                        </div>

                        <!-- History -->
                        <h3 class="box-title">Historical Background</h3>
                        <p class="box-text mb-30">
                            After seizing the throne, King Kashyapa chose Sigiriya as his capital, constructing
                            a magnificent palace atop the rock. The site was carefully planned with advanced
                            urban design, water management systems, and defensive structures.
                        </p>

                        <p class="box-text mb-40">
                            Following the king’s death, Sigiriya was transformed into a Buddhist monastery,
                            remaining active for centuries before being abandoned and rediscovered by
                            archaeologists in the 19th century.
                        </p>

                        <!-- Highlights -->
                        <h3 class="box-title">Architectural & Artistic Highlights</h3>
                        <div class="checklist mb-50">
                            <ul>
                                <li>Mirror Wall with ancient inscriptions</li>
                                <li>World-famous Sigiriya Frescoes</li>
                                <li>Symmetrical Water Gardens</li>
                                <li>Lion’s Paw Entrance</li>
                                <li>Royal Palace ruins at the summit</li>
                            </ul>
                        </div>

                        <!-- Cultural Importance -->
                        <h3 class="box-title">Cultural & Global Importance</h3>
                        <p class="box-text mb-40">
                            Sigiriya is considered one of the finest examples of ancient urban planning in the
                            world. Its fusion of nature, architecture, and art makes it a timeless monument
                            admired by historians, architects, and travelers alike.
                        </p>

                        <!-- Visiting Info -->
                        <h3 class="box-title">Visiting Sigiriya Today</h3>
                        <p class="box-text mb-50">
                            Today, Sigiriya is one of Sri Lanka’s most visited landmarks, attracting travelers
                            from across the globe. Visitors can climb the rock, explore the gardens, and
                            experience a living testament to ancient Sri Lankan civilization.
                        </p>

                        <!-- Map View -->
                        <h3 class="box-title">Location Map</h3>
                        <div class="">
                            <div class="ratio ratio-16x9 rounded overflow-hidden">
                                <iframe
                                    src="https://www.google.com/maps?q=Sigiriya+Rock+Fortress+Sri+Lanka&output=embed"
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
