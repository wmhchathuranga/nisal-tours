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
                                Kataragama – The Divine abode of the South
                            </h2>

                            <p class="box-text mb-30">
                                Situated in the southern part of Sri Lanka, Kataragama is a sacred city worshipped by Buddhists, Hindus, Muslims, and the indigenous Vedda people. It is dedicated to the deity Kataragama Deviyo (Skanda Kumara), and stands as a powerful symbol of religious harmony in the island.
                            </p>

                            <p class="box-text mb-40">
                                The temple complex is a vibrant hub of devotion, especially during the annual Esala Festival. Pilgrims flock here to partake in pujas, fulfill vows, witness traditional fire-walking, and bathe in the sacred waters of the Menik Ganga (Manik Ganga) which flows beside the shrines.
                            </p>

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
                                        <li>Tropical, Warm & Dry (Semi-arid)</li>
                                        <li>Pilgrimage, Puja Offerings, Fire-walking</li>
                                    </ul>
                                </div>
                            </div>

                            <h3 class="box-title">Highlights & Landmarks</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li>Ruhunu Maha Kataragama Devalaya (The Main Shrine)</li>
                                    <li>Kirivehera Stupa (Ancient Buddhist Stupa)</li>
                                    <li>Menik Ganga (The sacred river for ritual baths)</li>
                                    <li>Sella Kataragama (Dedicated to God Ganesha)</li>
                                    <li>Valli Amma Devalaya</li>
                                    <li>Kataragama Mosque (Ul-Khizr Mosque)</li>
                                </ul>
                            </div>

                            <h3 class="box-title">Visiting Kataragama</h3>
                            <p class="box-text mb-50">
                                When visiting Kataragama, it is customary to bathe in the Menik Ganga before entering the main temple complex to purify oneself. As this is a highly revered sacred site, visitors are required to wear modest clothing (preferably white) covering shoulders and knees. Shoes must be removed before entering the shrine areas. Puja trays with fruits and flowers are available outside for offerings. During festival times, the city can be extremely crowded.
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