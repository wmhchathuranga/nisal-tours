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

<div class="breadcumb-wrapper" data-bg-src="https://images.unsplash.com/photo-1546708973-c15bc5c5c93c?auto=format&fit=crop&w=1920&q=80">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Traditional Village Tour</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Village Tour</li>
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
                            <div class="swiper th-slider mb-4" id="tourSlider13"
                                data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/aluwihare/caption (2).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Leopard resting on a tree in Yala">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/aluwihare/caption (3).jpg') }}')"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Wild Elephants roaming">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/aluwihare/caption (4).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Jeep Safari">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/aluwihare/caption (5).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sloth Bear sighting in the wild">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/aluwihare/caption (6).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Patanangala Beach inside the park">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="swiper th-slider tour-thumb-slider"
                                data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":2},"768":{"slidesPerView":3},"992":{"slidesPerView":3}}}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/aluwihare/caption (2).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/aluwihare/caption (3).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/aluwihare/caption (4).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/aluwihare/caption (5).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/aluwihare/caption (6).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <button data-slider-prev="#tourSlider13" class="slider-arrow style3 slider-prev">
                                <img src="{{ asset('assets/img/icon/hero-arrow-left.svg') }}" alt="">
                            </button>

                            <button data-slider-next="#tourSlider13" class="slider-arrow style3 slider-next">
                                <img src="{{ asset('assets/img/icon/hero-arrow-right.svg') }}" alt="">
                            </button>
                        </div>

                    <div class="page-content">
                        <div class="page-meta mb-30">
                            <a class="page-tag" href="#">Culture & Heritage</a>
                            <span class="ratting">
                                <i class="fa-solid fa-house-chimney"></i>
                                <span>Authentic Experience</span>
                            </span>
                        </div>

                        <h2 class="box-title mb-20">Village Tour – Experience the Heart of Sri Lanka</h2>

                        <p class="box-text mb-30">
                            Step away from the bustling cities and experience traditional Sri Lankan rural life in Habarana or Sigiriya. This authentic tour usually involves a scenic bullock cart ride, a peaceful catamaran safari across a lotus-filled lake, and a traditional cooking demonstration culminating in a delicious, spicy Sri Lankan lunch.
                        </p>

                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Location</li>
                                    <li>Highlights</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>Habarana / Sigiriya</li>
                                    <li>Bullock Cart, Catamaran, Traditional Cooking</li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="box-title">Location Map</h3>
                        <div class="ratio ratio-16x9 rounded overflow-hidden">
                            <iframe src="https://maps.google.com/maps?q=Pidurangala%20Rock&t=&z=15&ie=UTF8&iwloc=&output=embed1" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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