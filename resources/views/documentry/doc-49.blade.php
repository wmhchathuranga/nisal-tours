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

<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/explore/31.jpg') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Sinharaja Forest Reserve</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Sinharaja</li>
            </ul>
        </div>
    </div>
</div>

<section class="space">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-xl-10">
                <div class="tour-page-single">

                    <div class="slider-area tour-slider1 mb-40">
                        <div class="swiper th-slider mb-4" id="tourSlider4" data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="{{ asset('assets/img/explore/31.jpg') }}"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Sinharaja Rainforest">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="https://images.unsplash.com/photo-1589556204859-002-39c8907361c4?auto=format&fit=crop&w=1200&q=80"
                                             style="width:100%;height:100%;object-fit:cover;"
                                             alt="Sinharaja Wildlife">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="swiper th-slider tour-thumb-slider" data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"autoplayDisableOnInteraction":"true"}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height: 200px;">
                                        <img style="width: 100%; height: 100%; object-fit: cover;" src="{{ asset('assets/img/explore/31.jpg') }}" alt="Image">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height: 200px;">
                                        <img style="width: 100%; height: 100%; object-fit: cover;" src="https://images.unsplash.com/photo-1589556204859-002-39c8907361c4?auto=format&fit=crop&w=600&q=80" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="page-content">

                        <div class="page-meta mb-30">
                            <a class="page-tag" href="#">Nature & Wildlife</a>
                            <span class="ratting">
                                <i class="fa-solid fa-tree"></i>
                                <span>UNESCO World Heritage</span>
                            </span>
                        </div>

                        <h2 class="box-title mb-20">Sinharaja Forest Reserve – The Last Untouched Rainforest</h2>

                        <p class="box-text mb-30">
                            Sinharaja Forest Reserve is a UNESCO World Heritage Site and a major global biodiversity hotspot. As the country's last remaining area of primary tropical rainforest, it is home to an incredible percentage of endemic flora and fauna, including rare birds, reptiles, and unique insects.
                        </p>

                        <p class="box-text mb-40">
                            Trekking through Sinharaja offers an unparalleled immersion into nature, with rushing streams, hidden waterfalls, and dense canopy structures. It is a legendary destination for birdwatchers and eco-tourists who wish to see Sri Lanka's wildlife in its purest form.
                        </p>

                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Location</li>
                                    <li>Status</li>
                                    <li>Key Feature</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>South Western Zone (Sabaragamuwa / Southern Province)</li>
                                    <li>UNESCO World Heritage Site & Biosphere Reserve</li>
                                    <li>High density of endemic species</li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="box-title">Location Map</h3>
                        <div class="ratio ratio-16x9 rounded overflow-hidden">
                            <iframe
                                src="https://maps.google.com/maps?q=Pidurangala%20Rock&t=&z=15&ie=UTF8&iwloc=&output=embed8"
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
</section>

@include('partials.footer')
@include('partials.scripts')

</body>
</html>