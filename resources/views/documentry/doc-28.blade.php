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

<div class="breadcumb-wrapper" data-bg-src="https://images.unsplash.com/photo-1599827361661-0df8e7e1a384?auto=format&fit=crop&w=1920&q=80">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Ravana Cave</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Ravana Cave</li>
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
                                        <img src="https://images.unsplash.com/photo-1599827361661-0df8e7e1a384?auto=format&fit=crop&w=1200&q=80" style="width:100%;height:100%;object-fit:cover;" alt="Ravana Cave">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="page-content">
                        <div class="page-meta mb-30">
                            <a class="page-tag" href="#">Historical Myth</a>
                            <span class="ratting">
                                <i class="fa-solid fa-dungeon"></i>
                                <span>Cave Exploration</span>
                            </span>
                        </div>

                        <h2 class="box-title mb-20">Ravana Cave – Stepping into the Legends of the Ramayana</h2>

                        <p class="box-text mb-30">
                            Located deep within the lush hills of Ella, the Ravana Cave is steeped in the ancient Indian epic, the Ramayana. According to legend, this is one of the places where King Ravana hid Princess Sita after abducting her from India.
                        </p>

                        <h3 class="box-title">Location Map</h3>
                        <div class="ratio ratio-16x9 rounded overflow-hidden">
                            <iframe src="https://maps.google.com/maps?q=Ravana+Cave+Ella&t=&z=14&ie=UTF8&iwloc=&output=embed" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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