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

    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/documentary/doc-16/707036004.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Kataragama Holy City</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Kataragama</li>
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
                                            <img src="{{ asset('assets/img/documentary/doc-16/kataragama-esala-festival.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Kataragama Temple Complex">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-16/kataragama-tour-sri-lanka.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Main Devalaya Entrance">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-16/Kataragama.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Kirivehera Stupa View">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-16/LK94009382-01-E.JPG') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Devotees at Kataragama">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-16/medium-vecteezy_huge-red-hanuman-statue-in-temple-complex-india_73947765_medium.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Menik Ganga">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="swiper th-slider tour-thumb-slider"
                                data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":2},"768":{"slidesPerView":3},"992":{"slidesPerView":3}}}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-16/kataragama-esala-festival.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-16/kataragama-tour-sri-lanka.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-16/Kataragama.jpg') }}"
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
                            <a class="page-tag" href="#">Sacred Pilgrimage Site</a>
                            <span class="ratting">
                                <i class="fa-solid fa-place-of-worship"></i>
                                <span>Holy City for Multi-faiths</span>
                            </span>
                        </div>

                        <h2 class="box-title mb-20">
                            Kataragama – The Divine Abode of the South
                        </h2>

                        <!-- Intro -->
                        <p class="box-text mb-30">
                            Situated in the deep south of Sri Lanka, Kataragama is one of the island's most profoundly sacred cities. It is a unique place of devotion, where Buddhists, Hindus, Muslims, and the indigenous Vedda people come together in a shared spirit of reverence. Dedicated primarily to the deity Kataragama Deviyo (also known as Skanda Kumara or Murugan), the city stands as a powerful, living symbol of Sri Lanka's long-standing tradition of religious harmony and spiritual tolerance.
                        </p>

                        <p class="box-text mb-40">
                            The temple complex is a pulsating hub of ancient rituals, especially during the annual Esala Festival, when the city comes alive with thousands of pilgrims, traditional drummers, and dancers. Devotees travel from every corner of the country to partake in morning and evening *pujas*, fulfill long-held vows, witness the intense and spiritual fire-walking ceremonies, and bathe in the purifying, sacred waters of the Menik Ganga (Manik Ganga) that flows peacefully beside the shrines.
                        </p>

                        <!-- Key Facts -->
                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Province</li>
                                    <li>Major Deity</li>
                                    <li>Significance</li>
                                    <li>Climate</li>
                                    <li>Activities</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>Uva Province</li>
                                    <li>God Kataragama (Skanda Kumara)</li>
                                    <li>Multi-religious worship centre</li>
                                    <li>Tropical, Warm & Dry</li>
                                    <li>Pilgrimage, Puja, Fire-walking</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Highlights -->
                        <h3 class="box-title">Highlights & Landmarks</h3>
                        <div class="checklist mb-50">
                            <ul>
                                <li><strong>Ruhunu Maha Kataragama Devalaya:</strong> The main, ancient shrine complex dedicated to the deity, where daily rituals and offerings take place.</li>
                                <li><strong>Kirivehera Stupa:</strong> A grand, historic Buddhist stupa that stands as a silent sentinel of peace overlooking the entire sacred complex.</li>
                                <li><strong>Menik Ganga:</strong> The sacred "Gem River," where pilgrims perform ritual baths to purify their mind and body before entering the temple.</li>
                                <li><strong>Sella Kataragama:</strong> A smaller, quieter shrine dedicated to God Ganesha, located a few kilometers away, often visited first by devotees.</li>
                                <li><strong>Kataragama Mosque:</strong> A beautiful and historic mosque that highlights the city's incredible multi-faith fabric and welcoming atmosphere.</li>
                            </ul>
                        </div>

                        <!-- Visiting -->
                        <h3 class="box-title">Visiting Kataragama</h3>
                        <p class="box-text mb-50">
                            When visiting Kataragama, it is customary to bathe in the Menik Ganga to purify oneself before entering the main temple complex. As this is a highly revered sacred site, visitors are required to dress modestly-shoulders and knees must be covered, and white clothing is traditionally preferred. Please ensure you remove your shoes before entering any shrine area. Small stalls outside the complex sell beautifully arranged *puja* trays with fruits and flowers for offerings. Be prepared for a deep spiritual atmosphere, and if visiting during the Esala festival, expect the city to be packed with thousands of devout pilgrims.
                        </p>

                        <!-- Map -->
                        <h3 class="box-title">Location Map</h3>
                        <div class="mb-10">
                            <div class="ratio ratio-16x9 rounded overflow-hidden">
                                <iframe
                                    src="https://www.google.com/maps?q=Kataragama+Sri+Lanka&output=embed"
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