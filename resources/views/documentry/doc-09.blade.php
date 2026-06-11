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

    <!--==============================
Breadcumb
==============================-->
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/wp4645067-colombo-wallpapers.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Colombo – The Vibrant Capital</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Colombo</li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
Documentary Details Area
==============================-->
    <section class="space">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-xl-10">
                    <div class="tour-page-single">

                        <!-- Documentary Slider -->
                        <div class="slider-area tour-slider1 mb-40">
                            <div class="swiper th-slider mb-4" id="tourSlider12"
                                data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-09/colombo-2.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-09/Gangaramaya_Temple_6b78a7f138.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-09/colombo.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-09/pexels-thilina-alagiyawanna-3266092-23234938.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-09/pexels-thilina-alagiyawanna-3266092-32451023.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Thumbnails -->
                            <div class="swiper th-slider tour-thumb-slider"
                                data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":2},"768":{"slidesPerView":3},"992":{"slidesPerView":3}}}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-09/colombo-2.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-09/Gangaramaya_Temple_6b78a7f138.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-09/colombo.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-09/pexels-thilina-alagiyawanna-3266092-23234938.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-09/pexels-thilina-alagiyawanna-3266092-32451023.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Arrows -->
                            <button data-slider-prev="#tourSlider12" class="slider-arrow style3 slider-prev">
                                <img src="assets/img/icon/hero-arrow-left.svg" alt="">
                            </button>

                            <button data-slider-next="#tourSlider12" class="slider-arrow style3 slider-next">
                                <img src="assets/img/icon/hero-arrow-right.svg" alt="">
                            </button>
                        </div>

                        <!-- Content -->
                        <div class="page-content">

                            <!-- Meta -->
                            <div class="page-meta mb-30">
                                <a class="page-tag" href="#">Capital City</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-city"></i>
                                    <span>Urban & Heritage</span>
                                </span>
                            </div>

                            <!-- Title -->
                            <h2 class="box-title mb-20">
                                Colombo – The Commercial Capital of Sri Lanka
                            </h2>

                            <!-- Intro -->
                            <p class="box-text mb-30">
                                Colombo is the pulsing heart of Sri Lanka, a city where the echoes of colonial history
                                seamlessly blend with the fast-paced energy of a modern metropolis. As the commercial
                                capital, it is a fascinating tapestry of cultures, religions, and architectural styles,
                                featuring everything from grand 19th-century colonial buildings and serene Buddhist
                                temples to glittering high-rise glass skyscrapers and chaotic, vibrant street markets.
                            </p>

                            <p class="box-text mb-40">
                                The city offers a unique experience that feels both familiar and exotic. Whether you are
                                walking along the windy Galle Face Green during sunset, exploring the narrow, packed
                                streets of Pettah, or dining in a chic rooftop restaurant overlooking the Indian Ocean,
                                Colombo represents the dynamic, evolving spirit of modern Sri Lanka.
                            </p>

                            <!-- Key Facts -->
                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Province</li>
                                        <li>Population</li>
                                        <li>Main Attractions</li>
                                        <li>Climate</li>
                                        <li>Activities</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>Western Province</li>
                                        <li>Over 5 Million (Metro area)</li>
                                        <li>Galle Face, Lotus Tower, Gangaramaya</li>
                                        <li>Tropical (Warm & Humid)</li>
                                        <li>Sightseeing, Shopping, Dining, Nightlife</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Attractions -->
                            <h3 class="box-title">Top Attractions</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li><strong>Galle Face Green:</strong> The city's famous oceanside urban park, a
                                        social hub for street food lovers, kite flyers, and evening strollers.</li>
                                    <li><strong>Gangaramaya Temple:</strong> An iconic, architecturally eclectic temple
                                        filled with thousands of statues and relics, blending Sri Lankan, Thai, and
                                        Chinese styles.</li>
                                    <li><strong>Pettah Market:</strong> A bustling, sensory-overload labyrinth of
                                        streets where you can find absolutely anything, from fresh spices and textiles
                                        to electronics.</li>
                                    <li><strong>Lotus Tower:</strong> South Asia's tallest tower, offering breathtaking,
                                        futuristic panoramic views of the entire city skyline and the ocean.</li>
                                    <li><strong>Independence Memorial Hall:</strong> A stunning, grand open-air monument
                                        built to commemorate Sri Lanka's independence from British rule.</li>
                                </ul>
                            </div>

                            <!-- Visiting -->
                            {{-- <h3 class="box-title">Visiting Colombo</h3>
                        <p class="box-text mb-50">
                            Colombo is a vibrant, year-round destination. For the best experience, try to explore the city in the early mornings or late afternoons to avoid the peak tropical heat. Whether it's shopping for authentic souvenirs at Barefoot, exploring the city’s colonial history on a walking tour, or enjoying the world-class nightlife and diverse international cuisine, Colombo is the perfect starting or ending point for any Sri Lankan journey.
                        </p> --}}

                            <!-- Map -->
                            <h3 class="box-title">Location Map</h3>
                            <div class="mb-10">
                                <div class="ratio ratio-16x9 rounded overflow-hidden">
                                    <iframe src="https://www.google.com/maps?q=Colombo+Sri+Lanka&output=embed"
                                        style="border:0;" allowfullscreen loading="lazy">
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
