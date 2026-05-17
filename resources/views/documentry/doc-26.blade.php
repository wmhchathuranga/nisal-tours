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

<div class="breadcumb-wrapper" data-bg-src="https://images.unsplash.com/photo-1586899028174-e7098604235b?auto=format&fit=crop&w=1920&q=80">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Ella Rock</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Ella Rock</li>
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
                                        <img src="https://images.unsplash.com/photo-1526055530856-11f71a0628e9?auto=format&fit=crop&w=1200&q=80" style="width:100%;height:100%;object-fit:cover;" alt="Ella Rock Hike">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height:480px;">
                                        <img src="https://images.unsplash.com/photo-1598114006198-6395b0f4477c?auto=format&fit=crop&w=1200&q=80" style="width:100%;height:100%;object-fit:cover;" alt="Ella View">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper th-slider tour-thumb-slider" data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"autoplayDisableOnInteraction":"true"}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height: 200px;">
                                        <img style="width: 100%; height: 100%; object-fit: cover;" src="https://images.unsplash.com/photo-1526055530856-11f71a0628e9?auto=format&fit=crop&w=600&q=80" alt="Image">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tour-slider-img" style="height: 200px;">
                                        <img style="width: 100%; height: 100%; object-fit: cover;" src="https://images.unsplash.com/photo-1598114006198-6395b0f4477c?auto=format&fit=crop&w=600&q=80" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="page-content">
                        <div class="page-meta mb-30">
                            <a class="page-tag" href="#">Adventure & Nature</a>
                            <span class="ratting">
                                <i class="fa-solid fa-person-hiking"></i>
                                <span>Trekking Paradise</span>
                            </span>
                        </div>

                        <h2 class="box-title mb-20">Ella Rock – The Ultimate Hill Country Hike</h2>

                        <p class="box-text mb-30">
                            Towering over the Ella valley, Ella Rock is one of the most sought-after hiking destinations in Sri Lanka. The trek takes you through scenic railway tracks, beautiful tea plantations, and dense forests before opening up to a dramatic cliff edge.
                        </p>

                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Location</li>
                                    <li>Duration of Hike</li>
                                    <li>Difficulty Level</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>Ella, Uva Province</li>
                                    <li>2 - 4 Hours (Round trip)</li>
                                    <li>Moderate to Challenging</li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="box-title">What to Expect</h3>
                        <div class="checklist mb-50">
                            <ul>
                                <li>A thrilling walk along the active railway lines.</li>
                                <li>Stunning views of Little Adam's Peak and Ella Gap from the summit.</li>
                                <li>Lush green trails weaving through local tea estates.</li>
                            </ul>
                        </div>

                        <h3 class="box-title">Location Map</h3>
                        <div class="ratio ratio-16x9 rounded overflow-hidden">
                            <iframe src="https://maps.google.com/maps?q=Ella+Rock&t=&z=14&ie=UTF8&iwloc=&output=embed" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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