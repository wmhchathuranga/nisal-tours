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

<div class="breadcumb-wrapper" data-bg-src="https://images.unsplash.com/photo-1579621970221-a4773d5ff3a3?auto=format&fit=crop&w=1920&q=80">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Piduruthalagala</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Piduruthalagala</li>
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
                                        <img src="https://images.unsplash.com/photo-1579621970221-a4773d5ff3a3?auto=format&fit=crop&w=1200&q=80" style="width:100%;height:100%;object-fit:cover;" alt="Piduruthalagala">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="page-content">
                        <div class="page-meta mb-30">
                            <a class="page-tag" href="#">Nature & Wildlife</a>
                            <span class="ratting">
                                <i class="fa-solid fa-mountain-sun"></i>
                                <span>Highest Peak</span>
                            </span>
                        </div>

                        <h2 class="box-title mb-20">Piduruthalagala – The Summit of Sri Lanka</h2>

                        <p class="box-text mb-30">
                            Piduruthalagala, also known as Mount Pedro, is the highest mountain in Sri Lanka, standing at 2,524 meters. Located near Nuwara Eliya, it is a high-security zone due to the communications array at its peak, but visitors are allowed to drive up to the summit to enjoy the misty, freezing climate and breathtaking views.
                        </p>

                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Location</li>
                                    <li>Elevation</li>
                                    <li>Access</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>Nuwara Eliya</li>
                                    <li>2,524 m (8,281 ft)</li>
                                    <li>By Vehicle Only (Security cleared)</li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="box-title">Location Map</h3>
                        <div class="ratio ratio-16x9 rounded overflow-hidden">
                            <iframe src="https://maps.google.com/maps?q=Piduruthalagala&t=&z=13&ie=UTF8&iwloc=&output=embed" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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