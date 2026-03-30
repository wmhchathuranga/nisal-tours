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
                <h1 class="breadcumb-title">Wilpattu National Park</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Wilpattu National Park</li>
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
                                                alt="Leopard resting in Wilpattu">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/egle-sidaraviciute-pv-2hRmoJRU-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Sloth bear at Wilpattu National Park">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/hashan-dharmarathna-il7CUBPzCR0-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Jeep safari near a Villu">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/joost-broeker-ag0s4Ft8YpM-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Barking deer in the dense forest">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/oliver-frsh-IahPBkd8W5M-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Flock of birds at Wilpattu">
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
                                <a class="page-tag" href="#">Wildlife Safari</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-leaf"></i>
                                    <span>Unique Villu Ecosystem</span>
                                </span>
                            </div>

                            <h2 class="box-title mb-20">
                                Wilpattu National Park – The Land of Lakes
                            </h2>

                            <p class="box-text mb-30">
                                Located on the northwest coast of Sri Lanka, Wilpattu National Park is the largest and one of the oldest national parks in the country. It is uniquely characterized by its "Villus" (natural, sand-rimmed water basins or lakes) that fill with rainwater and attract an abundance of wildlife.
                            </p>

                            <p class="box-text mb-40">
                                Unlike the crowded parks in the south, Wilpattu offers a deeply serene and dense jungle experience. It is famous for its thriving populations of Sri Lankan leopards, sloth bears, Asian elephants, and spotted deer, providing an authentic and untamed wildlife adventure for true nature lovers.
                            </p>

                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Province</li>
                                        <li>Best Time to Visit</li>
                                        <li>Famous For</li>
                                        <li>Climate</li>
                                        <li>Activities</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>North Western & North Central Provinces</li>
                                        <li>February to October</li>
                                        <li>Leopards, Sloth Bears, Villus (Lakes)</li>
                                        <li>Tropical, Warm & Humid</li>
                                        <li>Jeep Safaris, Wildlife Photography, Bird Watching</li>
                                    </ul>
                                </div>
                            </div>

                            <h3 class="box-title">Highlights & Landmarks</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li>The Unique "Villus" (Natural lakes attracting diverse wildlife)</li>
                                    <li>Kudiramalai Point (Historical red cliff area where King Vijaya reportedly landed)</li>
                                    <li>High chance of spotting elusive Leopards and Sloth Bears in their natural habitat</li>
                                    <li>Dense, ancient forest cover offering a true wilderness feel</li>
                                    <li>Rich birdlife including endemic and migratory species</li>
                                </ul>
                            </div>

                            <h3 class="box-title">Visiting Wilpattu</h3>
                            <p class="box-text mb-50">
                                Wilpattu is generally less crowded than Yala, meaning you can enjoy wildlife sightings without dozens of other jeeps blocking the view. The park is vast, so a full-day safari is highly recommended to reach the deeper Villus where wildlife congregates. The terrain features dense forest cover, making sightings a bit more challenging but highly rewarding. Bring a good zoom lens for photography, wear dull-colored clothes, and pack plenty of water and snacks for the long ride!
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