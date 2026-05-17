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

<div class="breadcumb-wrapper" data-bg-src="https://images.unsplash.com/photo-1590523741831-ab7e8b8f9c7f?auto=format&fit=crop&w=1920&q=80">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Pigeon Island</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Pigeon Island</li>
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
                                        <img src="https://images.unsplash.com/photo-1590523741831-ab7e8b8f9c7f?auto=format&fit=crop&w=1200&q=80" style="width:100%;height:100%;object-fit:cover;" alt="Pigeon Island">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="page-content">
                        <div class="page-meta mb-30">
                            <a class="page-tag" href="#">Marine National Park</a>
                            <span class="ratting">
                                <i class="fa-solid fa-umbrella-beach"></i>
                                <span>Island Escape</span>
                            </span>
                        </div>

                        <h2 class="box-title mb-20">Pigeon Island – A Snorkeler’s Paradise on the East Coast</h2>

                        <p class="box-text mb-30">
                            A short boat ride away from Nilaveli Beach in Trincomalee lies Pigeon Island National Park. Famous for its powdery white sands and exceptionally clear waters, it is one of the only places in the country where you can effortlessly snorkel alongside blacktip reef sharks and sea turtles.
                        </p>

                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Location</li>
                                    <li>Wildlife Highlights</li>
                                    <li>Access</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>Off the coast of Nilaveli, Trincomalee</li>
                                    <li>Blacktip Reef Sharks, Green Turtles</li>
                                    <li>15-Minute Boat Ride from Nilaveli</li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="box-title">Location Map</h3>
                        <div class="ratio ratio-16x9 rounded overflow-hidden">
                            <iframe src="https://maps.google.com/maps?q=Pidurangala%20Rock&t=&z=15&ie=UTF8&iwloc=&output=embed7" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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