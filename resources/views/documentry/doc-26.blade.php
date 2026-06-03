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
                            <div class="swiper th-slider mb-4" id="tourSlider13"
                                data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/aluwihare/caption (1).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Leopard resting on a tree in Yala">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/aluwihare/caption (2).jpg') }}')"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Wild Elephants roaming">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/aluwihare/caption (3).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Jeep Safari">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/aluwihare/caption (4).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sloth Bear sighting in the wild">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/aluwihare/caption (5).jpg') }}"
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
                            <a class="page-tag" href="#">Adventure & Nature</a>
                            <span class="ratting">
                                <i class="fa-solid fa-person-hiking"></i>
                                <span>Trekking Paradise</span>
                            </span>
                        </div>

                        <h2 class="box-title mb-20">Ella Rock – The Ultimate Hill Country Hike</h2>

                        <!-- Intro -->
                        <p class="box-text mb-30">
                            Towering high above the misty Ella valley, Ella Rock is one of the most iconic and sought-after hiking destinations in Sri Lanka. This hike is not just a walk; it is a full-body adventure that takes you through the very soul of the hill country. You'll traverse along the historic, active railway lines, wander through vibrant, emerald-green tea plantations, and trek through ancient rubber-tree forests before finally emerging onto a dramatic, sheer cliff edge that offers a view like nowhere else on the island.
                        </p>

                        <p class="box-text mb-40">
                            The hike is known for its rugged charm and the satisfying sense of accomplishment you feel when reaching the summit. From the top, you are rewarded with a dizzying, panoramic view of the Ella Gap, Little Adam’s Peak, and the vast, rolling mountains that seem to go on forever. It is a must-do for any traveler who loves a good challenge and breathtaking scenery.
                        </p>

                        <!-- Key Facts -->
                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Location</li>
                                    <li>Duration of Hike</li>
                                    <li>Difficulty Level</li>
                                    <li>Best Time to Start</li>
                                    <li>Start Point</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>Ella, Uva Province</li>
                                    <li>2 - 4 Hours (Round trip)</li>
                                    <li>Moderate to Challenging</li>
                                    <li>Early Morning (6:00 AM)</li>
                                    <li>Ella Railway Station</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Highlights -->
                        <h3 class="box-title">Highlights & Trek Details</h3>
                        <div class="checklist mb-50">
                            <ul>
                                <li><strong>The Railway Walk:</strong> A unique experience walking along the open, active railway tracks that snake through the mountainside.</li>
                                <li><strong>Tea Estate Trails:</strong> Wind through working tea plantations where you can see tea pluckers at work amidst the rolling green hills.</li>
                                <li><strong>The Summit View:</strong> The dramatic drop at the cliff edge offers an unmatchable perspective of the Ella Gap and the surrounding valleys.</li>
                                <li><strong>Forest Trekking:</strong> Navigate through thick, shaded forest paths that feel like a journey into the wild heart of the hill country.</li>
                                <li><strong>Little Adam's Peak Vista:</strong> From the top of Ella Rock, you can easily spot Little Adam's Peak on the opposite side of the valley.</li>
                            </ul>
                        </div>

                        <!-- Visiting Info -->
                        {{-- <h3 class="box-title">Visiting & Practical Info</h3>
                        <p class="box-text mb-30">
                            Starting your hike early in the morning is absolutely critical. Not only does it help you avoid the intense midday sun and the heat that makes the steep climb much harder, but you are also much more likely to catch clear, mist-free views from the summit before the afternoon clouds roll in. 
                        </p>

                        <p class="box-text mb-50">
                            The trail can be tricky to navigate as there are several turn-offs, particularly near the railway line and the forest entrance. If you are not confident in your sense of direction, hiring a local guide is a smart and highly recommended option; they know the path perfectly and can show you shortcuts and safer routes. Wear sturdy hiking shoes with a good grip, carry plenty of water, and apply mosquito repellent, as the forested parts of the trek can be quite humid.
                        </p> --}}

                        <!-- Location Map -->
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