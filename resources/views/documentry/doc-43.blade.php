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

<div class="breadcumb-wrapper" data-bg-src="https://images.unsplash.com/photo-1530866495561-507c9faab2ed?auto=format&fit=crop&w=1920&q=80">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">White Water Rafting</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Water Rafting</li>
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
                                        <img src="https://images.unsplash.com/photo-1530866495561-507c9faab2ed?auto=format&fit=crop&w=1200&q=80" style="width:100%;height:100%;object-fit:cover;" alt="White Water Rafting">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="page-content">
                        <div class="page-meta mb-30">
                            <a class="page-tag" href="#">Adventure & Sports</a>
                            <span class="ratting">
                                <i class="fa-solid fa-water"></i>
                                <span>Extreme Activity</span>
                            </span>
                        </div>

                        <h2 class="box-title mb-20">Water Rafting – Ride the Rapids of the Kelani River</h2>

                        <p class="box-text mb-30">
                            Get your adrenaline pumping with a thrilling white-water rafting experience in Kitulgala. Navigating the rocky rapids of the beautiful Kelani River, this adventure is perfect for both beginners and seasoned thrill-seekers, surrounded by dense tropical rainforest.
                        </p>

                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Location</li>
                                    <li>Difficulty Level</li>
                                    <li>Distance</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>Kitulgala, Sabaragamuwa Province</li>
                                    <li>Beginner to Intermediate</li>
                                    <li>Approximately 5 km stretch</li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="box-title">Location Map</h3>
                        <div class="ratio ratio-16x9 rounded overflow-hidden">
                            <iframe src="https://maps.google.com/maps?q=Pidurangala%20Rock&t=&z=15&ie=UTF8&iwloc=&output=embed2" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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