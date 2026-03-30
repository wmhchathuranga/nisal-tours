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

    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/documentary/doc-14/anil-reddy-r-vUs1jhhLA-unsplash.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Pidurangala Rock</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Pidurangala Rock</li>
                </ul>
            </div>
        </div>
    </div>
    {{-- hello --}}

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
                                            <img src="{{ asset('assets/img/documentary/doc-14/egle-sidaraviciute-7AHS4Zpuilg-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Pidurangala Temple">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/egle-sidaraviciute-pv-2hRmoJRU-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Reclining Buddha Statue">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/hashan-dharmarathna-il7CUBPzCR0-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Pidurangala Hike Trail">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/joost-broeker-ag0s4Ft8YpM-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="View of Sigiriya">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/oliver-frsh-IahPBkd8W5M-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Pidurangala Summit">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="swiper th-slider tour-thumb-slider"
                                data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":2},"768":{"slidesPerView":3},"992":{"slidesPerView":3}}}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/anil-reddy-r-vUs1jhhLA-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/egle-sidaraviciute-7AHS4Zpuilg-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/hashan-dharmarathna-il7CUBPzCR0-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/joost-broeker-ag0s4Ft8YpM-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/oliver-frsh-IahPBkd8W5M-unsplash.jpg') }}"
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
                                <a class="page-tag" href="#">Hiking & Nature</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-mountain-sun"></i>
                                    <span>Scenic Viewpoint</span>
                                </span>
                            </div>

                            <h2 class="box-title mb-20">
                                Pidurangala Rock – The Ultimate Panoramic View
                            </h2>

                            <p class="box-text mb-30">
                                Located just a few kilometers north of the famous Sigiriya, Pidurangala is a massive rock formation offering an adventurous hike and an unparalleled 360-degree view of the surrounding valleys and the iconic Lion Rock itself.
                            </p>

                            <p class="box-text mb-40">
                                The rock has a rich history, having been occupied by meditating monks for over 2,500 years. It features an ancient cave temple with a prominent reclining Buddha statue built out of brick and clay.
                            </p>

                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Province</li>
                                        <li>Difficulty</li>
                                        <li>Best Time to Visit</li>
                                        <li>Climate</li>
                                        <li>Activities</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>Central Province</li>
                                        <li>Moderate Hike (Boulder crawling at the top)</li>
                                        <li>Sunrise or Sunset</li>
                                        <li>Tropical, Warm & Breezy</li>
                                        <li>Hiking, Photography, Sightseeing</li>
                                    </ul>
                                </div>
                            </div>

                            <h3 class="box-title">Highlights & Landmarks</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li>Pidurangala Viharaya (Ancient White Cave Temple at the base)</li>
                                    <li>12.5-meter Brick Reclining Buddha Statue</li>
                                    <li>The Boulder Crawl (An adventurous final climb to the summit)</li>
                                    <li>360-Degree Summit View</li>
                                    <li>The absolute best vantage point to photograph Sigiriya Lion Rock</li>
                                </ul>
                            </div>

                            <h3 class="box-title">Visiting Pidurangala</h3>
                            <p class="box-text mb-50">
                                The hike takes about 30 to 45 minutes depending on your pace. Since the trail begins by passing through a sacred Buddhist temple, you must cover your shoulders and knees at the entrance (sarongs are usually available to borrow). Be prepared for a bit of rock scrambling near the summit, and don't forget to bring plenty of water!
                            </p>

                            <h3 class="box-title">Location Map</h3>
                            <div class="mb-10">
                                <div class="ratio ratio-16x9 rounded overflow-hidden">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126442.23847936162!2d80.32420455!3d7.93965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afd16fbc1e4d6f5%3A0x7f6c7e8a7c5e3b0!2sPolonnaruwa!5e0!3m2!1sen!2slk!4v1700000000000!5m2!1sen!2slk"
                                        style="border:0;" allowfullscreen="" loading="lazy">
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