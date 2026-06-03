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

                        <!-- Meta -->
                        <div class="page-meta mb-30">
                            <a class="page-tag" href="#">UNESCO World Heritage Site</a>
                            <span class="ratting">
                                <i class="fa-solid fa-mountain"></i>
                                <span>Highland Plateau</span>
                            </span>
                        </div>

                        <!-- Title -->
                        <h2 class="box-title mb-20">
                            Horton Plains – The Mist-Shrouded Plateau
                        </h2>

                        <!-- Intro -->
                        <p class="box-text mb-30">
                            Horton Plains National Park is a key component of Sri Lanka's Central Highlands UNESCO World Heritage Site. It is a windswept, ethereal plateau recognized for its rare montane grasslands and ancient cloud forests. Situated at an elevation of over 2,100 meters, the park offers a stark, cold, and mystical contrast to the tropical warmth of the lowlands, often shrouded in a thick, magical blanket of rolling mist.
                        </p>

                        <p class="box-text mb-40">
                            This incredibly sensitive and protected ecosystem acts as the "water tower" of the island, serving as the birthplace for many of Sri Lanka's major rivers. The landscape here is dramatic and sweeping-ranging from vast, undulating fields of yellow-gold grass to gnarled, dwarfed trees covered in hanging lichen. It is a legendary destination for trekkers who seek the breathtaking, dizzying heights of World's End and the raw, natural power of Baker's Falls.
                        </p>

                        <!-- Key Facts -->
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

                        <!-- Highlights -->
                        <h3 class="box-title">Highland Highlights</h3>
                        <div class="checklist mb-50">
                            <ul>
                                <li><strong>World's End:</strong> The park’s most iconic feature-a sheer vertical drop of nearly 900 meters offering dizzying, panoramic views of the tea estates and coastal lowlands below.</li>
                                <li><strong>Baker’s Falls:</strong> A breathtaking, wide cascade named after Sir Samuel Baker, set amidst a backdrop of vibrant, lush greenery.</li>
                                <li><strong>Patna Grasslands:</strong> Vast, rolling open fields that create a unique, moody landscape, particularly beautiful during the early morning hours.</li>
                                <li><strong>Montane Cloud Forest:</strong> Walk through rare, ancient forests where dwarfed, moss-covered trees create a scene straight out of a fantasy novel.</li>
                                <li><strong>Endemic Wildlife:</strong> Home to unique residents like the Sambar Deer, Purple-faced Leaf Monkey, and the elusive Sri Lankan Leopard.</li>
                            </ul>
                        </div>

                        <!-- Visiting -->
                        {{-- <h3 class="box-title">Visiting Horton Plains</h3>
                        <p class="box-text mb-50">
                            Exploring Horton Plains involves a circular trekking trail of approximately 9 kilometers. Because the thick morning mist often rolls in by 10:00 AM and completely obscures the view at World's End, it is highly recommended to start your hike as early as possible (ideally by 6:00 AM). You must bring warm clothing, as the temperature on the plateau can drop drastically before sunrise. Please remember that plastic materials are strictly prohibited inside the park to protect this sensitive UNESCO-listed biodiversity hotspot; kindly carry your water in reusable bottles.
                        </p> --}}

                        <!-- Map -->
                        <h3 class="box-title">Location Map</h3>
                        <div class="mb-10">
                            <div class="ratio ratio-16x9 rounded overflow-hidden">
                                <iframe
                                    src="https://www.google.com/maps?q=Horton+Plains+National+Park+Sri+Lanka&output=embed"
                                    style="border:0;"
                                    allowfullscreen=""
                                    loading="lazy">
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