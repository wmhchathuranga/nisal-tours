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

    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/documentary/doc-13/ajai-s-m2dn48-TLAw-unsplash.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Horton Plains</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Horton Plains</li>
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
                                            <img src="{{ asset('assets/img/documentary/doc-14/ajai-s-nCsyGOSclNU-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Trekking Trail to World's End">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/eshan-malaviarachchi-Z3XO2B2Db7Q-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Baker's Falls Pathway">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/nawartha-nirmal-AzmbS0KNgQ8-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Montane Cloud Forest">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/nilantha-sanjeewa-hhr4Xkl5tQQ-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sambar Deer Grazing">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/shavin-peiries-zNGqymM2TnY-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Panoramic Viewpoint">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="swiper th-slider tour-thumb-slider"
                                data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":2},"768":{"slidesPerView":3},"992":{"slidesPerView":3}}}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/ajai-s-m2dn48-TLAw-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/ajai-s-nCsyGOSclNU-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/eshan-malaviarachchi-Z3XO2B2Db7Q-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/nawartha-nirmal-AzmbS0KNgQ8-unsplash.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-14/sithula-hirudaya-ktMbEL0lRQ8-unsplash.jpg') }}"
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
                                <a class="page-tag" href="#">UNESCO World Heritage Site</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-mountain"></i>
                                    <span>Highland Plateau</span>
                                </span>
                            </div>

                            <h2 class="box-title mb-20">
                                Horton Plains – The Mist-Shrouded Plateau
                            </h2>

                            <p class="box-text mb-30">
                                A key component of Sri Lanka's Central Highlands UNESCO World Heritage Site, Horton Plains National Park is a windswept plateau recognized for its unique montane grasslands and cloud forests. Situated at an elevation of over 2,100 meters, it offers a stark, cold, and misty contrast to the tropical lowlands.
                            </p>

                            <p class="box-text mb-40">
                                This sensitive ecosystem is the birthplace of major Sri Lankan rivers and is renowned for its dramatic landscape, particularly the iconic vertical precipice known as World’s End, and the majestic cascades of Baker's Falls.
                            </p>

                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Province</li>
                                        <li>Ecosystem</li>
                                        <li>Famous Landmarks</li>
                                        <li>Climate</li>
                                        <li>Activities</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>Central Province</li>
                                        <li>Montane Cloud Forest & Grassland</li>
                                        <li>World's End, Baker's Falls</li>
                                        <li>Cool, Misty & Windy</li>
                                        <li>Trekking, Photography, Birdwatching</li>
                                    </ul>
                                </div>
                            </div>

                            <h3 class="box-title">Highland Highlights</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li>World's End (Great & Mini) – Drop of nearly 900 meters</li>
                                    <li>Baker’s Falls – Scenic waterfall named after Sir Samuel Baker</li>
                                    <li>Patna Grasslands (Wet Patna) – Rolling open fields</li>
                                    <li>Montane Cloud Forest – Unique Dwarfed Trees and Lichens</li>
                                    <li>Chimney Pool and River Catchment Areas</li>
                                </ul>
                            </div>

                            <h3 class="box-title">Visiting Horton Plains</h3>
                            <p class="box-text mb-50">
                                Exploring Horton Plains involves a circular trekking trail of approximately 9 kilometers, which visitors can navigate on foot. Due to early morning mist that often obscures the panoramic views at World’s End, it is highly recommended to start the hike early (around 6:00 AM). Visitors must bring warm clothing as the plateau gets significantly cold before sunrise. Plastic materials are strictly prohibited inside the park to protect this sensitive biodiversity hotspot.
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