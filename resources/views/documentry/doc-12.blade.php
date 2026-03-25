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

    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/documentary/doc-12/polonnaruwa-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Polonnaruwa Ancient City</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Polonnaruwa</li>
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
                                            <img src="{{ asset('assets/img/documentary/doc-12/pen_ash-elephant-4037429_1920.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Polonnaruwa Vatadage">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-12/pexels-chathura-anuradha-subasinghe-599124-13764958.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Gal Viharaya">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-12/pexels-punyabumi-12584869.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Rankoth Vehera">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-12/thanuja-ancient-192816_1280.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Royal Palace Ruins">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-12/unpd-polonnaruwa-3608331_1280.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Lankatilaka Viharaya">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="swiper th-slider tour-thumb-slider"
                                data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":2},"768":{"slidesPerView":3},"992":{"slidesPerView":3}}}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-12/pen_ash-elephant-4037429_1920.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-12/pexels-chathura-anuradha-subasinghe-599124-13764958.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-12/pexels-punyabumi-12584869.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-12/thanuja-ancient-192816_1280.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-12/unpd-polonnaruwa-3608331_1280.jpg') }}"
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
                                <a class="page-tag" href="#">UNESCO World Heritage</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-vihara"></i>
                                    <span>Ancient Kingdom</span>
                                </span>
                            </div>

                            <h2 class="box-title mb-20">
                                Polonnaruwa – The Glorious Medieval Capital
                            </h2>

                            <p class="box-text mb-30">
                                Also a UNESCO World Heritage Site, Polonnaruwa showcases the monumental ruins of Sri
                                Lanka's second ancient kingdom. Flourishing in the 11th and 12th centuries, it remains
                                one of the best-planned archaeological relic sites in the country.
                            </p>

                            <p class="box-text mb-40">
                                The city is renowned for its magnificent royal palaces, intricately carved stone
                                shrines, and the massive artificial lake, Parakrama Samudraya, built by King
                                Parakramabahu I.
                            </p>

                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Province</li>
                                        <li>Era</li>
                                        <li>Famous Landmarks</li>
                                        <li>Climate</li>
                                        <li>Activities</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>North Central Province</li>
                                        <li>11th - 13th Century</li>
                                        <li>Gal Viharaya, Vatadage</li>
                                        <li>Tropical, Warm & Dry</li>
                                        <li>Cycling Tours, Photography, History Walks</li>
                                    </ul>
                                </div>
                            </div>

                            <h3 class="box-title">Historical Landmarks</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li>Gal Viharaya (Spectacular rock-cut Buddha statues)</li>
                                    <li>The Sacred Quadrangle (Dalada Maluva)</li>
                                    <li>Royal Palace of King Parakramabahu</li>
                                    <li>Lankatilaka Viharaya</li>
                                    <li>Parakrama Samudraya (The Sea of Parakrama)</li>
                                </ul>
                            </div>

                            <h3 class="box-title">Visiting Polonnaruwa</h3>
                            <p class="box-text mb-50">
                                The ancient city of Polonnaruwa is relatively compact, making it a fantastic place to
                                explore by bicycle. Just like in Anuradhapura, make sure to wear comfortable, modest
                                clothing (preferably white) and easily removable footwear, as the stone paths at the
                                temples can get quite warm.
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
