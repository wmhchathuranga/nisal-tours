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

    <div class="breadcumb-wrapper"
        data-bg-src="{{ asset('assets/img/Aukana/Gemini_Generated_Image_1n8qjy1n8qjy1n8q.png') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Aukana</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Documentary</li>
                    <li>Aukana</li>
                </ul>
            </div>
        </div>
    </div>

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
                                            <img src="{{ asset('assets/img/Aukana/avukana-buddha-statue (1).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/Aukana/avukana-es-una-obra-maestra.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Jeep Safari">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/Aukana/den-nya-dammen-vid-kala.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sloth Bear sighting in the wild">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:640px;">
                                            <img src="{{ asset('assets/img/Aukana/kala-wewa.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Patanangala Beach inside the park">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="swiper th-slider tour-thumb-slider"
                                data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":2},"768":{"slidesPerView":3},"992":{"slidesPerView":3}}}'>
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/Aukana/avukana-buddha-statue (1).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/Aukana/avukana-es-una-obra-maestra.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/Aukana/den-nya-dammen-vid-kala.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/Aukana/kala-wewa.jpg') }}"
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
                                <a class="page-tag" href="#">Historical & Religious</a>
                                <span class="ratting">
                                    <i class="fa-solid fa-monument"></i>
                                    <span>Ancient Carving</span>
                                </span>
                            </div>

                            <h2 class="box-title mb-20">Aukana – A Masterpiece of Ancient Stone Carving</h2>

                            <!-- Intro -->
                            <p class="box-text mb-30">
                                Standing in silent, breathtaking majesty near the massive Kala Wewa reservoir, the
                                Aukana Buddha Statue is universally regarded as one of the most perfectly proportioned
                                and stunning ancient stone carvings in Sri Lanka. Sculpted entirely out of a single,
                                sheer granite rock face during the 5th-century reign of King Dhatusena, this colossal
                                12-meter (39-foot) standing Buddha is a supreme masterclass in ancient Sinhalese
                                stonemasonry, engineering, and artistic devotion.
                            </p>

                            <p class="box-text mb-30">
                                What makes Aukana truly spellbinding is its staggering level of architectural precision.
                                According to local legend and architectural studies, the statue is balanced so
                                flawlessly that a single drop of rainwater falling from the Buddha's nose would drop
                                straight down and land exactly in the tiny space between the toes. The statue’s robe is
                                carved with incredibly fine, symmetrical pleats that cling gracefully to the body,
                                beautifully reflecting the influence of the ancient Amaravati school of art.
                            </p>

                            <p class="box-text mb-40">
                                The name "Aukana" translates to "sun-eating" or "facing the sun," and true to its name,
                                the magnificent statue directly faces the east. Watching the golden rays of the early
                                morning sunrise illuminate the serene, expressionless face of the Buddha is a deeply
                                moving, spiritual experience that leaves every traveler, historian, and pilgrim in
                                absolute awe of Sri Lanka's glorious ancient heritage.
                            </p>

                            <!-- Key Facts -->
                            <h3 class="box-title">Key Facts</h3>
                            <div class="destination-checklist mb-50">
                                <div class="checklist style2">
                                    <ul>
                                        <li>Location</li>
                                        <li>Height</li>
                                        <li>Era</li>
                                        <li>Posture / Mudra</li>
                                        <li>Activities</li>
                                    </ul>
                                </div>
                                <div class="checklist style2">
                                    <ul>
                                        <li>Kekirawa, North Central Province</li>
                                        <li>Approx. 12 Meters (39 ft)</li>
                                        <li>5th Century AD (King Dhatusena)</li>
                                        <li>Ashirvada Mudra (Blessing)</li>
                                        <li>Pilgrimage, Photography, History Tours</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Highlights -->
                            <h3 class="box-title">Highlights & Architectural Marvels</h3>
                            <div class="checklist mb-50">
                                <ul>
                                    <li><strong>The Perfect Proportions:</strong> Marvel at the absolute precision of
                                        the carving, where a vertical line dropped from the nose aligns perfectly with
                                        the space between the feet.</li>
                                    <li><strong>The Intricate Robe:</strong> Observe the deeply carved, flawless, and
                                        tightly clinging pleats of the robe, showcasing unparalleled ancient
                                        craftsmanship.</li>
                                    <li><strong>The Ashirvada Mudra:</strong> The statue's right hand is raised sideways
                                        in a unique, graceful gesture of blessing, while the left hand elegantly grasps
                                        the robe at the shoulder.</li>
                                    <li><strong>The Lotus Pedestal:</strong> The beautifully carved double-petal lotus
                                        pedestal at the feet, which was added slightly later to complete the divine
                                        appearance.</li>
                                    <li><strong>Proximity to Kala Wewa:</strong> Located right next to the massive Kala
                                        Wewa reservoir, another magnificent engineering triumph of the very same king,
                                        King Dhatusena.</li>
                                </ul>
                            </div>

                            <!-- Visiting Info -->
                            {{-- <h3 class="box-title">Visiting Aukana</h3>
                        <p class="box-text mb-30">
                            To truly experience the magic of the Aukana statue, you must aim to visit just before sunrise. As the sun peeks over the horizon, its very first golden rays strike the ancient stone, beautifully highlighting the intricate details, the wavy pleats, and the peaceful expression of the Buddha. The site is relatively quiet and much less crowded compared to the major ruins of Anuradhapura or Polonnaruwa, offering a very peaceful and deeply personal historical experience.
                        </p>

                        <p class="box-text mb-50">
                            As this is an incredibly sacred site for Buddhists, visitors must strictly adhere to the dress code. Modest clothing covering the shoulders and knees is mandatory, and wearing light, white clothing is highly encouraged and respected. You will need to remove your shoes and hats before stepping onto the sacred temple grounds. Bringing a pair of dark socks is highly recommended if you are visiting later in the day, as the sun-baked sand around the statue can become searingly hot to walk on.
                        </p> --}}

                            <!-- Map -->
                            <h3 class="box-title">Location Map</h3>
                            <div class="ratio ratio-16x9 rounded overflow-hidden">
                                <iframe
                                    src="https://maps.google.com/maps?q=Avukana%20Buddha%20Statue&t=&z=15&ie=UTF8&iwloc=&output=embed"
                                    style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
