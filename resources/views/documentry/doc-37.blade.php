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

<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/16713.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Minneriya National Park</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Documentary</li>
                <li>Minneriya National Park</li>
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
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/minneriya/asian-elephant-is-most (1).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Leopard resting on a tree in Yala">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/minneriya/asian-elephant-is-most.jpg') }}')"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Wild Elephants roaming">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/minneriya/caption (1).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;" alt="Yala Jeep Safari">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/minneriya/caption.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;"
                                                alt="Sloth Bear sighting in the wild">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:480px;">
                                            <img src="{{ asset('assets/img/minneriya/minneriya-safari.jpg') }}"
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
                                            <img src="{{ asset('assets/img/minneriya/asian-elephant-is-most (1).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/minneriya/caption (1).jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/minneriya/caption.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/minneriya/elephant-safari-jeep.jpg') }}"
                                                style="width:100%;height:100%;object-fit:cover;">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tour-slider-img" style="height:200px;">
                                            <img src="{{ asset('assets/img/minneriya/minneriya-safari.jpg') }}"
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
                            <a class="page-tag" href="#">Wildlife & Safari</a>
                            <span class="ratting">
                                <i class="fa-solid fa-tree"></i>
                                <span>The Great Gathering</span>
                            </span>
                        </div>

                        <h2 class="box-title mb-20">Minneriya National Park – The Great Elephant Gathering</h2>

                        <!-- Intro -->
                        <p class="box-text mb-30">
                            Situated in the heart of Sri Lanka's Cultural Triangle, Minneriya National Park is a stunning dry-zone sanctuary built around the vast, ancient Minneriya Tank. Constructed by the great King Mahasen in the 3rd century AD, this massive man-made reservoir is the absolute lifeblood of the park. While the park features lush evergreen forests and scrublands, it is most globally renowned for hosting one of the most spectacular, top-ranked wildlife events on the planet-"The Great Elephant Gathering."
                        </p>

                        <p class="box-text mb-30">
                            Every year, during the harsh dry season (from July to October), the smaller water holes in the surrounding jungles of Wasgamuwa and Kaudulla dry up. As the water level of the Minneriya Tank recedes, it leaves behind a bed of fresh, highly nutritious green grass. This causes hundreds of wild Asian elephants to migrate to the shores of the Minneriya Tank to feed, bathe, and socialize. It is not uncommon to see massive herds of 300 to 400 elephants peacefully interacting in a single breathtaking panoramic view.
                        </p>

                        <p class="box-text mb-40">
                            But Minneriya is not just about elephants. The park is a thriving, dynamic ecosystem teeming with diverse wildlife. The reservoir banks are constantly packed with huge flocks of exotic water birds like painted storks, pelicans, and cormorants. If you look closely into the forest canopy, you can spot endemic primates like the purple-faced langur and toque macaque, while lucky visitors might even catch a rare glimpse of a stealthy leopard or a sloth bear hiding in the scrub.
                        </p>

                        <!-- Key Facts -->
                        <h3 class="box-title">Key Facts</h3>
                        <div class="destination-checklist mb-50">
                            <div class="checklist style2">
                                <ul>
                                    <li>Location</li>
                                    <li>Main Attraction</li>
                                    <li>Best Time to Visit</li>
                                    <li>Terrain</li>
                                    <li>Activities</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>North Central Province</li>
                                    <li>The Elephant Gathering</li>
                                    <li>August to September (Dry Season)</li>
                                    <li>Evergreen Forest & Open Grasslands</li>
                                    <li>Jeep Safari, Bird Watching, Photography</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Highlights -->
                        <h3 class="box-title">Highlights & Wildlife</h3>
                        <div class="checklist mb-50">
                            <ul>
                                <li><strong>The Great Gathering:</strong> Witness the largest known meeting place of Asian elephants in the world, with hundreds of elephants drinking, playing, and bathing together.</li>
                                <li><strong>Minneriya Wewa:</strong> The magnificent, ancient 3rd-century reservoir that sustains the entire ecosystem and provides a stunning sunset backdrop.</li>
                                <li><strong>Exotic Water Birds:</strong> A massive haven for birdwatchers, featuring thousands of migratory and resident birds like the lesser adjutant, spot-billed pelican, and grey heron.</li>
                                <li><strong>Primate Spotting:</strong> Watch playful troops of endemic toque macaques (famous from the documentary 'Monkey Kingdom') and purple-faced langurs swinging through the trees.</li>
                                <li><strong>Jeep Safaris:</strong> Thrilling, bumpy off-road adventures that take you right to the water's edge, offering incredibly close encounters with the wildlife.</li>
                            </ul>
                        </div>

                        <!-- Visiting Info -->
                        {{-- <h3 class="box-title">Visiting Minneriya</h3>
                        <p class="box-text mb-30">
                            To experience the absolute best of the Elephant Gathering, you must time your safari perfectly. The ultimate time to enter the park is in the late afternoon, around 3:00 PM. As the intense midday heat begins to cool, the elephant herds slowly emerge from the thick jungle shade and make their way to the grassy reservoir banks to bathe and eat. Staying until 6:00 PM allows you to witness a glorious, golden sunset behind hundreds of silhouettes of wild elephants.
                        </p>

                        <p class="box-text mb-50">
                            You will need to hire a registered 4x4 safari jeep from the park entrance or the nearby town of Habarana. Because you will be driving through dry, open plains, it can get incredibly dusty and windy. Wearing sunglasses, a secure hat, and comfortable cotton clothing is highly recommended. Please remember to respect the wildlife-never encourage your driver to get too close to the elephant herds, especially the highly protective mothers with their tiny calves.
                        </p> --}}

                        <!-- Map -->
                        <h3 class="box-title">Location Map</h3>
                        <div class="ratio ratio-16x9 rounded overflow-hidden">
                            <iframe src="https://maps.google.com/maps?q=Minneriya+National+Park&t=&z=13&ie=UTF8&iwloc=&output=embed" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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