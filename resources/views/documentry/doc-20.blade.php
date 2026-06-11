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

    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Arugam Bay Beach</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Arugam Bay Beach</li>
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
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-20/djordje-djordjevic-2DsY9_JfEfE-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Surfing at Main Point">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-20/emily-goodhart-Ffe6eAVn6ko-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Elephant Rock View">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-20/etienne-boulanger-5e2KVwyojpc-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Kumana National Park Safari">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-20/isuru-ranasinha-aksPgTprHlo-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Pottuvil Lagoon">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-20/junaideen-jr-YpBQ8TyCEyU-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Relaxing on A-Bay Beach">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="swiper th-slider tour-thumb-slider"
                                data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":2},"768":{"slidesPerView":3},"992":{"slidesPerView":3}}}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-20/djordje-djordjevic-2DsY9_JfEfE-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-20/emily-goodhart-Ffe6eAVn6ko-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-20/etienne-boulanger-5e2KVwyojpc-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-20/isuru-ranasinha-aksPgTprHlo-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-20/junaideen-jr-YpBQ8TyCEyU-unsplash.jpg') }}"
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
                                <a class="page-tag" href="#">Surfing & Wildlife</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-water"></i>
                                    <span>East Coast Paradise</span>
                                </span>
                            </div>

                            <h2 class="box-title mb-20">
                                Arugam Bay – The Ultimate Surfing Haven of the East
                            </h2>

                            <p class="box-text mb-30">
                                Located on the dry, sunny East Coast of Sri Lanka, Arugam Bay (affectionately known as
                                A-Bay) is world-renowned for its legendary surf breaks. With its bohemian atmosphere,
                                golden sands, and vibrant cafe culture, it has transformed into a premier destination
                                for surfers and backpackers globally.
                            </p>

                            <p class="box-text mb-40">
                                Beyond the spectacular waves at Main Point and Whisky Point, Arugam Bay offers an
                                incredible blend of nature and history. It is just a stone's throw away from ancient
                                temples hidden in the dunes and national parks teeming with wild elephants, leopards,
                                and exotic birds.
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
                                        <li>Eastern Province</li>
                                        <li>May to September (East Coast Season)</li>
                                        <li>World-class Surfing, Wildlife</li>
                                        <li>Tropical, Hot & Dry</li>
                                        <li>Surfing, Safari, Lagoon Boat Rides</li>
                                    </ul>
                                </div>
                            </div>

                            <h3 class="box-title">Highlights & Landmarks</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li>Main Point (The world-famous right-hand point break)</li>
                                    <li>Elephant Rock (A scenic surf spot and sunset viewpoint)</li>
                                    <li>Kumana National Park (Famous for incredible birdlife and leopard sightings)</li>
                                    <li>Muhudu Maha Viharaya (Ancient Buddhist temple by the sea)</li>
                                    <li>Pottuvil Lagoon (Mangrove boat safaris to spot crocodiles and elephants)</li>
                                </ul>
                            </div>

                            {{-- <h3 class="box-title">Visiting Arugam Bay</h3>
                            <p class="box-text mb-50">
                                The best time to hit the waves in Arugam Bay is during the European summer (May to September), when the rest of the island experiences the monsoon. The town consists essentially of one long road running parallel to the beach, filled with surf shops, reggae bars, and amazing seafood spots. Getting around is super easy-just strap your surfboard to the roof of a local tuk-tuk to explore the various breaks like Peanut Farm or Panama. Keep an eye out, as it’s not uncommon to see wild elephants crossing the roads just outside town!
                            </p> --}}

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
