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
    <div style="background-position: center;" class="breadcumb-wrapper"
        data-bg-src="{{ asset('assets/img/bg/16713.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Yala National Park</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Yala National Park</li>
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
                            <div class="swiper th-slider mb-4" id="tourSlider9"
                                data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".tour-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-06/Yala-National-Park-Game-drive-peacock.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Landscape">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-06/yala-national-park-located.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Leopard">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-06/yala-national-park-sri-lanka-scenery.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Elephant">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-06/01-1920-760.webp') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Landscape">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-06/25.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Leopard">
                                        </div>
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/documentary/doc-06/Scenery_in_Yala_National_Park.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Landscape">
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
                                            <img src="{{ asset('assets/img/documentary/doc-06/Yala-National-Park-Game-drive-peacock.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Landscape">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-06/yala-national-park-located.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Leopard">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-06/yala-national-park-sri-lanka-scenery.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Elephant">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-06/01-1920-760.webp') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Landscape">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-06/25.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Leopard">
                                        </div>
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/documentary/doc-06/Scenery_in_Yala_National_Park.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Landscape">
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <!-- Arrows -->
                            <button data-slider-prev="#tourSlider9" class="slider-arrow style3 slider-prev">
                                <img src="{{ asset('assets/img/icon/hero-arrow-left\.svg') }}" alt="">
                            </button>

                            <button data-slider-next="#tourSlider9" class="slider-arrow style3 slider-next">
                                <img src="{{ asset('assets/img/icon/hero-arrow-right\.svg') }}" alt="">
                            </button>
                        </div>

                        <!-- Content -->
                        <div class="page-content">

                            <!-- Meta -->
                            <div class="page-meta mb-30">
                                <a class="page-tag" href="#">Wildlife Safari</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-paw"></i>
                                    <span>National Park</span>
                                </span>
                            </div>

                            <!-- Title -->
                            <h2 class="box-title mb-20">
                                Yala National Park – Land of the Leopard
                            </h2>

                            <!-- Intro -->
                            <p class="box-text mb-30">
                                Yala National Park is Sri Lanka’s most legendary wildlife sanctuary, globally renowned
                                for boasting one of the highest densities of leopards found anywhere in the world.
                                Located in the island’s southeastern corner, this vast wilderness is a place of profound
                                natural drama, where ancient rock formations, sprawling dry monsoon forests, and open
                                plains meet the turquoise waters of the Indian Ocean.
                            </p>

                            <p class="box-text mb-40">
                                For wildlife enthusiasts, Yala is a bucket-list destination. It is a land of untamed
                                beauty, where elusive leopards prowl through the scrub, massive herds of elephants
                                wander across open grasslands, and rare sloth bears forage in the forest undergrowth. It
                                is not just a park; it is a complex, thriving ecosystem that offers a raw and
                                unforgettable encounter with nature in its most powerful state.
                            </p>

                            <!-- Key Facts -->
                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Location</li>
                                        <li>Established</li>
                                        <li>Park Area</li>
                                        <li>Main Feature</li>
                                        <li>Famous Wildlife</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>Southern/Uva Province</li>
                                        <li>1938</li>
                                        <li>978 km²</li>
                                        <li>High Leopard Density</li>
                                        <li>Leopards, Elephants, Sloth Bears</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Landscape -->
                            <h3 class="box-title">Landscape & Ecosystem</h3>
                            <p class="box-text mb-40">
                                Yala’s unique geography is what makes it so special. It encompasses a massive array of
                                habitats, ranging from dense, dark dry-monsoon forests and expansive thorny scrublands
                                to open parklands, freshwater lagoons, and stunning rocky coastal dunes. This diversity
                                is what allows Yala to support such a staggering variety of wildlife throughout the
                                year.
                            </p>

                            <!-- Wildlife -->
                            <h3 class="box-title">Wildlife Highlights</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li><strong>Sri Lankan Leopard:</strong> The ultimate apex predator of the park and
                                        the star attraction of every safari.</li>
                                    <li><strong>Asian Elephant:</strong> Large, impressive herds frequently seen near
                                        the tanks and watering holes.</li>
                                    <li><strong>Sloth Bear:</strong> A shy and elusive inhabitant that is most commonly
                                        spotted when the Palu trees are in fruit.</li>
                                    <li><strong>Spotted Deer & Water Buffalo:</strong> Ubiquitous across the park,
                                        forming the primary prey base for the park's carnivores.</li>
                                    <li><strong>Birds & Reptiles:</strong> Home to over 200 bird species, including the
                                        Sri Lankan Junglefowl, and large populations of mugger crocodiles in the
                                        lagoons.</li>
                                </ul>
                            </div>

                            <!-- Visiting -->
                            {{-- <h3 class="box-title">Visiting Yala</h3>
                        <p class="box-text mb-30">
                            The best time to visit Yala is during the dry season (February to June), when the jungle thins out and animals are forced to congregate around the remaining water sources, making them much easier to spot. Jeep safaris (early morning or late afternoon) are the only way to explore the park, providing safe and intimate encounters while strictly following park conservation rules.
                        </p> --}}

                            <p class="box-text mb-50">
                                When visiting Yala, patience is key. The elusive leopard does not follow a schedule, and
                                the thrill of the safari is the anticipation. Always choose a registered jeep and a
                                professional tracker who understands animal behavior; they are experts at reading the
                                signs of the jungle-like the alarm calls of langur monkeys-to locate the predators
                                hidden in the thick brush.
                            </p>

                            <!-- Map -->
                            <h3 class="box-title">Location Map</h3>
                            <div class="mb-10">
                                <div class="ratio ratio-16x9 rounded overflow-hidden">
                                    <iframe
                                        src="https://www.google.com/maps?q=Yala+National+Park+Sri+Lanka&output=embed"
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
