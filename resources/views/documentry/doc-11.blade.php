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

    <div style="background-position: center;" class="breadcumb-wrapper"
        data-bg-src="{{ asset('assets/img/documentary/doc-11/chathura-anuradha-subasinghe-_M4yPHONK58-unsplash.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Anuradhapura </h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Anuradhapura</li>
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
                                            <img src="{{ asset('assets/img/documentary/doc-11/chathura-anuradha-subasinghe-9xxVQd9RBL4-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Ruwanwelisaya">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-11/ishan-kahapola-arachchi-fQe-2x2YflU-unsplash (1).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Jetavanaramaya Stupa">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-11/isuru-ranasinha-Dt1NksEP_yY-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Samadhi Buddha Statue">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-11/vlada-RYkcNq0XaVg-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Kuttam Pokuna Twin Ponds">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-11/yashi-el-odymE0EMV1M-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Abhayagiri Dagoba">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="swiper th-slider tour-thumb-slider"
                                data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":2},"768":{"slidesPerView":3},"992":{"slidesPerView":3}}}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-11/chathura-anuradha-subasinghe-9xxVQd9RBL4-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-11/ishan-kahapola-arachchi-fQe-2x2YflU-unsplash (1).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-11/isuru-ranasinha-Dt1NksEP_yY-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-11/vlada-RYkcNq0XaVg-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-11/yashi-el-odymE0EMV1M-unsplash.jpg') }}"
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
                                    <i class="fa-solid fa-dharmachakra"></i>
                                    <span>Ancient City</span>
                                </span>
                            </div>

                            <h2 class="box-title mb-20">
                                Anuradhapura – The Sacred Ancient Capital
                            </h2>

                            <!-- Intro -->
                            <p class="box-text mb-30">
                                Anuradhapura stands as a majestic testament to Sri Lanka's glorious ancient
                                civilization. Serving as the island's very first capital, established around the 4th
                                century BC, this sprawling UNESCO World Heritage Site is a living museum of profound
                                historical and spiritual magnitude. For over a millennium, it was the beating heart of
                                Sinhalese royal power and Buddhist culture before falling to foreign invasions and
                                eventually being swallowed by the dense jungle for centuries.
                            </p>

                            <p class="box-text mb-30">
                                Today, the sacred city is globally renowned for its impeccably preserved ruins, gigantic
                                stupas (dagobas) that once rivaled the pyramids of Egypt in sheer scale, and its deeply
                                rooted Buddhist heritage. Wandering through this vast complex, you will encounter
                                towering brick monuments, intricately carved moonstones, and the remnants of grand
                                monastic palaces that reflect the immense devotion and unparalleled architectural genius
                                of ancient Sri Lankan kings.
                            </p>

                            <p class="box-text mb-40">
                                Beyond its spiritual significance, Anuradhapura is an absolute marvel of ancient
                                engineering. The city is sustained by a vast, sophisticated network of man-made
                                reservoirs (wewas) and advanced irrigation canals built over two thousand years ago.
                                Astonishingly, these ancient waterways still function today, providing life to the
                                surrounding farmlands and maintaining the serene, lush environment that makes exploring
                                this ancient capital such a deeply moving and fascinating experience.
                            </p>

                            <!-- Key Facts -->
                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Province</li>
                                        <li>Established</li>
                                        <li>Famous Landmarks</li>
                                        <li>Climate</li>
                                        <li>Activities</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>North Central Province</li>
                                        <li>377 BC</li>
                                        <li>Ruwanwelisaya, Sri Maha Bodhi</li>
                                        <li>Tropical, Warm & Dry</li>
                                        <li>Historical Tours, Pilgrimage, Cycling</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Historical & Sacred Sites -->
                            <h3 class="box-title">Historical & Sacred Sites</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li><strong>Jaya Sri Maha Bodhi:</strong> The sacred fig tree grown from a southern
                                        branch of the original Bodhi tree under which Lord Buddha attained
                                        enlightenment. It is the oldest historically documented, human-planted tree in
                                        the world.</li>
                                    <li><strong>Ruwanwelisaya Stupa:</strong> A colossal, brilliant white hemispherical
                                        dome built by King Dutugemunu, serving as one of the most venerated and
                                        architecturally stunning Buddhist monuments on earth.</li>
                                    <li><strong>Jetavanaramaya & Abhayagiri Dagoba:</strong> Towering ancient brick
                                        structures that were once among the absolute tallest structures in the ancient
                                        world, representing the heights of ancient Sinhalese engineering.</li>
                                    <li><strong>Isurumuniya Rock Temple:</strong> A beautiful, rock-hewn temple famous
                                        for its intricate, masterful ancient stone carvings, particularly the
                                        world-renowned "Isurumuniya Lovers."</li>
                                    <li><strong>Twin Ponds (Kuttam Pokuna):</strong> Exquisitely designed ancient
                                        bathing pools for monks, showcasing incredibly advanced hydrological engineering
                                        and stunning granite architecture.</li>
                                </ul>
                            </div>

                            <!-- Visiting -->
                            {{-- <h3 class="box-title">Visiting Anuradhapura</h3>
                        <p class="box-text mb-30">
                            Exploring the vast, sprawling ruins of Anuradhapura is best done by renting a bicycle or hiring a local Tuk-Tuk, as the sacred sites are spread across a massive geographical area. The tropical climate here is famously warm and dry, so early morning or late afternoon visits are highly recommended to avoid the punishing midday heat. 
                        </p> --}}

                            <p class="box-text mb-50">
                                Because this is a highly venerated, active pilgrimage destination, strict dress codes
                                apply. Visitors must wear modest clothing that fully covers their shoulders and knees.
                                Wearing all-white attire is customary and deeply appreciated by the locals. You must
                                remove your shoes and hats before entering the sandy courtyards of the sacred shrines,
                                so bringing a pair of thick, dark socks is a fantastic idea to protect your feet from
                                the scorching hot stone pathways during the day.
                            </p>

                            <!-- Map -->
                            <h3 class="box-title">Location Map</h3>
                            <div class="mb-10">
                                <div class="ratio ratio-16x9 rounded overflow-hidden">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126442.23847936162!2d80.32420455!3d8.33498875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afc89c313a2a683%3A0x6a15777a82c4bd88!2sAnuradhapura!5e0!3m2!1sen!2slk!4v1700000000000!5m2!1sen!2slk"
                                        style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
